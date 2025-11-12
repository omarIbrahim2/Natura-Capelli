<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;
use Astrotomic\Translatable\Contracts\Translatable;
use Astrotomic\Translatable\Translatable as AstrotomicTranslatable;

class Routine extends Model implements Translatable
{
    use AstrotomicTranslatable; 

    protected $guarded = ['id' , 'created_at' , 'updated_at'];
    public $translatedAttributes = ['title'];

     public $translationModel = \App\Models\Translations\RoutineTranslation::class;



  protected static function booted(): void
    {
        static::deleting(function (Routine $routine) {
            // Delete the image file when the routine is deleted
            if ($routine->image) {
                Storage::disk('local')->delete($routine->image);
            }
        });
    }



}
