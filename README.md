# JsonWhere
A PHP package mainly developed for Laravel to easily set where clause for JSON.  
(This is for Laravel 4.2. [For Laravel 5+](https://github.com/SUKOHI/JsonWhere))

Add this package name in composer.json

    "require": {
      "sukohi/json-where": "1.*"
    }

Execute composer command.

    composer update

Register the service provider in app.php

    'providers' => [
        ...Others...,  
        'Sukohi\JsonWhere\JsonWhereServiceProvider',
    ]

Also alias

    'aliases' => [
        ...Others...,  
        'JsonWhere' => 'Sukohi\JsonWhere\Facades\JsonWhere',
    ]

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