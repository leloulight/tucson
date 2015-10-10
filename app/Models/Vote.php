<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'photos';

    /**
     * Get the user that owns the vote.
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get the photo that owns the vote.
     */
    public function photo()
    {
        return $this->belongsTo('App\Models/Photo');
    }
}
