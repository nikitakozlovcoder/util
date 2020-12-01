<?php

use Illuminate\Database\Seeder;

class TariffPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page = new App\TariffPage();
        $page->content = '';
        $page->save();
    }
}
