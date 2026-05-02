<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;

    public function author(){
        return $this->belongsTo(User::class, 'author_id', 'id');
    }

    public function tags(){
        return $this->belongsToMany(Tag::class);
    }

    protected $casts = [
        'completed_at' => 'datetime',
    ];
}
