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
        $this->call(UserSeeder::class);
        $this->call(AboutPageSeeder::class);
        $this->call(TariffPageSeeder::class);
        $this->call(ContactsPageSeeder::class);
    }
}
