<?php

namespace Database\Seeders;

use App\Models\SkillType;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class SkillTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Schema::disableForeignKeyConstraints();
        SkillType::truncate();
        Schema::enableForeignKeyConstraints();

        $data = [
            'Bahasa Pemrogramman & Database', 
            'Frameworks',
            'Lainnya'
        ];

        foreach ($data as $value) {
            SkillType::insert([
                'nama' => $value
            ]);
        }
    }
}
