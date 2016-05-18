<?php

use Illuminate\Database\Seeder;
use Minotaur\Models\Counsellor;
use Minotaur\Models\User;
use Minotaur\Models\Profile;

class CounsellorsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::truncate();
        Profile::truncate();
        Counsellor::truncate();

//        factory(User::class, 10)->create()->each(function ($user) {
//
//            $profile = factory(Minotaur\Models\Profile::class)->make();
//            $counsellor = factory(Minotaur\Models\Counsellor::class)->make();
//
//            $user->profile()->save($profile);
//
//        });

//        User::truncate();
//        Counsellor::truncate();
        
        factory(Counsellor::class, 2)->create()->each(function ($counsellor) {

            $user = factory(Minotaur\Models\User::class)->make();

            $counsellor->users()->save($user);

        });
    }
}
