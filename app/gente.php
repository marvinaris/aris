<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class gente extends Model
{

/**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'gentes',
    ];

 /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'gentes',
    ];

    protected $table="gentes";
}
