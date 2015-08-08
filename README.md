# JsonWhere
A PHP package mainly developed for Laravel to easily set where clause for JSON.  
(This is for Laravel 5+. [For Laravel 4.2](https://github.com/SUKOHI/JsonWhere/tree/1.0))

Installation
====

Add this package name in composer.json

    "require": {
      "sukohi/json-where": "2.*"
    }

Execute composer command.

    composer update

Register the service provider in app.php

    'providers' => [
        ...Others...,  
        Sukohi\JsonWhere\JsonWhereServiceProvider::class,
    ]

Also alias

    'aliases' => [
        ...Others...,  
        'JsonWhere'   => Sukohi\JsonWhere\Facades\JsonWhere::class
    ]

Usage
====

    $jsons = DB::table('tests')->where(function($query){

                    \JsonWhere::query($query)
                        ->column('json')
                        ->value(3, $type = 'auto'); // $type: (default: auto), string or int. Optional.

                })->get();

or You also can use model like so.  
  
    $jsons = \App\Test::where(function($query){
    
                    \JsonWhere::query($query)
                        ->column('json')
                        ->value(3, 'int');
        
                })->get();

License
====
This package is licensed under the MIT License.

Copyright 2015 Sukohi Kuhoh