<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AddColumnsToEmployeesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::statement('ALTER TABLE employees ADD COLUMN original_filename VARCHAR(255) NULL AFTER position_id, ADD COLUMN encrypted_filename VARCHAR(255) NULL AFTER original_filename');
    }
}
