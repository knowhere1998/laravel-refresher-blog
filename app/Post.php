<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
	protected $fillable = [
		'author_id',
		'title',
		'content'
	];

	public $dates = [ 'created_at' ];

	public static function lastMonth($query, int $limit = 5) {
		return $query->whereBetween('created_at', Carbon::now()->subMonth())
			->orderBy('posted_at', 'desc')
			->limit($limit);
	}

	public function author() {
		return $this->belongsTo('App\User', 'author_id');
	}

//	/**
//	 * Get the route key for the model.
//	 *
//	 * @return string
//	 */
//	public function getRouteKeyName() {
//		return 'slug';
//	}


	public function comments() {
		return $this->hasMany('App\Comment');
	}
}
