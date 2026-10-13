<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['name' => 'Auriculares Bluetooth', 'description' => 'Auriculares inalámbricos con cancelación de ruido y 30 horas de batería.', 'price' => 79.99, 'stock' => 25, 'category' => 'Electrónica'],
            ['name' => 'Teclado mecánico', 'description' => 'Teclado mecánico retroiluminado con switches rojos.', 'price' => 64.50, 'stock' => 18, 'category' => 'Informática'],
            ['name' => 'Ratón inalámbrico', 'description' => 'Ratón ergonómico de 6 botones con sensor de alta precisión.', 'price' => 29.95, 'stock' => 40, 'category' => 'Informática'],
            ['name' => 'Monitor 27 pulgadas', 'description' => 'Monitor QHD de 27 pulgadas a 144 Hz con panel IPS.', 'price' => 289.00, 'stock' => 8, 'category' => 'Informática'],
            ['name' => 'Smartwatch Sport', 'description' => 'Reloj inteligente con GPS, pulsómetro y resistencia al agua.', 'price' => 129.90, 'stock' => 15, 'category' => 'Electrónica'],
            ['name' => 'Altavoz portátil', 'description' => 'Altavoz Bluetooth resistente al agua con sonido 360 grados.', 'price' => 49.99, 'stock' => 30, 'category' => 'Electrónica'],
            ['name' => 'Mochila urbana', 'description' => 'Mochila con compartimento acolchado para portátil de 15 pulgadas.', 'price' => 39.90, 'stock' => 22, 'category' => 'Accesorios'],
            ['name' => 'Disco SSD 1TB', 'description' => 'Unidad SSD NVMe de 1TB con velocidades de hasta 3500 MB/s.', 'price' => 89.99, 'stock' => 35, 'category' => 'Informática'],
            ['name' => 'Webcam Full HD', 'description' => 'Cámara web 1080p con micrófono integrado y enfoque automático.', 'price' => 44.90, 'stock' => 20, 'category' => 'Informática'],
            ['name' => 'Cargador rápido USB-C', 'description' => 'Cargador de 65W con dos puertos USB-C y uno USB-A.', 'price' => 34.99, 'stock' => 50, 'category' => 'Accesorios'],
            ['name' => 'Lámpara de escritorio LED', 'description' => 'Lámpara LED regulable con carga inalámbrica en la base.', 'price' => 27.50, 'stock' => 28, 'category' => 'Hogar'],
            ['name' => 'Silla gaming', 'description' => 'Silla ergonómica reclinable con cojín lumbar y reposabrazos 4D.', 'price' => 199.00, 'stock' => 6, 'category' => 'Hogar'],
        ];

        foreach ($products as $product) {
            $slug = Str::slug($product['name']);

            Product::create($product + [
                'slug' => $slug,
                'image' => 'https://picsum.photos/seed/' . $slug . '/400/300',
            ]);
        }
    }
}
