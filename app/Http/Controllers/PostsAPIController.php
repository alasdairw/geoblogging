<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;

use App\Post;
use App\Http\Requests\PostRequest;

use Illuminate\Http\Request;

class PostsAPIController extends Controller {

	
	/**
	 * Construct Controller, disable CSRF protection
	 */
	public function __construct() 
	{
        $this->beforeFilter('csrf', ['on' => '']);
	}


	/**
	 * Create a new faction
	 * @param FactionRequest $request
	 * @return Faction
	 */
	private function createPost(PostRequest $request)
	{
		$post = Post::create($request->all());
		return $post;
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::all();
		return $posts;
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store(PostRequest $request)
	{
		return $this->createPost($request);
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show(Post $post)
	{
		return $post;
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
	}

	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update(Post $post, PostRequest $request)
	{
		$post->update($request->all());
		return $post;
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
	}

}
