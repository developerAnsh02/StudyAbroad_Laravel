<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Menu;

class MenuSeeder extends Seeder
{
    public function run(): void
    {
        // Create parent menu - Dashboards
        $dashboard = Menu::create([
            'name' => 'Dashboards',
            'icon' => 'feather-airplay',
            'url' => null,
            'order' => 1
        ]);

        // Add children for Dashboards
        Menu::create([
            'name' => 'CRM',
            'url' => '/crm',
            'parent_id' => $dashboard->id,
            'order' => 1
        ]);

        Menu::create([
            'name' => 'Analytics',
            'url' => '/analytics',
            'parent_id' => $dashboard->id,
            'order' => 2
        ]);

        // Create parent menu - Reports
        $reports = Menu::create([
            'name' => 'Reports',
            'icon' => 'feather-cast',
            'url' => null,
            'order' => 2
        ]);

        // Add children for Reports
        Menu::create([
            'name' => 'Sales Report',
            'url' => '/sales-report',
            'parent_id' => $reports->id,
            'order' => 1
        ]);

        Menu::create([
            'name' => 'Leads Report',
            'url' => '/leads-report',
            'parent_id' => $reports->id,
            'order' => 2
        ]);

        Menu::create([
            'name' => 'Project Report',
            'url' => '/project-report',
            'parent_id' => $reports->id,
            'order' => 3
        ]);

        Menu::create([
            'name' => 'Timesheets Report',
            'url' => '/timesheets-report',
            'parent_id' => $reports->id,
            'order' => 4
        ]);
    }
}
