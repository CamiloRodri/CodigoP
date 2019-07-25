<?php

use Illuminate\Database\Seeder;
use App\Informacion;

class InformacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Informacion::create([
        	'mision' => 'La Universidad de Cundinamarca es una institución pública local del Siglo XXI, caracterizada por ser una organización social de conocimiento, democrática, autónoma, formadora, agente de la transmodernidad que incorpora los consensos mundiales de la humanidad y las buenas prácticas de gobernanza universitaria, cuya calidad se genera desde los procesos de enseñanza - aprendizaje, investigación e innovación, e interacción universitaria.',
        	'vision' => 'La Universidad de Cundinamarca será reconocida por la sociedad, en el ámbito local, regional, nacional e internacional, como generadora de conocimiento relevante y pertinente, centrada en el cuidado de la vida, la naturaleza, el ambiente, la humanidad y la convivencia.'
        ]);
    }
}
