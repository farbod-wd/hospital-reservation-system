<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Patient;
use Livewire\WithPagination;

class Paitients extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public $search;
    
    
    public function render()
    {
        $paitients =Patient::query()->where('name','like','%'.$this->search.'%')->paginate(3);
        return view('livewire.admin.paitients' , compact('paitients'));
    }
}
