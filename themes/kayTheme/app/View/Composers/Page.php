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
 
        for ($index = 0; $index <= $flexibleContentLength - 1; $index++) {

            $row = $flexibleContent[$index];

            $rowContent = $row['row'];
            $rowConfig = $row['row_config'];

            // $columnConfig = $rowContent['column_config'];
// 
// print_r($rowContent[$index]['column_config']);
// print_r($rowContent);
            // foreach ($rowContent as $obj) {
            //     print_r($obj);
            //     // array_push($data, $obj['column_config']['column_width']);
            // }

            print_r($row['row'][0]['column_config']['column_width']);
            $row = [
                
            ];

            $rowConfig = [
                'container'       => $rowConfig['container'],
                'backgroundColor' => $rowConfig['background_color'],
            ];

           

            array_push($data, $rowConfig);
            
          }

        return $data;
    }
}
