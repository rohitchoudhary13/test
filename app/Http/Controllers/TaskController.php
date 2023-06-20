<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Models\User;

use Illuminate\Http\Request;

class TaskController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('task');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->all();
        Task::create([
            $request->userid,
            $request->task,
            $request->task_status,

        ]);
        
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        $users=User::all();
        $data=compact('users');
        return view('task')->with($data);
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
