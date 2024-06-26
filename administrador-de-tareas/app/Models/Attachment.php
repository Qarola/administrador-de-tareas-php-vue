<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attachment extends Model
{
    use HasFactory;

    protected $fillable = [
        'file_name',
        'file_path',
        'user_id',
        'task_id',
    ];

    /**
     * Get the user that owns the attachment.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the task that owns the attachment.
     */
    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}

