<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model {

	protected $fillable = ['name', 'description', 'category'];

	public function reviews()
	{
		return $this->hasMany('App\Review');
	}

	public function ratings()
	{
		return $this->hasMany('App\Rating');
	}
}
