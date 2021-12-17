<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker; 
use App\Models\User;
use App\Models\Company;

class JobSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker= \Faker\Factory::create();

        $limit = 10;

        for ($i = 0; $i < $limit; $i++) {

        DB::table('jobs')->insert([
        'user_id'=> $faker->randomDigit,
        'company_id'=> $faker->randomDigit,
        'title'=>$title=$faker->text,
        'slug'=>str_slug($title),
        'position'=>$faker->jobTitle,
        'address'=>$faker->address,
        'category_id'=>rand(1,5),
        'type'=>'fulltime',
        'status'=>rand(0,1),
        'description'=>$faker->paragraph(rand(2,10)),
        'roles'=>$faker->text,
        'last_date'=>$faker->DateTime,

        ]);}
        
    }
}
