<?php

namespace Database\Seeders;

use App\Models\Permission;
use Illuminate\Database\Seeder;

class PermissionsTableSeeder extends Seeder
{
    public function run()
    {
        $permissions = [
            [
                'id'    => 1,
                'title' => 'auth_profile_edit',
            ],
            [
                'id'    => 2,
                'title' => 'user_management_access',
            ],
            [
                'id'    => 3,
                'title' => 'permission_create',
            ],
            [
                'id'    => 4,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 5,
                'title' => 'permission_show',
            ],
            [
                'id'    => 6,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 7,
                'title' => 'permission_access',
            ],
            [
                'id'    => 8,
                'title' => 'role_create',
            ],
            [
                'id'    => 9,
                'title' => 'role_edit',
            ],
            [
                'id'    => 10,
                'title' => 'role_show',
            ],
            [
                'id'    => 11,
                'title' => 'role_delete',
            ],
            [
                'id'    => 12,
                'title' => 'role_access',
            ],
            [
                'id'    => 13,
                'title' => 'user_create',
            ],
            [
                'id'    => 14,
                'title' => 'user_edit',
            ],
            [
                'id'    => 15,
                'title' => 'user_show',
            ],
            [
                'id'    => 16,
                'title' => 'user_delete',
            ],
            [
                'id'    => 17,
                'title' => 'user_access',
            ],
            [
                'id'    => 18,
                'title' => 'form_access',
            ],
            [
                'id'    => 19,
                'title' => 'setting_access',
            ],
            [
                'id'    => 20,
                'title' => 'site_create',
            ],
            [
                'id'    => 21,
                'title' => 'site_edit',
            ],
            [
                'id'    => 22,
                'title' => 'site_show',
            ],
            [
                'id'    => 23,
                'title' => 'site_delete',
            ],
            [
                'id'    => 24,
                'title' => 'site_access',
            ],
            [
                'id'    => 25,
                'title' => 'grade_create',
            ],
            [
                'id'    => 26,
                'title' => 'grade_edit',
            ],
            [
                'id'    => 27,
                'title' => 'grade_show',
            ],
            [
                'id'    => 28,
                'title' => 'grade_delete',
            ],
            [
                'id'    => 29,
                'title' => 'grade_access',
            ],
            [
                'id'    => 30,
                'title' => 'religion_create',
            ],
            [
                'id'    => 31,
                'title' => 'religion_edit',
            ],
            [
                'id'    => 32,
                'title' => 'religion_show',
            ],
            [
                'id'    => 33,
                'title' => 'religion_delete',
            ],
            [
                'id'    => 34,
                'title' => 'religion_access',
            ],
            [
                'id'    => 35,
                'title' => 'sector_create',
            ],
            [
                'id'    => 36,
                'title' => 'sector_edit',
            ],
            [
                'id'    => 37,
                'title' => 'sector_show',
            ],
            [
                'id'    => 38,
                'title' => 'sector_delete',
            ],
            [
                'id'    => 39,
                'title' => 'sector_access',
            ],
            [
                'id'    => 40,
                'title' => 'major_create',
            ],
            [
                'id'    => 41,
                'title' => 'major_edit',
            ],
            [
                'id'    => 42,
                'title' => 'major_show',
            ],
            [
                'id'    => 43,
                'title' => 'major_delete',
            ],
            [
                'id'    => 44,
                'title' => 'major_access',
            ],
            [
                'id'    => 45,
                'title' => 'department_create',
            ],
            [
                'id'    => 46,
                'title' => 'department_edit',
            ],
            [
                'id'    => 47,
                'title' => 'department_show',
            ],
            [
                'id'    => 48,
                'title' => 'department_delete',
            ],
            [
                'id'    => 49,
                'title' => 'department_access',
            ],
            [
                'id'    => 50,
                'title' => 'employee_i_create',
            ],
            [
                'id'    => 51,
                'title' => 'employee_i_edit',
            ],
            [
                'id'    => 52,
                'title' => 'employee_i_show',
            ],
            [
                'id'    => 53,
                'title' => 'employee_i_delete',
            ],
            [
                'id'    => 54,
                'title' => 'employee_i_access',
            ],
        ];

        Permission::insert($permissions);
    }
}
