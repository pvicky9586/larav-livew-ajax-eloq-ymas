<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
<<<<<<< HEAD
<<<<<<< HEAD
    {

    	//DB::table('profiles')->truncate();

        DB::table('profiles')->insert(
        	['name' => 'Doctor', 'abrev' => 'Dor(ra)'],
       	);

       	DB::table('profiles')->insert(
       		['name' => 'Profesor', 'abrev' => 'Prof'],
       	);
       	DB::table('profiles')->insert(
       		['name' => 'Licenciado', 'abrev' => 'Lcdo(a)'],
       	);
       	DB::table('profiles')->insert(
       		['name' => 'Ingeniero', 'abrev' => 'Ing'],
       	);
       	DB::table('profiles')->insert(
       		['name' => 'Abogado', 'abrev' => 'Abg'],
       	);

       	DB::table('profiles')->insert(
       		['name' => 'Contador Publico', 'abrev' => 'C.P.'],
       	);
   
   		DB::table('profiles')->insert(
       		['name' => 'Otra', 'abrev' => ''],
       	);
        
       
=======
    {       
        
      //       
>>>>>>> 92a0b79... 1er eloquen view filtado de user-post-comments
=======
    {       
        
      //       
>>>>>>> Eloquent
    }
}
