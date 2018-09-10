<?php

use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	
        DB::table('tags')->insert(['name' => 'بسكليت غيارات']);
		DB::table('tags')->insert(['name' => 'تعليم غيارات السيارة']);
		DB::table('tags')->insert(['name' => 'غيارات']);
		DB::table('tags')->insert(['name' => 'غيارات الاوتوماتيك']);
		DB::table('tags')->insert(['name' => 'غيارات الدراجة الهوائية']);
		DB::table('tags')->insert(['name' => 'غيارات الريس']);
		DB::table('tags')->insert(['name' => 'غيارات السيارة الاوتوماتيك']);
		DB::table('tags')->insert(['name' => 'غيارات السيارة العادي']);
		DB::table('tags')->insert(['name' => 'غيارات السيارة المانيوال']);
		DB::table('tags')->insert(['name' => 'غيارات العربية المانيوال']);
		
    }
}
