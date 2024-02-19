<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission ;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permisions = [
            'add_user',
            'show_user',
            'edit_user',
            'delete_user',
        ];
        foreach($permisions as $permision){
            Permission::updateOrCreate(['name'=>$permision],[
                'name'=> $permision,
                'guard_name'=>'admin'
            ]);
        }
    }
}
