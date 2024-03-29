<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        //$category = Category::find(2);
        //$post = Post::find(1);
        //$tag = Tag::find(1);
        //$posts = Post::where('category_id', $category->id)->get();
        //dd($tag->posts);
        //dd($category->posts);

        return view('post.index', compact('posts'));
    }

    public function create()
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.create', compact('categories', 'tags'));

    }

    public function store()
    {
        $data = request()->validate([
            'title' => 'required|string',
            'post_content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $post = Post::create($data);

        $post->tags()->attach($tags);

        return redirect()->route('post.index');
    }

    public function show(Post $post)
    {
        return view('post.show', compact('post'));
    }

    public function edit(Post $post)
    {
        $categories = Category::all();
        $tags = Tag::all();
        return view('post.edit', compact('post', 'categories', 'tags'));
    }


    public function update(Post $post)
    {
        $data = request()->validate([
            'title' => 'string',
            'post_content' => 'string',
            'image' => 'string',
            'category_id' => '',
            'tags' => '',
        ]);
        $tags = $data['tags'];
        unset($data['tags']);

        $post->update($data);
        //$post = $post->fresh();
        $post->tags()->sync($tags);
        return redirect()->route('post.show', $post->id);
    }

    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->route('post.index');
    }

    /*public function delete()
    {
        $post = Post::withTrashed()->find(2);
        $post->restore();
        dd('deleted');
    }*/

    public function firstOrCreate()
    {
        $anotherPost = [
            'title' => 'some post',
            'content' => 'some content',
            'image' => 'img11.jpg',
            'likes' => 555550,
            'is_published' => 1,
        ];

        $post = Post::firstOrCreate([
            'title' => 'some post phpstorm'
        ],
            [
                'title' => 'some post phpstorm',
                'content' => 'some content',
                'image' => 'img11.jpg',
                'likes' => 555550,
                'is_published' => 1,
            ]);

        dump($post->content);
        dd('finished');
    }
}
