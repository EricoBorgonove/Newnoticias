<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Comentario;

class ComentarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Comentario::create([
            "conteudo" => "Gostei :-)",
            "noticia_id" => "1"
        ]);
        Comentario::create([
            "conteudo" => "Muito Bom",
            "noticia_id" => "1"
        ]);
    }
}
