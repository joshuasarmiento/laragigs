<?php

namespace App\Models;

class Listing {
    public static function allData(){
        $data = [];

        $data[] = [
            'id' => 1,
            'title' => 'First Post',
            'description' => 'This is the first post'
        ];

        $data[] = [
            'id' => 2,
            'title' => 'Second Post',
            'description' => 'This is the second post'
        ];

        return $data;

        // return [
        //     [
        //         'id' => 1,
        //         'title' => 'First Post',
        //         'description' => 'This is the first post'
        //     ],
        //     [
        //         'id' => 2,
        //         'title' => 'Second Post',
        //         'description' => 'This is the second post'
        //     ]
        // ];
    }

    public static function findData($id){
        return collect(self::allData())->firstWhere('id', $id);  

        // $listings = self::allData();

        // foreach($listings as $list){
        //     if($list['id'] == $id){
        //         return $list;
        //     }
        // }
    }
}