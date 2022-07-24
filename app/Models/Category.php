<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'slug',
    ];

    public $timestamps = false;

    public function events() {
        return $this->belongToMany(Events::class);
    }

    /**

     * Boot the model.

    */

    /* protected static function boot()
    // {
    //     parent::boot();

    //     static::created(function ($categorie) {

    //         $categorie->slug = $categorie->createSlug($categorie->name);

    //         $categorie->save();
    //     });
    // }

    // /**
    //  * Write code on Method
    //  *
    //  * @return response()
    //  */
    // private function createSlug($name)
    // {
    //     if (static::whereSlug($slug = Str::slug($name))->exists()) {

    //         $max = static::whereName($name)->latest('id')->skip(1)->value('slug');

    //         if (isset($max[-1]) && is_numeric($max[-1])) {

    //             return preg_replace_callback('/(\d+)$/', function ($mathces) {

    //                 return $mathces[1] + 1;
    //             }, $max);
    //         }
    //         return "{$slug}-2";
    //     }
    //     return $slug;
    // }
}
