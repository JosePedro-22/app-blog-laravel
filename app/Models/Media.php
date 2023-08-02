<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Media extends Model
{
    use HasFactory;

    protected $fillable = [
        'hash',
        'path'
    ];

    public static function boot(  )
    {
        parent::boot();
        static::creating(
            function ($media){
                $media->hash = Str::uuid();
            }
        );
    }
}
