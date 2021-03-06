<?php

use Illuminate\Database\Seeder;

class PermissionSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $items = [
            
            ['id' => 1, 'title' => 'user_management_access',],
            ['id' => 2, 'title' => 'user_management_create',],
            ['id' => 3, 'title' => 'user_management_edit',],
            ['id' => 4, 'title' => 'user_management_view',],
            ['id' => 5, 'title' => 'user_management_delete',],
            ['id' => 6, 'title' => 'permission_access',],
            ['id' => 7, 'title' => 'permission_create',],
            ['id' => 8, 'title' => 'permission_edit',],
            ['id' => 9, 'title' => 'permission_view',],
            ['id' => 10, 'title' => 'permission_delete',],
            ['id' => 11, 'title' => 'role_access',],
            ['id' => 12, 'title' => 'role_create',],
            ['id' => 13, 'title' => 'role_edit',],
            ['id' => 14, 'title' => 'role_view',],
            ['id' => 15, 'title' => 'role_delete',],
            ['id' => 16, 'title' => 'user_access',],
            ['id' => 17, 'title' => 'user_create',],
            ['id' => 18, 'title' => 'user_edit',],
            ['id' => 19, 'title' => 'user_view',],
            ['id' => 20, 'title' => 'user_delete',],
            ['id' => 21, 'title' => 'task_management_access',],
            ['id' => 22, 'title' => 'task_management_create',],
            ['id' => 23, 'title' => 'task_management_edit',],
            ['id' => 24, 'title' => 'task_management_view',],
            ['id' => 25, 'title' => 'task_management_delete',],
            ['id' => 26, 'title' => 'task_status_access',],
            ['id' => 27, 'title' => 'task_status_create',],
            ['id' => 28, 'title' => 'task_status_edit',],
            ['id' => 29, 'title' => 'task_status_view',],
            ['id' => 30, 'title' => 'task_status_delete',],
            ['id' => 31, 'title' => 'task_tag_access',],
            ['id' => 32, 'title' => 'task_tag_create',],
            ['id' => 33, 'title' => 'task_tag_edit',],
            ['id' => 34, 'title' => 'task_tag_view',],
            ['id' => 35, 'title' => 'task_tag_delete',],
            ['id' => 36, 'title' => 'task_access',],
            ['id' => 37, 'title' => 'task_create',],
            ['id' => 38, 'title' => 'task_edit',],
            ['id' => 39, 'title' => 'task_view',],
            ['id' => 40, 'title' => 'task_delete',],
            ['id' => 41, 'title' => 'task_calendar_access',],
            ['id' => 42, 'title' => 'task_calendar_create',],
            ['id' => 43, 'title' => 'task_calendar_edit',],
            ['id' => 44, 'title' => 'task_calendar_view',],
            ['id' => 45, 'title' => 'task_calendar_delete',],
            ['id' => 51, 'title' => 'content_management_access',],
            ['id' => 52, 'title' => 'content_management_create',],
            ['id' => 53, 'title' => 'content_management_edit',],
            ['id' => 54, 'title' => 'content_management_view',],
            ['id' => 55, 'title' => 'content_management_delete',],
            ['id' => 56, 'title' => 'content_category_access',],
            ['id' => 57, 'title' => 'content_category_create',],
            ['id' => 58, 'title' => 'content_category_edit',],
            ['id' => 59, 'title' => 'content_category_view',],
            ['id' => 60, 'title' => 'content_category_delete',],
            ['id' => 61, 'title' => 'content_tag_access',],
            ['id' => 62, 'title' => 'content_tag_create',],
            ['id' => 63, 'title' => 'content_tag_edit',],
            ['id' => 64, 'title' => 'content_tag_view',],
            ['id' => 65, 'title' => 'content_tag_delete',],
            ['id' => 66, 'title' => 'content_page_access',],
            ['id' => 67, 'title' => 'content_page_create',],
            ['id' => 68, 'title' => 'content_page_edit',],
            ['id' => 69, 'title' => 'content_page_view',],
            ['id' => 70, 'title' => 'content_page_delete',],
            ['id' => 71, 'title' => 'profile_access',],
            ['id' => 72, 'title' => 'minhaseleco_access',],
            ['id' => 73, 'title' => 'elenco_access',],
            ['id' => 74, 'title' => 'elenco_create',],
            ['id' => 75, 'title' => 'elenco_edit',],
            ['id' => 76, 'title' => 'elenco_view',],
            ['id' => 77, 'title' => 'elenco_delete',],
            ['id' => 78, 'title' => 'gerenciarelenco_access',],
            ['id' => 79, 'title' => 'aprovação_de_cadastro_access',],
            ['id' => 80, 'title' => 'gerenciar_produtora_access',],
            ['id' => 81, 'title' => 'produtora_access',],
            ['id' => 82, 'title' => 'produtora_create',],
            ['id' => 83, 'title' => 'produtora_edit',],
            ['id' => 84, 'title' => 'produtora_view',],
            ['id' => 85, 'title' => 'produtora_delete',],
            ['id' => 86, 'title' => 'gerenciar_seleco_access',],
            ['id' => 92, 'title' => 'client_management_access',],
            ['id' => 93, 'title' => 'client_management_create',],
            ['id' => 94, 'title' => 'client_management_edit',],
            ['id' => 95, 'title' => 'client_management_view',],
            ['id' => 96, 'title' => 'client_management_delete',],
            ['id' => 97, 'title' => 'client_management_setting_access',],
            ['id' => 98, 'title' => 'client_management_setting_create',],
            ['id' => 99, 'title' => 'client_management_setting_edit',],
            ['id' => 100, 'title' => 'client_management_setting_view',],
            ['id' => 101, 'title' => 'client_management_setting_delete',],
            ['id' => 102, 'title' => 'client_currency_access',],
            ['id' => 103, 'title' => 'client_currency_create',],
            ['id' => 104, 'title' => 'client_currency_edit',],
            ['id' => 105, 'title' => 'client_currency_view',],
            ['id' => 106, 'title' => 'client_currency_delete',],
            ['id' => 107, 'title' => 'client_transaction_type_access',],
            ['id' => 108, 'title' => 'client_transaction_type_create',],
            ['id' => 109, 'title' => 'client_transaction_type_edit',],
            ['id' => 110, 'title' => 'client_transaction_type_view',],
            ['id' => 111, 'title' => 'client_transaction_type_delete',],
            ['id' => 112, 'title' => 'client_income_source_access',],
            ['id' => 113, 'title' => 'client_income_source_create',],
            ['id' => 114, 'title' => 'client_income_source_edit',],
            ['id' => 115, 'title' => 'client_income_source_view',],
            ['id' => 116, 'title' => 'client_income_source_delete',],
            ['id' => 117, 'title' => 'client_status_access',],
            ['id' => 118, 'title' => 'client_status_create',],
            ['id' => 119, 'title' => 'client_status_edit',],
            ['id' => 120, 'title' => 'client_status_view',],
            ['id' => 121, 'title' => 'client_status_delete',],
            ['id' => 122, 'title' => 'client_project_status_access',],
            ['id' => 123, 'title' => 'client_project_status_create',],
            ['id' => 124, 'title' => 'client_project_status_edit',],
            ['id' => 125, 'title' => 'client_project_status_view',],
            ['id' => 126, 'title' => 'client_project_status_delete',],
            ['id' => 127, 'title' => 'client_access',],
            ['id' => 128, 'title' => 'client_create',],
            ['id' => 129, 'title' => 'client_edit',],
            ['id' => 130, 'title' => 'client_view',],
            ['id' => 131, 'title' => 'client_delete',],
            ['id' => 132, 'title' => 'client_project_access',],
            ['id' => 133, 'title' => 'client_project_create',],
            ['id' => 134, 'title' => 'client_project_edit',],
            ['id' => 135, 'title' => 'client_project_view',],
            ['id' => 136, 'title' => 'client_project_delete',],
            ['id' => 137, 'title' => 'client_note_access',],
            ['id' => 138, 'title' => 'client_note_create',],
            ['id' => 139, 'title' => 'client_note_edit',],
            ['id' => 140, 'title' => 'client_note_view',],
            ['id' => 141, 'title' => 'client_note_delete',],
            ['id' => 142, 'title' => 'client_document_access',],
            ['id' => 143, 'title' => 'client_document_create',],
            ['id' => 144, 'title' => 'client_document_edit',],
            ['id' => 145, 'title' => 'client_document_view',],
            ['id' => 146, 'title' => 'client_document_delete',],
            ['id' => 147, 'title' => 'client_transaction_access',],
            ['id' => 148, 'title' => 'client_transaction_create',],
            ['id' => 149, 'title' => 'client_transaction_edit',],
            ['id' => 150, 'title' => 'client_transaction_view',],
            ['id' => 151, 'title' => 'client_transaction_delete',],
            ['id' => 152, 'title' => 'client_report_access',],
            ['id' => 153, 'title' => 'client_report_create',],
            ['id' => 154, 'title' => 'client_report_edit',],
            ['id' => 155, 'title' => 'client_report_view',],
            ['id' => 156, 'title' => 'client_report_delete',],
            ['id' => 162, 'title' => 'elencofoto_access',],
            ['id' => 163, 'title' => 'elencofoto_create',],
            ['id' => 164, 'title' => 'elencofoto_edit',],
            ['id' => 165, 'title' => 'elencofoto_view',],
            ['id' => 166, 'title' => 'elencofoto_delete',],
            ['id' => 167, 'title' => 'elenco_video_access',],
            ['id' => 168, 'title' => 'elenco_video_create',],
            ['id' => 169, 'title' => 'elenco_video_edit',],
            ['id' => 170, 'title' => 'elenco_video_view',],
            ['id' => 171, 'title' => 'elenco_video_delete',],
            ['id' => 172, 'title' => 'selecoesv2_access',],
            ['id' => 173, 'title' => 'selecoesv2_create',],
            ['id' => 174, 'title' => 'selecoesv2_edit',],
            ['id' => 175, 'title' => 'selecoesv2_view',],
            ['id' => 176, 'title' => 'selecoesv2_delete',],
            ['id' => 177, 'title' => 'selecaoelenco_access',],
            ['id' => 178, 'title' => 'selecaoelenco_create',],
            ['id' => 179, 'title' => 'selecaoelenco_edit',],
            ['id' => 180, 'title' => 'selecaoelenco_view',],
            ['id' => 181, 'title' => 'selecaoelenco_delete',],

        ];

        foreach ($items as $item) {
            \App\Permission::create($item);
        }
    }
}
