<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class template extends Model
{
    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'templates';

    /**
    * The database primary key value.
    *
    * @var string
    */
    protected $primaryKey = 'id';

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = [
        'titletemplate',
        'sectioncolor',
         'colorfirst',
         'colorsecond',
         'colorthird',
         'colorfondo',
         'colortextnavone',
         'colortextnavsec',
         'colortextnavact',
         'colortexttitles',
         'colortextsubtitles',
         'colortextparagraph',
         'colortextlink',
         'activo'
     ];

    
}
