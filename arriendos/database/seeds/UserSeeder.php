<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      /* Funcion que permite el ingreso del usaurio administrador*/
        DB::table('users') -> insert([
          'name' => 'Administrador',
          'email' => 'admin@admin.com',
          'password' => bcrypt('administrador'),
          'type' => 'admin'
        ]);
/*
        factory(App\User::class, 10) -> create();
*/
    }
}
