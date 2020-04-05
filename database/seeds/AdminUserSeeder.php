<?php

use Illuminate\Database\Seeder;
use App\Admin;
// use Hash;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        try {
            echo 'Admin User creating.....';
            echo PHP_EOL;
            $user = Admin::create([
                'first_name'     => 'Super',
                'last_name'      => 'Admin',
                'email'          => 'nayanrahul.jnv@gmail.com',
                'mobile_number'	 =>	'8808206621',
                'is_active'		 =>	1,
                'password'       => Hash::make('nayan@'),
            ]);
        } catch (\Exception $e) {
            print_r($e->getMessage());
            echo PHP_EOL;
        }
    }
}
