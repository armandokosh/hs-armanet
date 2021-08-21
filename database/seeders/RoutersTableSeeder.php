<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Router;
class RoutersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //vaciar la tabla
        Router::truncate();
        $faker =\Faker\Factory::create();

        //Crear Router de prueba en la tabla
        Router::create([
            'name' => 'rb2011-uias',
            'ip' => '192.168.25.1',
            'username' => 'api',
            'password' => 'bip0000x',
            'dns_name' => 'mihotspot.com',
            'version' => '',
            'Web_port' => '',
            'lan_interface' => '',
            'api_port' => '8728',
            'coordinates' => '',
            'status' => '',   
        ]);

    }
}
