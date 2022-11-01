<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UtilizadorFakeSeeder extends Seeder
{
    public function run()
    {
        $utilizadorModel = new \App\Models\UtilizadorModel();
        $faker = \Faker\Factory::create();

        $criarRegistos = 5000;

        $utilizadoresPush = [];

        for($i = 0; $i <= $criarRegistos; $i++){

            array_push($utilizadoresPush, [
                'nome' => $faker->name,
                'email' => $faker->email,
                'idade' => $faker->numberBetween($min = 20, $max = 100),
                'telemovel' => $faker->phoneNumber,
                'morada' => $faker->streetAddress,
                'cod_postal' => $faker->postcode,
                'localidade' => $faker->city,
                'pais' => $faker->country,
                'password_hash' => '123456',
                'ativo' => $faker->numberBetween(0, 1),
                'fotografia' => $faker->imageUrl($width = 640, $height = 480),
            ]);
        }        

        $utilizadorModel->skipValidation(true)->protect(false)->insertBatch($utilizadoresPush);
    }
}
