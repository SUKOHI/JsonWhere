# JsonWhere
A PHP package mainly developed for Laravel to easily set where clause for JSON.

Installation&settings for Laravel
====

After installation using composer, add the followings to the array in  app/config/app.php

    'providers' => array(  
        ...Others...,  
        'Sukohi\JsonWhere\JsonWhereServiceProvider',
    )

Also

    'aliases' => array(  
        ...Others...,  
        'JsonWhere' => 'Sukohi\JsonWhere\Facades\JsonWhere',
    )

Usage
====

    $jsons = DB::table('tests')
                ->where(function($query){

                    JsonWhere::query($query)
                        ->column('json')
                        ->value(3, $type = 'auto'); // $type: auto(default)(skippable), string or int.

                })
                ->get();
                    
License
====
This package is licensed under the MIT License.

Copyright 2015 Sukohi Kuhoh