<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Stylist;

class StylistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Populate the stylists table with sample data
        Stylist::create([
            'name' => 'فریده فاطمی',
            'email' => 'faride.fatemi@setara.app',
            'phone' => '09131111213',
            'bio' => 'با سابقه‌ای ده ساله در زمینه‌ٔ مد و لباس، فریده به شما کمک می‌کند تا ایده‌های مدل‌سازی و لباس‌ها را تجزیه و تحلیل کنید و همچنین خرید آنلاین شخصی را انجام دهید.',
            'rate' => 4.5,
            'avatar' => 'images/stylists/faride.jpg',
        ]);

        Stylist::create([
            'name' => 'نگار مرادی',
            'email' => 'n.gar@example.com',
            'phone' => '09131111214',
            'bio' => 'استایلیست با تجربه در زمینه آرایش و لباس‌های مجلسی و روزمره. عاشق طراحی و رنگ‌های جذاب.',
            'rate' => 4.7,
            'avatar' => 'images/stylists/placeholder.jpg',
        ]);

        Stylist::create([
            'name' => 'الهام قدیری',
            'email' => 'elham.qadiri@example.com',
            'phone' => '09131111215',
            'bio' => 'استایلیست حرفه‌ای با علاقه زیاد به آخرین روند‌های مد و فشن. با بیش از ۱۵ سال سابقه درخشان در عرصه استایلینگ.',
            'rate' => 4.6,
            'avatar' => 'images/stylists/placeholder.jpg',
        ]);
    }
}
