<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    public function getUser(){
        return $this->belongsTo(User::class);
    }
    protected $fillable = [
        'userid',
        'task',
        'task_status',
    ];
}
