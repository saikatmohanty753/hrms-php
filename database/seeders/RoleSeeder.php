<?php

namespace Database\Seeders;

use Spatie\Permission\Models\Role;
use Illuminate\Database\Seeder;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $roles = [
            'Principal Secretary',
            'Additional Secretary',
            'Special Secretary',
            'Under Secretary',
            'SO',
            'ASO',
            'DO',
            'Financial Advisor',
            'Account Officer',
        ];
        foreach ($roles as $role) {
            $model = Role::whereName($role);
            if ($model->count() == 0) {
                Role::create(['name' => $role, 'guard_name' => 'web']);
            }
        }
    }
}
