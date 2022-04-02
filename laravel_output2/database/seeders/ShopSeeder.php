<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Shop;

use Carbon\Carbon;


class ShopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shop::create([
            'shop_name'=>'海鮮居酒屋うお',
            'shop_pref'=>'東京都',
            'shop_city'=>'新宿区',
            'nearest_station'=>'新宿三丁目',
            'use'=>'1',
            'food'=>'1,3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Shop::create([
            'shop_name'=>'東北居酒屋みちのく',
            'shop_pref'=>'東京都',
            'shop_city'=>'北区',
            'nearest_station'=>'赤羽',
            'use'=>'3',
            'food'=>'3',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);

        Shop::create([
            'shop_name'=>'牛は力',
            'shop_pref'=>'千葉県',
            'shop_city'=>'松戸市',
            'nearest_station'=>'北松戸',
            'use'=>'1',
            'food'=>'2,4',
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ]);


    }
}
