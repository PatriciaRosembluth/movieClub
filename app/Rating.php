<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Rating extends Model {

	protected $fillable = ['value', 'movie_id', 'user_id'];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function movie()
	{
		return $this->belongsTo('App\Movie');
	}

}
