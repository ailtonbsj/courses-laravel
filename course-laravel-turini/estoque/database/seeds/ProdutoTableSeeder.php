<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProdutoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::insert(
            'insert into produtos (nome, quantidade, valor, descricao) values (?, ?, ?, ?)',
            array(
                'Geladeira', 2, 590.00,
                'Side by Side com gelo na porta'
            )
        );

        DB::table('produtos')->insert([
            'nome' => 'Fogão',
            'quantidade' => 5,
            'valor' => 950.00,
            'descricao' => 'Painel automático e forno elétrico'
        ]);

        DB::insert("insert into produtos
            (nome, quantidade, valor, descricao)
            values ('Microondas', 1, 152.00,
            'Manda SMS quando termina de esquentar')");
    }
}
