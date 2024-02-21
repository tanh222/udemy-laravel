<?php

namespace App\Http\Controllers;

use App\Http\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    public function insert()
    {
        DB::insert('insert into posts(user_id,title,content) values(?,?,?)', ['1003', 'laravel ,', 'laravel is the best to PHP ']);
    }

    public function read()
    {
        $results = DB::select('select * from posts where id = ?', [10]);
        foreach ($results as $post) {
            return $post->title;
        }
    }

    public function update()
    {
        $update = DB::update('update posts set title="update title"where id=?', [6]);
        return $update;
    }

    public function delete()
    {
        $delete = DB::delete('delete from posts where id=?', [6]);
        return $delete;
    }

    public function find()
    {
        $posts = Post::all();
        dd($posts);
        $array = [];
        foreach ($posts as $post) {
            array_push($array, $post->title);
        }
        return $array;
    }

    public function findWhere()
    {
        $posts = Post:: where('id', 8)->orderBy('id', 'desc')->take(2)->get();
        return $posts;
    }

    public function findmore()
    {
        $posts = Post:: where('user_count', '<', 50)->firstOrfail();
    }

    public function basicinsert()
    {
        $posts = new Post;
        $posts->title = 'New eloquent ';
        $posts->content = 'wow eloquent is really cool :)';
        $posts->save();
    }

    public function basicinsert2()
    {
        $posts = Post:: find(20);
        $posts->title = 'New eloquent insert 2';
        $posts->content = 'wow eloquent is really cool 2';
        $posts->save();
    }

//    public function create()
//    {
//        Post::create(['user_id' => '8', 'title' => 'the create mothed', 'content' => 'wow i\'am learning alot with ediwn diaz']);
//    }

    public function upding()
    {
        Post::where(['id' => '20'])->update(['title' => 'PHP laravel', 'content' => 'laravel']);
    }

    public function delete1()
    {
        $posts = Post::find(10);
        $posts->delete();
    }

    public function delete2()
    {
        Post:: destroy([8, 9]);
    }

    public function softdelete()
    {
        Post::find(16)->delete();
    }

    public function readsoftdelete()
    {
        $post = Post::withTrashed()->where('content', 'laravel')->get();
        //   dd($post);
        return $post;
    }


    public function index()
    {
        $posts = Post::all();
//        dd($posts = Post::all());
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
//        dd($request->all());
//        return $request->all();

        $post = new Post;
        $post->user_id = $request->userid;
        $post->title = $request->title;
        $post->content = $request->content;
//        dd($post);
        $created = $post->save();
        dd($created);
//        dd($request->content);
    }

    public function show($id)
    {
        $post = Post::findOrFail($id);
//        dd($posts);
        return view('posts.show', compact('post'));
    }

    public function edit($id)
    {
        $post = Post::findOrFail($id);
        return view('posts.edit', compact('post'));
    }

    public function updatePost(Request $request, $id)
    {
        $post = Post::findOrFail($id);
        $post->update($request->all());
        return redirect('index');

    }

    public function deleteProduct($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();
        return redirect('index');

    }


    public function signup()
    {
        return view('auth.signup');
    }
}
