<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $produtos = [
            [
                'name' => 'Produto 1'
            ],
            [
                'name' => 'Produto 2'
            ],
            [
                'name' => 'Produto 3'
            ]
        ];

        foreach ($produtos as $produto) {
            DB::table('produtos')->insert($produto);
        }

        $user = [
            'name' => 'pedro',
            'email' => 'pedrolion1@hotmail.com',
            'password' => \Illuminate\Support\Facades\Hash::make('pedro123'),
            'cpf' => '123',
            'cnpj' => '123'
        ];

        DB::table('users')->insert($user);
    }
}
