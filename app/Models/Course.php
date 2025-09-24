<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    protected $guarded = [];

    /**
     * Get the universities that offer this course.
     */
    public function universities()
    {
        return $this->belongsToMany(University::class);
    }
}
