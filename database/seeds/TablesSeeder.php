<?php

use Illuminate\Database\Seeder;
use Faker\Factory as Faker;

class TablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Faker::create();

        $pacientes=50;
        $datos = 30;

		DB::statement('SET FOREIGN_KEY_CHECKS=0;');

    	DB::table('pacientes')->truncate();
		DB::statement('SET FOREIGN_KEY_CHECKS=1;');
		    for ($i=0; $i < $pacientes; $i++) { 
	   			DB::table('pacientes')->insert([
		            'nombre' => $faker->firstName,
		            'apellido' => $faker->lastName,
		            'dni' => $faker->ean8,
		            'edad' => $faker->numberBetween($min=2, $max=80),
		            'obrasocial' => $faker->randomElement($array = array ('OSDE','IPAUSS','OCECAC', 'OSPREPRA', 'SWISS MEDICAL')),
		            'domicilio' => $faker->streetAddress,
		            'celular' => $faker->e164PhoneNumber,
		            'telefono' => $faker->phoneNumber,
		            'email' => $faker->email,
		            'foto' => 'default.jpg',
		            'observaciones' => $faker->sentence(),
		            'discapacidad' => $faker->numberBetween($min = 1, $max = 3),
		            'nombre_padre' => $faker->name($gender = 'male'),
		            'nombre_madre' => $faker->name($gender = 'female'),
	            ]);
	        };

    	DB::table('turnos')->truncate();
	        for ($i=0; $i < $datos ; $i++) { 
	   			DB::table('turnos')->insert([
			        'paciente_id'	=>	$faker->numberBetween($min = 1, $max = $pacientes),
			        'fechahora'		=>	$faker->dateTimeThisYear($max = 'now') ,
			        'repite'		=>	$faker->numberBetween($min = 0, $max = 1),
		            'observaciones' =>	$faker->sentence(1),
	            ]);
	        };

    	DB::table('test_vocales')->truncate();
	        for ($i=0; $i < 50 ; $i++) { 
	   			DB::table('test_vocales')->insert([
			        'paciente_id'	=>	$faker->numberBetween($min = 1, $max = $pacientes),
			        'fechahora'		=>	$faker->dateTimeThisYear($max = 'now') ,
			        'letra_a'		=>	$faker->randomElement($array = array ('+','-','')).' '.$faker->randomElement($array = array ('+','-','')),
			        'letra_e'		=>	$faker->randomElement($array = array ('+','-','')).' '.$faker->randomElement($array = array ('+','-','')),
			        'letra_i'		=>	$faker->randomElement($array = array ('+','-','')).' '.$faker->randomElement($array = array ('+','-','')),
			        'letra_o'		=>	$faker->randomElement($array = array ('+','-','')).' '.$faker->randomElement($array = array ('+','-','')),
			        'letra_u'		=>	$faker->randomElement($array = array ('+','-','')).' '.$faker->randomElement($array = array ('+','-','')),
			        'letra_s'		=>	$faker->randomElement($array = array ('+','-','')).' '.$faker->randomElement($array = array ('+','-','')),
			        'letra_r'		=>	$faker->randomElement($array = array ('+','-','')).' '.$faker->randomElement($array = array ('+','-','')),
		            'observaciones' =>	$faker->text(100),
	            ]);
	        };

		DB::table('test_dictado')->truncate();
	        for ($i=0; $i < $datos ; $i++) { 
	   			DB::table('test_dictado')->insert([
			        'paciente_id'	=>	$faker->numberBetween($min = 1, $max = $pacientes),
			        'fechahora'		=>	$faker->dateTimeThisYear($max = 'now') ,
			        'oracion_1'		=>	$faker->randomElement($array = array ('+','-','')).' '.$faker->randomElement($array = array ('+','-','')),
			        'oracion_2'		=>	$faker->randomElement($array = array ('+','-','')).' '.$faker->randomElement($array = array ('+','-','')),
			        'oracion_3'		=>	$faker->randomElement($array = array ('+','-','')).' '.$faker->randomElement($array = array ('+','-','')),
			        'oracion_4'		=>	$faker->randomElement($array = array ('+','-','')).' '.$faker->randomElement($array = array ('+','-','')),
		            'observaciones' =>	$faker->text(100),
	            ]);
	        };


	    DB::table('evoluciones')->truncate();
	        for ($i=0; $i < $datos ; $i++) { 
	   			DB::table('evoluciones')->insert([
			        'paciente_id'	=>	$faker->numberBetween($min = 1, $max = $pacientes),
			        'fecha'			=>	$faker->dateTimeThisYear($max = 'now') ,
	            ]);
	        };


	    DB::table('antecedentes')->truncate();
	        for ($i=0; $i < $pacientes ; $i++) { 
	   			DB::table('antecedentes')->insert([
			        'paciente_id'	=>	$i+1,
		            'titulo' 		=>	$faker->sentence(2),
		            'resumen' 		=>	$faker->text(400),
			        'fecha'			=>	$faker->dateTimeThisYear($max = 'now') ,
	            ]);
	        };

		DB::table('informes')->truncate();
	        for ($i=0; $i < $datos ; $i++) { 
	   			DB::table('informes')->insert([
			        'paciente_id'	=>	$faker->numberBetween($min = 1, $max = $pacientes),
		            'titulo' 		=>	$faker->sentence(2),
		            'resumen' 		=>	$faker->text(400),
			        'fecha'			=>	$faker->dateTimeThisYear($max = 'now') ,
			        'foto'			=>	'default.jpg',
	            ]);
	        };

       
    }
}
