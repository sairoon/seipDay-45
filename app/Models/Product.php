<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    private static $products = [];

    public static function allProducts(){
        self::$products = [
            0 => [
                'id' => 1,
                'name' => 'Desh-rotno',
                'price' => '5000',
                'image' => 'Sheikh-Hasina-300x284.png',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ea inventore laboriosam magni nisi nulla officiis, optio. Asperiores, cumque dicta dignissimos eaque fugiat minima numquam placeat repudiandae voluptas voluptatum! Ducimus.'
            ],
            1 => [
                'id' => 1,
                'name' => 'Bongobondhu',
                'price' => '5000',
                'image' => 'bongobondu.jfif',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ea inventore laboriosam magni nisi nulla officiis, optio. Asperiores, cumque dicta dignissimos eaque fugiat minima numquam placeat repudiandae voluptas voluptatum! Ducimus.'
            ],
            2 => [
                'id' => 1,
                'name' => 'More bongobomdhu',
                'price' => '5000',
                'image' => 'Bangabandhu1.jpg',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ea inventore laboriosam magni nisi nulla officiis, optio. Asperiores, cumque dicta dignissimos eaque fugiat minima numquam placeat repudiandae voluptas voluptatum! Ducimus.'
            ],
            3 => [
                'id' => 1,
                'name' => 'More Desh-rotno',
                'price' => '5000',
                'image' => 'Sheikh-Hasina-300x284.png',
                'description' => 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam ea inventore laboriosam magni nisi nulla officiis, optio. Asperiores, cumque dicta dignissimos eaque fugiat minima numquam placeat repudiandae voluptas voluptatum! Ducimus.'
            ],
        ];
    }
}
