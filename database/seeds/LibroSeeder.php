<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use \App\Libro;
use \App\Autor;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	$autor = Autor::where('name_autor', 'Mario Mendoza')->value('id');
        Libro::create([
    		'titulo' => 'Satanas',
    		'paginas' => '200',
            'foto' => 'satanas.jpg',
            'descripcion' => 'Una mujer hermosa e ingenua que roba con destreza a altos ejecutivos, un pintor habitado por fuerzas misteriosas, y un sacerdote que se enfrenta a un caso de posesión demoníaca en La Candelaria, el barrio colonial de Bogotá… historias que se tejen en torno a la de Campo Elías, héroe de la guerra de Vietnam, quien inicia su particular descenso a los infiernos obsesionado por la dualidad entre el bien y el mal, entre Jekyll y Hyde, y se convertirá en un ángel exterminador. 
                             
                            Satanás es una novela sobre la oscura presencia de lo maligno en la vida cotidiana. El telón de fondo es un paisaje roto, el de la Colombia de hoy, y una ciudad, Bogotá, por cuyas calles van y vienen, de forma errática, condenados a expiar una interminable culpa, los personajes de este inquietante relato, en el que escenas conmovedoras se mezclan con otras de descarnada violencia. 
                            
                            Galardonada con el Premio Biblioteca Breve 2002, Satanás viene a confirmar a Mario Mendoza como uno de los máximos exponentes de la nueva narrativa colombiana, una literatura que se ha desvinculado del realismo mágico y ha descubierto nuevas voces para una nueva realidad. Mendoza es dueño de un lenguaje de extremada economía descriptiva, limpio, y de una pericia narrativa que no permite cabos sueltos. El resultado destila autenticidad y deja una fuerte impresión en la memoria del lector.',
            'calificacion' => '5',
            'fecha_publicacion' => '2002',
            'autor_id' => $autor
    	]);
    }
}
