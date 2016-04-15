<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$per_page = Inptu::get('limit');
		$posts = Post::paginate();
		return View::make('posts.index' , [
			'posts' => Post::all()
			]);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		$post = new Post();

		$this->validateAndSave($post);
		
	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		return 'showing show';
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id)

		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id)

		$this->validateAndSave($post);
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id)
		if($post){
			$post->delete();
		}

		return Redirect::action('PostController@index');
	}

	public function validateAndSave($id)
	{
		$validator = Validator::make(Input::all(), Post::$rules);
		if ($validator->fails()){
			Session::flash('error-message', 'Validation has failed!')
			return Redirect::back()->withInput()->withErrors($validator);
		}
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();
			Session::flash('sucess-message', 'Validation has passed!')
		
		return Redirect::action('PostController@index');
	}


}
