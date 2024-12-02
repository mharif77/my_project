<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        //  \App\Models\Product::factory()->create();
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


         \App\Models\Admin::create([
            'name' => 'MD ARIF HASAN',
            'email' => 'arif@gmail.com',
            'password' =>Hash::make ('admin123'),
        ]);

        // \App\Models\Doctor::create(
        //     [
        //        'name' =>'MD SHAFIN AHMED',
        //        'email' => 'shafin@gmail.com',
        //        'password' => Hash::make('admin123')
        //     ]);


            \App\Models\Employee::create(
                [
                   'name' =>'MD RONI AHMED',
                   'email' => 'roni@gmail.com',
                   'phone'=> '01679504643',
                   'address' => 'dhaka',
                   'photo' => 'nophoto.jpg',
                   'password' => Hash::make('admin123')
                ]);
    }
}
