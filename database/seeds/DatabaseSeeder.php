<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        factory(App\User::class, 10)->create()->each(function ($user) {
            for ($i = 1; $i <= 10; $i++) {
                if (rand(0, 2)) {
                    $user->events()->save(factory(App\Event::class)->make());
                }
                if (rand(0, 1)) {
                    $user->habits()->save(factory(App\CurrentHabit::class)->make());
                }
            }
        });
    }
}
