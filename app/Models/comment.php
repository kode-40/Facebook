<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class comment extends Model
{
    protected $fillable = [
        'user_id',
        'text',
        'status_id',
    ];
    public function status()
    {
        return $this->belongsTo(status::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
