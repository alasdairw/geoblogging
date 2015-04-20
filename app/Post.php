<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model {

    protected $fillable = [
                'title',
                'post_type_id',
                'user_id',
                'body',
                'lat',
                'long',
    ];

    protected $dates = [
        'published_at'
    ];

	/**
    * Get the post type associated with current post
    * @return \Illuminate\Database\Eloquent\Relations\Belongs
    */
    public function post_type()
    {
        return $this->belongsTo('App\PostType');
    }

    /**
    * Get the user associated with current post
    * @return \Illuminate\Database\Eloquent\Relations\Belongs
    */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
