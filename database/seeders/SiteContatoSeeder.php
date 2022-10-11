<?php

namespace Database\Seeders;

use App\Models\SiteContato;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /*
        $contato = new SiteContato();
        SiteContato::create([
            'nome' => 'Júlio Soares',
            'telefone' => '249874587562',
            'email' => 'tester@teste.com',
            'motivo_contato' => 2,
            'mensagem' => 'Este aqui é a nova seed'
        ]);
        */
        SiteContato::factory()->count(100)->create();
    }
}
