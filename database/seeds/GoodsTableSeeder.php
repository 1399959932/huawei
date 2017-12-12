<?php

use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class GoodsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(Faker $faker)
    {
        $data = [];
        for($i=0;$i<30;$i++){
        	$tmp = [
        		'title' => str_random(20),
        		'price' => rand(10,10000),
        		'kuchun' => rand(1,100),
        		'content' => "<p>
					<img src='{$faker->imageUrl(800,400)}' />
					<img src='{$faker->imageUrl(800,400)}' />

					<img src='{$faker->imageUrl(800,400)}' />

					<img src='{$faker->imageUrl(800,400)}' />

        		</p>",
        		'created_at' => date('Y-m-d H:i:s'),
        		'status' => 1,
        	];

        	$id = DB::table('goods')->insertGetId($tmp);
        	//空数据
        	$data = [];
        	for($q=0;$q<4;$q++){
        		//
        		
        		$t = [
        			'goods_id' => $id,
        			'pic' => $faker->imageUrl(400,400)
        		];
        		$data[] = $t;
        	}
        	DB::table('goods_pic')->insert($data);
        }
    }
}
