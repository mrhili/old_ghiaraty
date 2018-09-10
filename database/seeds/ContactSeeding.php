<?php

use Illuminate\Database\Seeder;

class ContactSeeding extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        factory(App\Contact::class, 5)->create();
    }
}
