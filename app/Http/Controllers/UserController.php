<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function view()
    {
        return view('adduser');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function register(UserRequest $request)
    {
        $request->all();
        echo "<pre>";
        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'mobile' => $request->mobile,
        ]);

        return redirect('/view/user')->with('success', 'User created successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $users = User::paginate(10);
        $data=compact('users');
        return view('viewuser')->with($data);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
