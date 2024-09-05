<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\UserStoreRequest;
use App\Models\User;
use Spatie\Permission\Models\Role;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $title ="لیست کاربران";
        return view("admin.users.list" , compact('title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $title = "ایجاد کاربر";
        return view('admin.users.create' , compact('title'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(UserStoreRequest $request)
    {
        User::query()->create([
            'name'=>$request->input('name'),
            'username'=>$request->input('username'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email'),
            'password'=>Hash::make($request->input('password')),
        ]);
        return redirect(route('users.index'))->with('message' ,'کاربر جدید با موفقیت ثبت شد');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $title = "ویرایش کاربر";
        $user = User::query()->find($id);
        return view("admin.users.edit" , compact(['user' , 'title']));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UserUpdateRequest $request, $id)
    {
        $user = User::query()->find($id);
        $user->update([
            'name'=>$request->input('name'),
            'username'=>$request->input('username'),
            'email'=>$request->input('email'),
            'phone'=>$request->input('phone'),
            'password'=>$request->input('password') ? Hash::make($request->input('password')):$user->password,
        ]);
        return redirect()->route('users.index')->with('message' ,'کاربر جدید با موفقیت ویرایش شد');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
       $user->delete();
       return redirect(route('users.index'));
    }

    public function createUserRoles($id)
    {
        $user = User::query()->find($id);
        $roles = Role::query()->get();
        return view("admin.users.user_roles" , compact('user' , 'roles'));
    }
    public function storeUserRoles(Request $request , $id)
    {
        $user = User::query()->find($id);
        $user->syncRoles($request->roles);
        return redirect(route('users.index'))->with('message' ,'نقش های کاربر با موفقیت ویرایش شد');
    }


}
