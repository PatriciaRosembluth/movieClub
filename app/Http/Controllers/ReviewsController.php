<?php namespace App\Http\Controllers;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Review;
use App\Like;
use App\Http\Requests\ReviewRequest;
use Auth;


class ReviewsController extends Controller {

	public function __construct(){
		$this->middleware('auth');
	}

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */

	public function like($id)
	{	
		$review = Review::find($id);
		$review->likes += 1;
		$review->save();

		$like = new Like;
		$like->review_id = $id;
		Auth::user()->likes()->save($like);
		return redirect('movies');
	}

	public function index()
	{
		//
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
	public function store(ReviewRequest $request)
	{
		$input = $request->all();
		$review = new Review($input);
		Auth::user()->reviews()->save($review);
 		return redirect('movies');
	}

	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//
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
	public function update($id)
	{
		//
	}

	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		Review::destroy($id);
		return redirect('movies');
	}

}
