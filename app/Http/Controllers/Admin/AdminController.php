<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Turn;
use App\Models\User;
use Spatie\Permission\Models\Role;


class AdminController extends Controller
{
    public function index()
    {
        $title = "صفحه اصلی";
        $turns = Turn::query()->take(6)->get();
        $users = User::query()->get();
        $roles = Role::query()->take(1)->get();
        return view('admin.index' , compact(['title' , 'turns' , 'users' , 'roles']));
    }




    
}
