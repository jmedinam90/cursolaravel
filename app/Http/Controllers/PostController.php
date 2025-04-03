<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PostController extends Controller
{
    private function getPosts()
    {
        $posts = request()->cookie('posts');
        return $posts ? json_decode($posts, true) : [];
    }

    private function savePosts($posts)
    {
        return cookie('posts', json_encode($posts), 60);
    }

    public function index()
    {
        $posts = $this->getPosts();
        return view('posts.index', compact('posts'));
    }

    public function create()
    {
        return view('posts.create');
    }

    public function store(Request $request)
    {
        $posts = $this->getPosts();
        $id = count($posts) > 0 ? max(array_column($posts, 'id')) + 1 : 1;

        $posts[] = [
            'id' => $id,
            'title' => $request->title,
            'content' => $request->content
        ];

        return redirect()->route('posts.index')->withCookie($this->savePosts($posts));
    }

    public function show($id)
    {
        $post = collect($this->getPosts())->firstWhere('id', $id);
        return view('posts.show', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        $posts = $this->getPosts();
        foreach ($posts as &$post) {
            if ($post['id'] == $id) {
                $post['title'] = $request->title;
                $post['content'] = $request->content;
                break;
            }
        }

        return redirect()->route('posts.index')->withCookie($this->savePosts($posts));
    }

    public function destroy($id)
    {
        $posts = array_filter($this->getPosts(), fn($post) => $post['id'] != $id);
        return redirect()->route('posts.index')->withCookie($this->savePosts(array_values($posts)));
    }
}
