<?php

use App\template;
use Illuminate\Database\Seeder;

class TemplateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Template::create([
            'id'            => 1,
            'titletemplate' => 'Plantilla Default',
            'sectioncolor'  => '#57a4ec',
            'colorfirst'     => '#57a4ec',
            'colorsecond'   => 'green',
            'colorthird'    => 'red',
            'colorfondo'    => 'blue',
            'colortextnavone'    => 'white',
            'colortextnavsec'    => 'white',
            'colortextnavact'    => 'white',
            'colortexttitles'    => 'white',
            'colortextsubtitles'    => 'white',
            'colortextparagraph'    => 'white',
            'colortextlink'    => 'white',
            'activo'        => 1,
        ]);
    }
}
