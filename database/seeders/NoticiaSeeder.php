<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Noticia;

class NoticiaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Noticia::create([
                "titulo" => "testando uma seed",
                "conteudo" => "to com sono",
                "status" => "A",
                "imagem" => "/storage/noticia.png",
                "data_publicacao" => "18/06/2022"
            ]);
    }
}
