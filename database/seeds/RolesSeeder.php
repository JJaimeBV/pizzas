<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $dataRoles = array(
          ['id'=>1,
          'name'=> 'admin'],
          ['id'=>2,
          'name'=> 'store']
        );

        Role::insert($dataRoles);

        User::create(array('name'=>'Administrador', 'last_name'=>'Administrador','address'=>'Administrador','username'=>'Administrador','email'=>'admin@admin.com','password'=>'$2y$10$OQRC6v8yO4o3DZ9vttzqv.dl2KpUtLtFNemaByeLc3Oi5RV03oBka','role_id'=>1,'active'=>true));
        User::create(array('name'=>'Jesus', 'last_name'=>'Jaime','address'=>'Jesus Jaime','username'=>'jesus','email'=>'usuario@usuario.com','password'=>'$2y$10$OQRC6v8yO4o3DZ9vttzqv.dl2KpUtLtFNemaByeLc3Oi5RV03oBka','role_id'=>2,'active'=>true));
      
    }
}

