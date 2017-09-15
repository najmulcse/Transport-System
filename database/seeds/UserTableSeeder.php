<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
                    'name'       => 'Admin',
                    'email'      => 'admin@gmail.com',
                    'password'   => bcrypt('@admin'),
                    'usertype_id'=> 1,
                    'employee_id'=> 1001

                    ]); 
        DB::table('users')->insert([
                    'name'       => 'M. Oil',
                    'email'      => 'oil@gmail.com',
                    'password'   => bcrypt('123456'),
                    'usertype_id'=> 3,
                    'employee_id'=> 2002

                    ]);
        DB::table('users')->insert([
                    'name'       => 'M. Machinary',
                    'email'      => 'machinary@gmail.com',
                    'password'   => bcrypt('123456'),
                    'usertype_id'=> 4,
                    'employee_id'=> 3003

                    ]); 
        DB::table('users')->insert([
                    'name'		 => 'M. Supervisor',
                    'email'		 => 'supervisor@gmail.com',
                    'password'	 => bcrypt('@admin'),
                    'usertype_id'=> 5,
                    'employee_id'=> 4004

                    ]);
    }
}
