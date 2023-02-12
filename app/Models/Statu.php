<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Task;
use Illuminate\Database\Eloquent\SoftDeletes;

class Statu extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get the phone associated with the user.
     */
    public function task()
    {
        return $this->hasMany(Task::class);
    }
    
}
