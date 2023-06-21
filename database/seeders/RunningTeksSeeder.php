<?php

namespace Database\Seeders;

use App\Models\RunningTeks;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class RunningTeksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        RunningTeks::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'Programmer', 'Web Developer'
        ];

        foreach ($data as $value) {
            RunningTeks::insert([
                'text' => $value
            ]);
        }
    }
}
