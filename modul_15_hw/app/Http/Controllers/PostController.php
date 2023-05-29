<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class  PostController extends Controller
{


    // //👀👀 Task 7: Resource Controller

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return "  // Show all posts";
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return " // Show the form to create a new post";
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return " // Store the newly created post";
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return "// Show a specific post by its ID";
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return " // Show the form to edit a specific post by its ID";
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return "// Update a specific post by its ID";
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return " // Delete a specific post by its ID";
    }
}
