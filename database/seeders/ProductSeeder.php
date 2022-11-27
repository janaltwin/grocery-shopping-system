<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
                'name' => 'saba sardines 15oz',
                'price' => 22,
                'description' => 'lorem ipsum',
                'image' => 'https://ph-test-11.slatic.net/p/f661c4c2e259981424debb320cdaa08c.jpg'
            ],
            [
                'name' => 'Piattos 40g',
                'price' => 16,
                'description' => 'sour cream',
                'image' => 'https://www.homeshop.ph/image/cache/catalog/Products/Snacks/Chips/Piattos Sour Cream And Onion-40g-500x500-product_popup.png'
            ],
            [
                'name' => 'Bear Brand Sterilized 200ml',
                'price' => 25,
                'description' => 'lorem ipsum',
                'image' => 'https://csistore.ph/wp-content/uploads/2020/08/Bear-Brand-Ster-200ml.jpg'
            ],
            [
                'name' => 'Ginebra San Miguel Gin 250ml',
                'price' => 50.25,
                'description' => 'lorem ipsum',
                'image' => 'http://cdn.shopify.com/s/files/1/0267/5402/3602/products/9000011294-Ginebra-San-Miguel-Gin-Angelito-250ml-200911_f43ea562-422d-4381-9885-fce2342730e8_1200x1200.jpg?v=1652176235'
            ],
            [
                'name' => 'Selecta Creamdae 3in1',
                'price' => 99,
                'description' => 'lorem ipsum',
                'image' => 'https://www.selectaphilippines.com/content/dam/unilever/heart/philippines/pack_shot/creamdae_3in1_cku-31948471-png.png'
            ],
            [
                'name' => 'COLGATE REGULAR FLAVOUR 120ML',
                'price' => 45.40,
                'description' => 'lorem ipsum',
                'image' => 'https://ph-test-11.slatic.net/p/4711932dbe528a0f4895e3a515de6068.jpg'
            ],
            [
                'name' => 'Nescafe Classic 25g',
                'price' => 64.50,
                'description' => 'lorem ipsum',
                'image' => 'https://imartgrocersph.com/wp-content/uploads/2020/09/Nescafe-Classic-25g.jpg'
            ],
            [
                'name' => 'REBISCO SANDWICH CHOCO 32G X 10PCS',
                'price' => 55.51,
                'description' => 'lorem ipsum',
                'image' => 'https://www.rebisco.com.ph/564-thickbox_default/rebisco-sandwich-choco.jpg'
            ]
        ];
        Product::insert($products);
    }
}
