<?php

namespace App\Http\Controllers\DashBoard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use Illuminate\Http\Request;

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
            $categories = Category::pluck('id', 'title');
            return view('dashboard.post.create', compact('categories'));
            }
            
            /**
             * Store a newly created resource in storage.
            */
            public function store(Request $request)
            {
            
                Post::create($request->all());

                // Post::create(
                //     [
                //         'title' => $request->all()['title'],
                //         'slug' => $request->all()['slug'],
                //         'content' => $request->all()['content'],
                //         'category_id' => $request->all()['category_id'],
                //         'description' => $request->all()['description'],
                // //         'posted777' => $request->all()['posted']
                // //     ]
                // // );
                 return to_route('post.index');
                
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
