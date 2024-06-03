<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StarshipSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $sql = 'insert into starships (name, registry, class, crew_count, active) values (?, ?, ?, ?, ?)';

        DB::insert($sql, ['USS Enterprise', 'NCC-1701', 'Constitution', 281, false]);
        DB::insert($sql, ['USS Enterprise', 'NCC-1701-D', 'Galaxy', 344, true]);
        DB::insert($sql, ['USS Discovery', 'NCC-1031-A', 'Crossfield', 178, true]);
    }
}
