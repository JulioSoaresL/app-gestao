<?php

namespace Database\Seeders;

use App\Models\Fornecedor;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $fornecedor = new Fornecedor();
        $fornecedor->nome = 'Fornecedor A';
        $fornecedor->site = 'fornecedoA.com';
        $fornecedor->uf = 'SP';
        $fornecedor->email = 'fornecedorA@contato.com';
        $fornecedor->save();

        Fornecedor::create([
            'nome' => 'Fornecedor B',
            'site' => 'fornecedorB.com',
            'uf' => 'MG',
            'email' => 'fornecedorB@contato.com'
        ]);

        DB::table('fornecedores')->insert([
            'nome' => 'Fornecedor C',
            'site' => 'fornecedorC.com',
            'uf' => 'CE',
            'email' => 'fornecedorC@contato.com'
        ]);
    }
}
