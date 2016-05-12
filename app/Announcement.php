<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Announcement extends Model
{
    protected $fillable = ['title','details'];

    public static function getAllAnnouncements() {
        return \App\Announcement::orderBy('id','desc')->get();
    }
//
}
