<?php

namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class userseeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker=Faker::create();
        foreach(range(1,50) as $index) {


        DB::table('user')->insert([

            'Name'=>$faker->name,
            'Email'=>$faker->email,
            'Phone'=>$faker->numerify(),
        ]);
    }

    }
}
