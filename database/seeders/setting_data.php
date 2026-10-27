<?php

namespace Database\Seeders;

use App\Models\Setting;
use DB;
use Illuminate\Database\Seeder;

class setting_data extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('setting')->insert([
            'name' => 'date-format',
            '_value' => 'YYYY-MM-DD',
        ]);
    }
}
