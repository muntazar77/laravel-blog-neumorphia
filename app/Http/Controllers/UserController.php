<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Validator;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();
        return view('admin/users', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validated = $request->validate([
            'name' => 'required',
            'email' => "required|email|unique:users,email",
            'password' => 'required',
            'role' => 'required'

        ]);

// dd($request->role);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'role' => $request->role,
            'password' => bcrypt($request->password)
        ]);

        return to_route('users.index')->with('success', 'User created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($userId)
    {
        // dd($userId);
        $user = User::find($userId);
        return view('admin/user_category_edit', ['user' => $user,'page_type' => 'user_edit']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $userId)
    {


        $name = $request->name;
        $email = $request->email;
        $role =$request->role;
        $password = bcrypt($request->password);


        $singleUserFromDB = User::find($userId);

        if ($request->password != null) {

            $singleUserFromDB->update([
                'name' => $name,
                'email' => $email,
                'password' => $password,
                'role' => $role,
            ]);
        } else {
            $singleUserFromDB->update([
                'name' => $name,
                'email' => $email,
                'role' => $role,

            ]);
        }

        return to_route('users.index')->with('success', 'User updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($userId)
    {
        $user = User::find($userId);
        $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully');
    }
}
