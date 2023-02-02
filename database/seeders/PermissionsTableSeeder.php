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
                'title' => 'user_management_access',
            ],
            [
                'id'    => 2,
                'title' => 'permission_create',
            ],
            [
                'id'    => 3,
                'title' => 'permission_edit',
            ],
            [
                'id'    => 4,
                'title' => 'permission_show',
            ],
            [
                'id'    => 5,
                'title' => 'permission_delete',
            ],
            [
                'id'    => 6,
                'title' => 'permission_access',
            ],
            [
                'id'    => 7,
                'title' => 'role_create',
            ],
            [
                'id'    => 8,
                'title' => 'role_edit',
            ],
            [
                'id'    => 9,
                'title' => 'role_show',
            ],
            [
                'id'    => 10,
                'title' => 'role_delete',
            ],
            [
                'id'    => 11,
                'title' => 'role_access',
            ],
            [
                'id'    => 12,
                'title' => 'user_create',
            ],
            [
                'id'    => 13,
                'title' => 'user_edit',
            ],
            [
                'id'    => 14,
                'title' => 'user_show',
            ],
            [
                'id'    => 15,
                'title' => 'user_delete',
            ],
            [
                'id'    => 16,
                'title' => 'user_access',
            ],
            [
                'id'    => 17,
                'title' => 'audit_log_show',
            ],
            [
                'id'    => 18,
                'title' => 'audit_log_access',
            ],
            [
                'id'    => 19,
                'title' => 'user_alert_create',
            ],
            [
                'id'    => 20,
                'title' => 'user_alert_show',
            ],
            [
                'id'    => 21,
                'title' => 'user_alert_delete',
            ],
            [
                'id'    => 22,
                'title' => 'user_alert_access',
            ],
            [
                'id'    => 23,
                'title' => 'task_management_access',
            ],
            [
                'id'    => 24,
                'title' => 'task_status_create',
            ],
            [
                'id'    => 25,
                'title' => 'task_status_edit',
            ],
            [
                'id'    => 26,
                'title' => 'task_status_show',
            ],
            [
                'id'    => 27,
                'title' => 'task_status_delete',
            ],
            [
                'id'    => 28,
                'title' => 'task_status_access',
            ],
            [
                'id'    => 29,
                'title' => 'task_tag_create',
            ],
            [
                'id'    => 30,
                'title' => 'task_tag_edit',
            ],
            [
                'id'    => 31,
                'title' => 'task_tag_show',
            ],
            [
                'id'    => 32,
                'title' => 'task_tag_delete',
            ],
            [
                'id'    => 33,
                'title' => 'task_tag_access',
            ],
            [
                'id'    => 34,
                'title' => 'task_create',
            ],
            [
                'id'    => 35,
                'title' => 'task_edit',
            ],
            [
                'id'    => 36,
                'title' => 'task_show',
            ],
            [
                'id'    => 37,
                'title' => 'task_delete',
            ],
            [
                'id'    => 38,
                'title' => 'task_access',
            ],
            [
                'id'    => 39,
                'title' => 'tasks_calendar_access',
            ],
            [
                'id'    => 40,
                'title' => 'time_management_access',
            ],
            [
                'id'    => 41,
                'title' => 'time_work_type_create',
            ],
            [
                'id'    => 42,
                'title' => 'time_work_type_edit',
            ],
            [
                'id'    => 43,
                'title' => 'time_work_type_show',
            ],
            [
                'id'    => 44,
                'title' => 'time_work_type_delete',
            ],
            [
                'id'    => 45,
                'title' => 'time_work_type_access',
            ],
            [
                'id'    => 46,
                'title' => 'time_project_create',
            ],
            [
                'id'    => 47,
                'title' => 'time_project_edit',
            ],
            [
                'id'    => 48,
                'title' => 'time_project_show',
            ],
            [
                'id'    => 49,
                'title' => 'time_project_delete',
            ],
            [
                'id'    => 50,
                'title' => 'time_project_access',
            ],
            [
                'id'    => 51,
                'title' => 'time_entry_create',
            ],
            [
                'id'    => 52,
                'title' => 'time_entry_edit',
            ],
            [
                'id'    => 53,
                'title' => 'time_entry_show',
            ],
            [
                'id'    => 54,
                'title' => 'time_entry_delete',
            ],
            [
                'id'    => 55,
                'title' => 'time_entry_access',
            ],
            [
                'id'    => 56,
                'title' => 'time_report_create',
            ],
            [
                'id'    => 57,
                'title' => 'time_report_edit',
            ],
            [
                'id'    => 58,
                'title' => 'time_report_show',
            ],
            [
                'id'    => 59,
                'title' => 'time_report_delete',
            ],
            [
                'id'    => 60,
                'title' => 'time_report_access',
            ],
            [
                'id'    => 61,
                'title' => 'contact_management_access',
            ],
            [
                'id'    => 62,
                'title' => 'contact_company_create',
            ],
            [
                'id'    => 63,
                'title' => 'contact_company_edit',
            ],
            [
                'id'    => 64,
                'title' => 'contact_company_show',
            ],
            [
                'id'    => 65,
                'title' => 'contact_company_delete',
            ],
            [
                'id'    => 66,
                'title' => 'contact_company_access',
            ],
            [
                'id'    => 67,
                'title' => 'contact_contact_create',
            ],
            [
                'id'    => 68,
                'title' => 'contact_contact_edit',
            ],
            [
                'id'    => 69,
                'title' => 'contact_contact_show',
            ],
            [
                'id'    => 70,
                'title' => 'contact_contact_delete',
            ],
            [
                'id'    => 71,
                'title' => 'contact_contact_access',
            ],
            [
                'id'    => 72,
                'title' => 'task_progress_create',
            ],
            [
                'id'    => 73,
                'title' => 'task_progress_edit',
            ],
            [
                'id'    => 74,
                'title' => 'task_progress_show',
            ],
            [
                'id'    => 75,
                'title' => 'task_progress_delete',
            ],
            [
                'id'    => 76,
                'title' => 'task_progress_access',
            ],
            [
                'id'    => 77,
                'title' => 'profile_password_edit',
            ],
        ];

        Permission::insert($permissions);
    }
}
