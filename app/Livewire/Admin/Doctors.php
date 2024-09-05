<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Doctor;
use Livewire\WithPagination;

class Doctors extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public $search;
    
    
    public function render()
    {
        $doctors =Doctor::query()->where('name','like','%'.$this->search.'%')->paginate(3);
        return view('livewire.admin.doctors' , compact('doctors'));
    }
}
