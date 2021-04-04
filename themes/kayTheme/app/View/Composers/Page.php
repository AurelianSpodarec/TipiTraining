<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Page extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'page',
    ];


    public function with()
    {
        return [
            'site' => $this->site(),
        ];
    }





    public function site()
    {

        $data = [];
        // $featured = have_row('flexible_content');
        $featured = get_field('flexible_content');




        // $data = $data->

        foreach($featured as $f) {
             
            

          $data = $f['row_config']['background_color'];

        }

        return $data;
    }
}
