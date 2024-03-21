<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index(){
        $items = [
            ['name' => 'Traditional Wear'],
            ['name' => 'Western Wear'],
            ['name' => 'Swim & Beachwear'],
            ['name' => 'Winter & Seasonal Wear'],
            ['name' => 'Beauty & Grooming'],
            ['name' => 'Juwelley'],
            ['name' => 'Personal care Appliances'],
            ['name' => 'International Brands'],
            ['name' => 'Foot Wear'],
            ['name' => 'Watches'],
            ['name' => 'Accessories']
        ];
        $images = [
            [
                'name' => 'Red leather GUCCI bage',
                'price' => '200 Bdt',
                'discount' => '350 Bdt',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcShTh2-hQXf0v66TwNC7YjoIqbc7fZB8WHOcA&usqp=CAU'
            ],
            [
                'name' => 'DZert Panda Kids',
                'price' => '200 Bdt',
                'discount' => '700 Bdt',
                'image' => 'https://m.media-amazon.com/images/I/61J6D91JknL._AC_UY1100_.jpg'
            ],
            [
                'name' => 'High Quality Child School',
                'price' => '2200 Bdt',
                'discount' => '6500 Bdt',
                'image' => 'https://aeroliteluggage.co.uk/cdn/shop/products/HOLD615NAVY.jpg?v=1680692623'
            ],
            [
                'name' => 'Target Reusable Bag',
                'price' => '2400 Bdt',
                'discount' => '3400 Bdt',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTasGeGAYg4IRdbHozvd5KDHZhzc7onW4s0aw&usqp=CAU'
            ],
            [
                'name' => 'Target Reusable Bag',
                'price' => '2400 Bdt',
                'discount' => '3400 Bdt',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTasGeGAYg4IRdbHozvd5KDHZhzc7onW4s0aw&usqp=CAU'
            ],
            [
                'name' => 'Target Reusable Bag',
                'price' => '2400 Bdt',
                'discount' => '3400 Bdt',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTasGeGAYg4IRdbHozvd5KDHZhzc7onW4s0aw&usqp=CAU'
            ],
            [
                'name' => 'Travel bag',
                'price' => '2004 Bdt',
                'discount' => '3550 Bdt',
                'image' => 'https://m.media-amazon.com/images/I/51G5ioU8U8L._AC_UY1100_.jpg'
            ]
            ];
        return view('main',['items' => $items],['images'=> $images]);
    }
}
