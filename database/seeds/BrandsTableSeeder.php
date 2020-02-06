<?php


use App\Services\AutoruService;
use Illuminate\Database\Seeder;

class BrandsTableSeeder extends Seeder
{
    public function run()
    {
        $auto_ru_service = new AutoruService();
        $auto_ru_service->fetchBrands();
    }
}
