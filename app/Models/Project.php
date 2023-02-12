<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\User;
use App\Models\Task;

class Project extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the phone associated with the user.
     */
    public function task()
    {
        return $this->hasMany(Task::class);
    }

    
}
