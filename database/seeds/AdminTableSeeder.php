<?php

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\User;

class AdminTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //

            $user = User::where('email','p2s@test.com')->first();
            $user->password = bcrypt('admin_p2s');
            $user->save();
    }
}
