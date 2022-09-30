<?php

namespace App\Actions\Fortify;

use App\Models\User;
use Illuminate\Http\Request;
use Laravel\Jetstream\Jetstream;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Laravel\Fortify\Contracts\CreatesNewUsers;

class CreateNewUser implements CreatesNewUsers
{
    use PasswordValidationRules;

    /**
     * Validate and create a newly registered user.
     *
     * @param  array  $input
     * @return \App\Models\User
     */
    public function create(array $input)
    {
        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => $this->passwordRules(),
            'birthday' => ['required', 'date'],
            'mobile_number' => ['required', 'string', 'min: 11', 'max: 11', 'unique:users'],
            'gender' => ['required', 'string'],
            'address' => ['required', 'string'],
            'registerMeAs' => ['required'],
            'id_picture' => ['required','mimes:jpg,png,jpeg','max:5048'],
            'terms' => Jetstream::hasTermsAndPrivacyPolicyFeature() ? ['accepted', 'required'] : '',
        ])->validate();

        // dd($input['id_picture']->guessExtension());

        $newImageName = time() . '-' . $input['mobile_number'] . '.' . $input['id_picture']->guessExtension();

        $input['id_picture']->move(public_path('id_pictures'), $newImageName);

        return User::create([
            'name' => $input['name'],
            'email' => $input['email'],
            'password' => Hash::make($input['password']),
            'birthday' => $input['birthday'],
            'mobile_number' => $input['mobile_number'],
            'gender' => $input['gender'],
            'address' => $input['address'],
            'registerMeAs' =>$input['registerMeAs'],
            'id_picture'=> $newImageName,
        ]);
    }
}
