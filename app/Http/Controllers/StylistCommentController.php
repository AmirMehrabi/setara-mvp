<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Stylist;

class StylistCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request, Stylist $stylist)
    {
        $request->validate([
            'comment' => 'required|string|max:500',
        ]);

        $stylist->commentAsUser(auth()->user(), $request->input('comment'));
        

        return redirect()->back()->with('success', 'Comment added successfully!');
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
    public function destroy(Comment $comment)
    {
        $this->authorize('delete', $comment); // Ensure only authorized users can delete comments

        $comment->delete();

        return redirect()->back()->with('success', 'Comment deleted successfully!');
    }
}
