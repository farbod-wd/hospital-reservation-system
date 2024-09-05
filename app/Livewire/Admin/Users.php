<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\User;
use Livewire\WithPagination;

class Users extends Component
{
    use WithPagination;
    protected $paginationTheme = "bootstrap";
    public $search;
    
    
    public function render()
    {
        $users =User::query()->where('name','like','%'.$this->search.'%')->paginate(3);
        return view('livewire.admin.users' , compact('users'));
    }
}
