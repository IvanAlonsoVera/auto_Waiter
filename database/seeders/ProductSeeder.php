<?php
   
namespace Database\Seeders;
   
use Illuminate\Database\Seeder;
use App\Models\Product;
   
class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $products = [
            [
                'name' => 'Samsung Galaxy',
                'description' => 'Samsung Brand',
                'image' => 'https://codeplaners.com/wp-content/uploads/2020/09/cropped-favicon-social-192x192.png',
                'price' => 100
            ],
            [
                'name' => 'Apple iPhone 12',
                'description' => 'Apple Brand',
                'image' => 'https://codeplaners.com/wp-content/uploads/2020/09/cropped-favicon-social-192x192.png',
                'price' => 500
            ],
            [
                'name' => 'Google Pixel 2 XL',
                'description' => 'Google Pixel Brand',
                'image' => 'https://codeplaners.com/wp-content/uploads/2020/09/cropped-favicon-social-192x192.png',
                'price' => 400
            ],
            [
                'name' => 'LG V10 H800',
                'description' => 'LG Brand',
                'image' => 'https://codeplaners.com/wp-content/uploads/2020/09/cropped-favicon-social-192x192.png',
                'price' => 200
            ]
        ];
   
        foreach ($products as $key => $value) {
            Product::create($value);
        }
    }
}