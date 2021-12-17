<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\job;
use App\Models\Company;
use App\Models\User;
use App\Models\Category;




class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Job::factory(10)->create();
        
        $this->call(Jobseeder::class);
        $this->call(Companyseeder::class);
        $this->call(Userseeder::class);

        $categories = [
            'Technology',
            'Engineering',
            'Government',
            'Medical',
            'Construction',
            'Software'

            
        ];
        foreach($categories as $category){
            Category::create(['name'=>$category]);

        }
    }
}
