<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;


class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permissions = [
           'role-list',
           'role-create',
           'role-edit',
           'role-delete',
           'accompagnement-list',
           'accompagnement-create',
           'accompagnement-edit',
           'accompagnement-delete',
           'financiere-list',
           'financiere-create',
           'financiere-edit',
           'financiere-delete',
           'startup-list',
           'startup-create',
           'startup-edit',
           'startup-delete'
        ];
     
        foreach ($permissions as $permission) {
             Permission::create(['name' => $permission]);
        }
    }
}
