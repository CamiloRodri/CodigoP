<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Autor;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Autor::create([
        	'name_autor'=>'Mario Mendoza',
        	'foto' => 'mario.jpg',
            'biografia' => 'Mario Mendoza Zambrano nació en Bogotá el 10 de enero de 1964. Estudió en el Colegio Refous y en la Pontificia Universidad Javeriana de Bogotá donde obtuvo la maestría en Literatura latinoamericana. Fue profesor del Departamento de Literatura de la misma universidad en la que había estudiado durante 10 años. Aunque siempre profundamente vinculado a su Bogotá natal, Mario Mendoza cruzó el Atlántico en diversas ocasiones. Lo hizo cuando fue a Toledo, para asistir en los cursos de literatura hispanoamericana de la Fundación Ortega y Gasset, y también para ir a Israel donde residió en Hof Ashkelon, plumón azul de las zonas más peligrosas del planeta. Fue después de este viaje cuando, al regresar a su país, empezó a publicar algunos artículos en diarios y revistas colombianas. En el otoño de 1997 trabajó en James Madison University en Virginia, EUA.

                            Luego de licenciarse en literatura y trabajar como pedagogo, Mendoza, decidió iniciar su carrera literaria, combinando la escritura con la docencia y la colaboración con diversos medios culturales como diarios y revistas, entre otros, la Revista Bacánika y El Tiempo.

                            Gracias a su novela Satanás, obtuvo el Premio Biblioteca Breve de la editorial Seix Barral en 2002.'
        ]);
    }
}
