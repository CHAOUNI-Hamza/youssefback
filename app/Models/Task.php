<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Project;

class Task extends Model
{
    use HasFactory, SoftDeletes;

    /**
     * Get the user that owns the phone.
     */
    public function statu()
    {
        return $this->belongsTo(Statu::class);
    }

    /**
     * Get the user that owns the phone.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the user that owns the phone.
     */
    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
