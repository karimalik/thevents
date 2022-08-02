<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

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

        /**

     * Boot the model.

    */

   protected static function boot()
   {
       parent::boot();

       static::created(function ($event) {
           $event->slug = $event->createSlug($event->name);
           $event->save();
       });
   }

   /**
    * Write code on Method
    *
    * @return response()
    */
   private function createSlug($name){
       if (static::whereSlug($slug = Str::slug($name))->exists()) {

           $max = static::whereTitle($name)->latest('id')->skip(1)->value('slug');

           if (is_numeric($max[-1])) {
               return preg_replace_callback('/(\d+)$/', function ($mathces) {
                   return $mathces[1] + 1;
               }, $max);
           }
           return "{$slug}-2";
       }
       return $slug;
   }
}
