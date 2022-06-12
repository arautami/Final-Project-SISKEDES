<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\agenda;
use App\Models\warga;
use App\Models\cashflow;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        agenda::factory(50)->create();
        warga::factory(200)->create();
        cashflow::factory(100)->create();
    }
}
