<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;

use App\Models\User;
use Hash;

class UserController extends Controller
{
    /** Index
     * Show the list of item without pagination
     */
    public function index()
    {
        $users = User::all();
        return view('users.index')->with('users', $users);
    }

    /**Create New Record 
     * This function show the page to create a new record in database
    */
    public function create()
    {

        return view('users.create');
    }
    /**
     * Update Exsisting Record
     * This function will show the page to update the exsisting record in database
     */

    public function edit($id)
    {
        $user = User::find($id);

        return view('users.edit',compact('user'));

    }


   /**Create New Record 
     * This function used to create a new record in database
    */
    public function userCreate(Request $request)
    {  
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6|confirmed:password_confirmation',
        ]);
           
        $data = $request->all();

        $check =  User::create([
          'name' => $data['name'],
          'email' => $data['email'],
          'group_code' => 2,
          'password' => Hash::make($data['password'])
        ]);
         
        return redirect("dashboard")->withSuccess('You have signed-in');
    }

    /**Create New Record 
     * This function used to update a new record in database
    */
    public function userUpdate(Request $request, $id)
    {

        $user = User::find($id);

        $request->validate([
          'name' => 'required',
          'email' => 'required|email|unique:users,email,'.$user->id,
          'password' => 'required|min:6|confirmed:password_confirmation',
        ]);
    
        $input = $request->all();

        $user->update($input);

        return redirect('user-list');  

    }

    /**Create New Record 
     * This function used to delete a new record in database
    */
    public function userDestroy($id)
    {

        $user = User::find($id);
        $user->delete();
        return response()->json([
            'message' => 'User deleted successfully!',
        ]);

    }

}
