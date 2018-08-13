<?php 
namespace App\Http\Controllers;
use Auth;
use App\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
	public function getDashboard()
	{
		$posts = Post::all();
		return view('dashboard', ['posts' => $posts]);
	}

	public function postCreatePost(Request $request)
	{
		//validate
		$this->validate($request, [

			'body' => 'required|max:1000'
		]);

		$post = new Post();
		$post->body = $request['body'];
		$message = 'Oops, there was an error';
		if($request->user()->posts()->save($post)){
			$message = 'Post successfully created!';
		}
		return redirect()->route('dashboard')->with(['message' => $message]);

	}
}