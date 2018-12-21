<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();
        $a = 0;
        foreach(range(0,30) as $i){
            if($a<5){
                DB::table('products')->insert([
                    'name' => $faker->name,
                    'stok' => 100,
                    'gambar' => $faker->image('public/themes/images/products',160,160, null, false),
                    'harga' => 50000,
                    'kategori'=> 'aksesoris'
                ]);    
            }
            elseif($a>=5 AND $a<10){
                DB::table('products')->insert([
                    'name' => $faker->name,
                    'stok' => 100,
                    'gambar' => $faker->image('public/themes/images/products',160,160, null, false),
                    'harga' => 50000,
                    'kategori'=> 'device'
                ]);
            }
            else{
                DB::table('products')->insert([
                    'name' => $faker->name,
                    'stok' => 100,
                    'gambar' => $faker->image('public/themes/images/products',160,160, null, false),
                    'harga' => 50000,
                    'kategori'=> 'other'
                ]);
            }
            $a++;
            
        }
    }
}
