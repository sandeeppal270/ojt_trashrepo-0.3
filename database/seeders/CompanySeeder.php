<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Str;
use Faker\Factory as Faker; 
use App\Models\User;
use App\Models\Company;

class CompanySeeder extends Seeder
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

        DB::table('companies')->insert([
        'user_id'=> $faker->randomDigit,
        'cname'=> $name=$faker->company,
        'slug'=>str_slug($name),
        'address'=>$faker->address,
        'phone'=>$faker->phoneNumber,
        'website'=>$faker->domainName,
        'logo'=>'man.jpg',
        'cover_photo'=>'background.jpg',
        'slogan'=>'learn-earn and grow',
        'description'=>$faker->paragraph(rand(2,10))

    ]);}
        
    }
}