<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Job;
// use App\Models\User;
// use App\Models\Company;



class JobFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    protected $model = job::class;
    public function definition()
    {   

        return [
            // 'user_id'=>App\User::all()->random()->id,
            // 'company_id'=>App\Company::all()->random()->id,
            // 'title'=>$title=$this->$faker->text,
            // 'slug'=>str_slug($title),
            // 'position'=>$this->$faker->jobTitle,
            // 'address'=>$this->$faker->address,
            // 'category_id'=>rand(1,5),
            // 'type'=>'fulltime',
            // 'status'=>rand(0,1),
            // 'description'=>$this->$faker->paragraph(rand(2,10)),
            // 'last_date'=>$this->$faker->DateTime
        ];
    }
}
