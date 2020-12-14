<?php

use Illuminate\Database\Seeder;

class ContactsPageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $page = new App\ContactsPage();
        $page->phone1 = '';
        $page->phone2 = '';
        $page->email = '';
        $page->addr = '';
        $page->ogrn = '';
        $page->inn = '';
        $page->rs = '';
        $page->head = '';
        $page->social = '';
        $page->content = '';

        $page->save();
    }
}
