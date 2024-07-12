<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('content.dashboard.Dashboards-profile ');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('content.dashboard.Dashboards-profile_create');
    }
   
    public function store(Request $request)
    {
        // Validate input
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:8', // Add validation for the password field
            // Add more validation rules as needed
        ]);
    
        // Create new user profile
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = bcrypt($request->password); // Hash the password
        // Set other attributes if needed
        $user->save();
    
        return redirect()->route('profile.index');
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
    public function edit(string $id)
    {
        
             $user = User::find($id);
            return view('content.dashboard.Dashboards-profile_edit', compact('user'));

        
      
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        

        $user = User::find($id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();
        // return redirect()->route('profiles.edit', $user->id);
        return redirect()->route('profile.index');
        
    }




    
  
    public function destroy(string $id)
    {
        //
    }
}