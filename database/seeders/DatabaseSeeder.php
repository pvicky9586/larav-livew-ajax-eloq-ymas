<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
      	$this->truncateTables([
    		'users',
            'profiles',
    		'posts',
            'comments',
            'tags',
            'categories'
    		
    		

    	]);

	    $this->call(ProfilesSeeder::class);
        $this->call(UsersTableSeeder::class);

        $this->call(TagsTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
                
	    $this->call(PostsTableSeeder::class);	
        $this->call(CommentsTableSeeder::class);    
       
        

	
    }

    protected function truncateTables(array $tables)
    {
    	
    	DB::statement('SET FOREIGN_KEY_CHECKS = 0;');
    	
    	foreach ($tables as $table){
    		DB::table($table)->truncate();	
    	}
    	
    	DB::statement('SET FOREIGN_KEY_CHECKS = 1;');
    }

    //  function 'truncateTable' que recibe como parametro varias tablas  y desactiva la revision de claves foraneas, luego con un forect las va vaciado, pal final vuelve a actiivar la revision
    	
}
