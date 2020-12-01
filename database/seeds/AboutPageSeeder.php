<?php

use Illuminate\Database\Seeder;

class AboutPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page = new App\AboutPage;
        $page->title1 = '';
        $page->title2 = '';
        $page->title3 = '';
        $page->data1 = '';
        $page->data2 = '';
        $page->data3 = '';
        $page->content = '';
        $page->save();
    }
}
