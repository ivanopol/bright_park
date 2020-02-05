<?php


use App\Services\AutoruService;
use Illuminate\Database\Seeder;

class BrandModelsTableSeeder extends Seeder
{
    public function run()
    {
        $service = new AutoruService();

        $brands = DB::select('select id, code from brands');

        foreach ($brands as $brand) {
            $service->fetchModels($brand);
        }
    }


    private function insert_order($order, $brand_id)
    {
        DB::insert('insert into brands (order) value ? where id = ?', [$order, $brand_id]);
    }
}
