<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Noticia;

class NoticiasSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        // Generar 100 noticias ficticias
        Noticia::factory()->count(100)->create();
    }
}
