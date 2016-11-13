<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Auth;


class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('id', 'desc')->where('user_id', Auth::id())->paginate(10);

        return view('home', compact('posts'));
    }

    /**
  	 * Store a newly created resource in storage.
  	 *
  	 * @param Request $request
  	 * @return Response
  	 */
  	public function store(Request $request)
  	{
  		$post = new Post();

  		$post->user_id = $request->input("user_id");
      $post->body = $request->input("body");

  		$post->save();

  		return redirect()->route('home')->with('message', 'Item created successfully.');
  	}
}
