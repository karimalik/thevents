<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Events extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'status',
        'date',
        'hours',
        'duration',
        'image',
        'description',
        'address',
        'city',
        'code_postal',
        'type',
        'slug',
        'country',
        'user_id',
    ];

    public function categories() {
        return $this->belongToMany(Category::class);
    }
}
