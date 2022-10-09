<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\residentCategory;
use Livewire\WithPagination;
use Illuminate\Validation\Rule;

class CategoriesControlPanel extends Component
{
    use WithPagination;

    public $modalFormVisible = false;
    public $modalConfirmDeleteVisible = false;
    public $category;
    public $category_description;

    public $category_Target_ID;
    public $search = '';

    public function mount() {
        $this->resetPage();
    }

    // create
    public function createShowModal() {
        $this->resetVariables();
        $this->resetValidation();
        $this->modalFormVisible = true;
    }

    public function resetVariables() {
        $this->category = null;
        $this->category_description = null;
        $this->category_Target_ID = null;
    }

    public function rules() {
        return [
            'category' => ['required', Rule::unique('resident_categories','category')->ignore($this->category_Target_ID)],
            'category_description' => ['required'],
        ];
    }

    // upload the data to the database
    public function store() {
        $this->validate();
        residentCategory::create($this->DataToBeStored());
        $this->modalFormVisible = false;
        $this->resetVariables();
    }

    public function DataToBeStored() {
        return [
            'category' => $this->category,
            'category_description' => $this->category_description,
        ];
    }

    public function read($search) {
        if(empty($search)) {
            return residentCategory::orderBy('created_at', 'asc')->paginate(5);
        }
        else {
            return residentCategory::where('category', 'LIKE', '%' . $search . '%')->orWhere('category_description', 'LIKE', '%' . $search . '%')->orderBy('created_at', 'asc')->paginate(5);
        }
    }

    public function loadModel() {
        $founded_category = residentCategory::find($this->category_Target_ID);
        $this->category = $founded_category->category;
        $this->category_description = $founded_category->category_description;
    }

    public function delete() {
        residentCategory::destroy($this->category_Target_ID);
        $this->modalConfirmDeleteVisible = false;
        $this->resetPage();
    }

    public function deleteShowModal($id) {
        $this->category_Target_ID = $id;
        $this->modalConfirmDeleteVisible = true;
    }

    public function render()
    {
        return view('livewire.categories-control-panel', [
            'allCategories' => $this->read($this->search),
        ]);
    }
}
