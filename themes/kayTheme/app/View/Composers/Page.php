<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Page extends Composer
{
   
    protected static $views = [
        'page',
    ];

    public function with()
    {
        return [
            'page' => $this->page(),
        ];
    }


    public function page()
    {

        $data = [];

        $flexibleContent = get_field('flexible_content');
        $flexibleContentLength = count($flexibleContent);
//  print_r($flexibleContent);

        for ($index = 0; $index <= $flexibleContentLength - 1; $index++) {

            $row = $flexibleContent[$index];

            $rowContent = $row['row'];
            $rowConfig = $row['row_config'];

            $column = $row['row'][0]['column'][0];
            $columnConfig = $row['row'][0]['column_config'];

            // print_r($flexibleContent);
            
            $rowConfigData = [
                'container'       => $rowConfig['container'],
                'backgroundColor' => $rowConfig['background_color'],
            ];
            
            $columnConfigData = [
                'columnWidth'   => $columnConfig['column_width'],
            ];
            
          
            
            // print_r($column);   

            // pass in the button as well

           

            array_push($data, array_merge($rowConfigData, $columnConfigData, $column));
            
          }

        return $data;
    }
}
