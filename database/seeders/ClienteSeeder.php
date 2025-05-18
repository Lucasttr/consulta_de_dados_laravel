<?php


namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Cliente;
use Faker\Factory as Faker;

class ClienteSeeder extends Seeder
{
    public function run(): void
    {
        $faker = Faker::create('pt_BR');

        $estados = ['SP', 'RJ', 'MG', 'ES', 'RS', 'SC', 'PR', 'BA', 'PE', 'CE', 'GO'];
        $generos = ['Masculino', 'Feminino'];

        for ($i = 0; $i < 50; $i++) {
            Cliente::create([
                'nome' => $faker->name,
                'cpf' => $faker->unique()->cpf(false),
                'email' => $faker->unique()->safeEmail,
                'data_nascimento' => $faker->date('Y-m-d', '2005-01-01'),
                'telefone' => $faker->phoneNumber,
                'genero' => $faker->randomElement($generos),
                'estado' => $faker->randomElement($estados),
                'endereco' => $faker->streetAddress,
            ]);
        }
    }
}