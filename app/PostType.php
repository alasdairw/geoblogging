<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class PostType extends Model {

	protected $fillable = [
                'name',
    ];
    
    /**
    * Get the posts associated with current post type
    * @return \Illuminate\Database\Eloquent\Relations\Belongs
    */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }

}
