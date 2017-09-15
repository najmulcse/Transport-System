<?php

use Illuminate\Database\Seeder;

class UserTypeSeederTable extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('usertypes')->insert([
                  'name'		=> 'Admin' 
                    ]);
        DB::table('usertypes')->insert([
                  'name'		=> 'Driver' 
                    ]);
        DB::table('usertypes')->insert([
                  'name'		=> 'Oil Department' 
                    ]); 
        DB::table('usertypes')->insert([
                  'name'		=> 'Machinary Department' 
                    ]); 
        DB::table('usertypes')->insert([
                  'name'		=> 'Supervisor' 
                    ]);
        DB::table('usertypes')->insert([
                  'name'		=> 'Helper' 
                    ]);
    }
}
