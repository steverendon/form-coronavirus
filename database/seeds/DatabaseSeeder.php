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
        App\User::create([
            'name' => 'steven rendon',
            'email' => 's@admin.com',
            'identification' => '1085291682',
            'address' => 'cll 34 87',
            'password' => bcrypt('R123')
        ]);

        factory(App\Provider::class,5)->create();
    }
}
