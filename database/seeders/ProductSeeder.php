<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'name' => 'Matcha Latte',
                'description' => 'Matcha latte premium dengan rasa otentik Jepang.',
                'price' => 25000,
                'image' => 'Matcha Latte.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Matcha Frappe',
                'description' => 'Perpaduan matcha premium dan es blended, cocok untuk cuaca panas.',
                'price' => 28000,
                'image' => 'Mtacha Frappe.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Matcha Original',
                'description' => 'Matcha otentik tanpa campuran, rasa matcha yang kuat dan khas.',
                'price' => 22000,
                'image' => 'MatchaOri.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Iced Matcha',
                'description' => 'Minuman matcha dingin menyegarkan.',
                'price' => 24000,
                'image' => 'Iced Matcha.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Hot Matcha',
                'description' => 'Hangatnya matcha murni, pas untuk menemani waktu santaimu.',
                'price' => 25000,
                'image' => 'Hot Matchaa.jpeg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Matcha Float',
                'description' => 'Matcha segar ditambah topping ice cream vanilla.',
                'price' => 24000,
                'image' => 'Matcha Float.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Matcha Choco',
                'description' => 'Perpaduan matcha dan cokelat, manis dan creamy di lidah.',
                'price' => 25000,
                'image' => 'Matcha Choco.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Matcha Cream',
                'description' => 'Matcha dengan topping whipped cream lembut di atasnya.',
                'price' => 22000,
                'image' => 'Matcha Cream.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => 'Milk Matcha',
                'description' => 'Perpaduan matcha dengan susu segar.',
                'price' => 24000,
                'image' => 'Milk Matcha.jpg',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ]
        ]);
    }
}
