<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Profiles extends Model
{
    use HasFactory;

    protected $fillable = [
        'address',
        'code_postal',
        'address',
        'city',
        'country',
        'phone',
        'company',
        'user_id',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }
}
