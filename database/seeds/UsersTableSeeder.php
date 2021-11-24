<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user=User::where('email','super_admin@app.com')->first();
        if(!$user){
            User::create([
                'name'=> 'Super Admin',
                'email'=>'super_admin@app.com',
                'role'=> 'admin',
                'password'=>hash::make('12345678')
            ]);
        }
    }
}
