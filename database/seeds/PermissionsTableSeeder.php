<?php

use Illuminate\Database\Seeder;
use Caffeinated\Shinobi\Models\Permission;

class PermissionsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Permisos para Usuarios (Solo 4 porque crear no hace falta)
        Permission::create([
          'name'         =>'Navegar usuarios',
          'slug'         =>'users.index',
          'description'  =>'Lista y navega todos los usuarios del sistema',
        ]);
        Permission::create([
          'name'         =>'Ver detalle de usuario',
          'slug'         =>'users.show',
          'description'  =>'Ver en detalle cada usuario del sistema',
        ]);
        Permission::create([
          'name'         =>'Edición de usuarios',
          'slug'         =>'users.edit',
          'description'  =>'Editar cualquier dato de un usuario del sistema',
        ]);
        Permission::create([
          'name'         =>'Eliminar usuarios',
          'slug'         =>'users.destroy',
          'description'  =>'Eliminar cualquier usuario del sistema',
        ]);


        //Los 5 Permisos necesarios para Roles
        Permission::create([
          'name'         =>'Navegar roles',
          'slug'         =>'roles.index',
          'description'  =>'Lista y navega todos los roles del sistema',
        ]);
        Permission::create([
          'name'         =>'Ver detalle de rol',
          'slug'         =>'roles.show',
          'description'  =>'Ver en detalle cada rol del sistema',
        ]);
        Permission::create([
          'name'         =>'Creación de roles',
          'slug'         =>'roles.create',
          'description'  =>'Crear los datos de un rol del sistema',
        ]);
        Permission::create([
          'name'         =>'Edición de roles',
          'slug'         =>'roles.edit',
          'description'  =>'Editar cualquier dato de un rol del sistema',
        ]);
        Permission::create([
          'name'         =>'Eliminar rol',
          'slug'         =>'roles.destroy',
          'description'  =>'Eliminar cualquier rol del sistema',
        ]);


        //Los 5 Permisos necesarios para Products
        Permission::create([
          'name'         =>'Navegar productos',
          'slug'         =>'products.index',
          'description'  =>'Lista y navega todos los productos del sistema',
        ]);
        Permission::create([
          'name'         =>'Ver detalle de producto',
          'slug'         =>'products.show',
          'description'  =>'Ver en detalle cada producto del sistema',
        ]);
        Permission::create([
          'name'         =>'Creación de productos',
          'slug'         =>'products.create',
          'description'  =>'Crear los datos de un producto del sistema',
        ]);
        Permission::create([
          'name'         =>'Edición de productos',
          'slug'         =>'products.edit',
          'description'  =>'Editar cualquier dato de un producto del sistema',
        ]);
        Permission::create([
          'name'         =>'Eliminar producto',
          'slug'         =>'products.destroy',
          'description'  =>'Eliminar cualquier producto del sistema',
        ]);


        //Los 5 Permisos necesarios para Estudiantes
        Permission::create([
          'name'         =>'Navegar estudiantes',
          'slug'         =>'estudiantes.index',
          'description'  =>'Lista y navega todos los estudiantes del sistema',
        ]);
        Permission::create([
          'name'         =>'Ver detalle de estudiante',
          'slug'         =>'estudiantes.show',
          'description'  =>'Ver en detalle cada estudiante del sistema',
        ]);
        Permission::create([
          'name'         =>'Creación de estudiantes',
          'slug'         =>'estudiantes.create',
          'description'  =>'Crear los datos de un estudiante del sistema',
        ]);
        Permission::create([
          'name'         =>'Edición de estudiantes',
          'slug'         =>'estudiantes.edit',
          'description'  =>'Editar cualquier dato de un estudiante del sistema',
        ]);
        Permission::create([
          'name'         =>'Eliminar estudiante',
          'slug'         =>'estudiantes.destroy',
          'description'  =>'Eliminar cualquier estudiante del sistema',
        ]);
    }
}
