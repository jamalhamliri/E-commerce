<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('products')->insert([
            [
            'name'=>'OPPO mobil',
            'price'=>'1788',
            'descreption'=>'A smartphone with highy qulaity',
            'category'=>'mobile',
            'gallery'=>'https://image.oppo.com/content/dam/oppo/common/mkt/v2-2/reno6-5g-oversea/listpage/Phone-list-product-list-Arctic-Blue-427-x-600.png.thumb.webp'
            
            ],
            [
                'name'=>'SAMSUNG mobil',
                'price'=>'2245',
                'descreption'=>'A smartphone with highy qulaity',
                'category'=>'mobile',
                'gallery'=>'https://actu.meilleurmobile.com/wp-content/uploads/2021/01/Samsung-Galaxy-S21-Plus.jpg'
                
                ],
                [
                    'name'=>'IPHONE mobil',
                    'price'=>'2500',
                    'descreption'=>'A smartphone with highy qulaity',
                    'category'=>'mobile',
                    'gallery'=>'https://c0.lestechnophiles.com/images.frandroid.com/wp-content/uploads/2021/09/apple-iphone-13-frandroid-2021.png?resize=1200,1200'
                    
                    ],
        ]);
    }
}
