<?php

class PostsController extends \BaseController {

	public function __construct(){
		parent::__construct();

		$this->beforeFilter('auth', array('except' => array('index', 'show')));
		$this->beforeFilter('role_type', array('except' => array('index', 'show')));
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$search = Input::get('search');
		if (is_null($search)) {
			$posts = Post::with('user')->orderBy('created_at', 'desc')->paginate(4);
		} else {
			$posts = Post::with('user')->where('title', 'LIKE', "%$search%")->orWhere('body', 'LIKE', "%$search%")->orderBy('created_at', 'desc')->paginate(4);
		}
		return View::make('posts.index')->with('posts', $posts);
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
		return View::make('posts.show', [
        // send data into the view
        // show a single page
        'post' => Post::find($id),
        ]);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		// goes to edit file
        $post = post::fine($id);
        return View::make('posts.edit')->make();
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		$post = Post::find($id);

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
		$post = Post::find($id);
		if(!$post){
			Session::flash('errorMessage', 'Post was not found');
            return Redirect::action('PostsController@index');
		}
		$post->delete();
		Session::flash('successMessage', 'The post was successfully deleted');
		return Redirect::action('PostController@index');
	}

	public function validateAndSave($post)
	{
		$validator = Validator::make(Input::all(), Post::$rules);
        // attempt validation
        if ($validator->fails()) {
            // validation failed, redirect to the post create page with validation errors and old inputs
            return Redirect::back()->withInput()->withErrors($validator);
        } else {
            $post = new Post();
            $post->user_id = User::first()->id;
            $post->title = input::get('title');
            $post->body = input::get('body');
            $post->save();
        }
        Session::flash('successMessage', 'The post was successfully added!');
        return Redirect::action('PostsController@index');
	}


}
