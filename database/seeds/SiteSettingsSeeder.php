<?php

use Illuminate\Database\Seeder;

use Illuminate\Database\Eloquent\Model;

class SiteSettingsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {


        //
        DB::table('site_settings')->insert([
            'slug' => 'site-name',
            'nameSetting' => 'إسم الموقع',
            'value' => 'غياراتي',
            'type' => 'text',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('site_settings')->insert([
            'slug' => 'site-name-2-lang',
            'nameSetting' => 'إسم الموقع باللغة التانية',
            'value' => 'ghyarati',
            'type' => 'text',
            'created_at' => date('Y-m-d H:i:s'),
        ]);


        DB::table('site_settings')->insert([
            'slug' => 'description',
            'nameSetting' => 'موقع جميل',
            'value' => 'موقع خاص بإعلانات بيع القطع الميكانيكية',
            'type' => 'textarea',
            'created_at' => date('Y-m-d H:i:s'),
        ]);


        DB::table('site_settings')->insert([
            'slug' => 'mobile-number',
            'nameSetting' => 'رقم الهاتف',
            'value' => '+212 06 06 06 06 06',
            'type' => 'tel',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('site_settings')->insert([
            'slug' => 'director-name',
            'nameSetting' => 'إسم المدير',
            'value' => 'المغيلي محمد أمين',
            'type' => 'text',
            'created_at' => date('Y-m-d H:i:s'),
        ]);


        DB::table('site_settings')->insert([
            'slug' => 'adress',
            'nameSetting' => 'العنوان',
            'value' => 'العنوان',
            'type' => 'textarea',
            'created_at' => date('Y-m-d H:i:s'),
        ]);


        DB::table('site_settings')->insert([
            'slug' => 'email',
            'nameSetting' => 'البريد الإلكتروني',
            'value' => 'site@host.com',
            'type' => 'email',
            'created_at' => date('Y-m-d H:i:s'),
        ]);


        DB::table('site_settings')->insert([
            'slug' => 'youtube',
            'nameSetting' => 'اليوتوب',
            'value' => '/app',
            'type' => 'text',
            'created_at' => date('Y-m-d H:i:s'),
        ]);


        DB::table('site_settings')->insert([
            'slug' => 'twitter',
            'nameSetting' => 'التويتر',
            'value' => '@app',
            'type' => 'text',
            'created_at' => date('Y-m-d H:i:s'),
        ]);


        DB::table('site_settings')->insert([
            'slug' => 'facebook',
            'nameSetting' => 'الفايس بوك',
            'value' => '/app',
            'type' => 'text',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('site_settings')->insert([
            'slug' => 'github',
            'nameSetting' => 'كيتهوب',
            'value' => 'app',
            'type' => 'text',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('site_settings')->insert([
            'slug' => 'google-plus',
            'nameSetting' => 'كوكل بلاس',
            'value' => 'app',
            'type' => 'text',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('site_settings')->insert([
            'slug' => 'lat',
            'nameSetting' => 'خط طول الموقع',
            'value' => "34.525994",
            'type' => 'number',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('site_settings')->insert([
            'slug' => 'lng',
            'nameSetting' => 'خط عرض الموقع',
            'value' => "-6.322755",
            'type' => 'number',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('site_settings')->insert([
            'slug' => 'paypal',
            'nameSetting' => 'بايبال',
            'value' => 'app',
            'type' => 'text',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('site_settings')->insert([
            'slug' => 'tags',
            'nameSetting' => 'الكلمات الدلالية',
            'value' => 'tag1|tag2',
            'type' => 'textarea',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('site_settings')->insert([
            'slug' => 'no-image',
            'nameSetting' => 'صورة ير موجودة',
            'value' => 'noImage.jpg',
            'type' => 'file',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('site_settings')->insert([
            'slug' => 'slider-img',
            'nameSetting' => 'صورة الصفحة',
            'value' => 'cars.jpg',
            'type' => 'file',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('site_settings')->insert([
            'slug' => 'logo',
            'nameSetting' => 'أيقونة الموقع',
            'value' => 'GHYARATI.png',
            'type' => 'file',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('site_settings')->insert([
            'slug' => 'background-about',
            'nameSetting' => 'صورة خلفية عن الموقع',
            'value' => 'background-img.jpg',
            'type' => 'file',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

        DB::table('site_settings')->insert([
            'slug' => 'motif',
            'nameSetting' => 'موتيف',
            'value' => 'motif.png',
            'type' => 'file',
            'created_at' => date('Y-m-d H:i:s'),
        ]);

    }
}
