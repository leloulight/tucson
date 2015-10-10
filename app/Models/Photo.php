<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'photos';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['title', 'description', 'is_private', 'user_id'];

    /**
     * Get the votes of a photo.
     */
    public function votes()
    {
        return $this->hasMany('App\Model\Vote');
    }

    /**
     * Get the user that owns the photo.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
