<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class status extends Model
{
    protected $fillable = [
        'user_id',
        'text',
    ];
    public function comment()
    {
        return $this->hasMany(comment::class);
    }
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
