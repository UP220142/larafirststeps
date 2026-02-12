<?php

namespace App\Http\Controllers\DashBoard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

use App\Models\Post;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $post = Post::find(1);


        // ->delete();

        // $post->update(
        //     [
        //         'title' => 'test title new',
        //         'slug' => 'test slug',
        //         'content' => 'test content',
        //         'image' => 'test image',
        //     ]
        // );

        // dd($post);


        return 'Index';
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id');
        return view('dashboard.post.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {


        $validated = Validator::make(
            $request->all(),
            [
                'title' => 'required|min:5|max:255',
                'slug' => 'required|min:5|max:255',
                'content' => 'required|min:7',
                'category_id' => 'required|integer',
                'desciption' => 'required|min:7',
                'posted' => 'required',
            ]
        );

        dd($validated->fails());



        // $request->validate([
        //     'title' => 'required|min:5|max:255',
        //     'slug' => 'required|min:5|max:255',
        //     'content' => 'required|min:7',
        //     'category_id' => 'required|integer',
        //     'desciption' => 'required|min:7',
        //     'posted' => 'required',
        // ]);

        // Post::create($request->all());
        // return to_route('post.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post)
    {
        //
    }
}
