<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

       //location_types
        DB::table('location_types')->insert([
            'description' => 'Departamento',
            'uuid' => Str::uuid(),
        ]);

        DB::table('location_types')->insert([
            'description' => 'Municipio',
            'uuid' => Str::uuid(),
        ]);

        DB::table('location_types')->insert([
            'description' => 'Zona',
            'uuid' => Str::uuid(),
        ]);

        //locations
        DB::table('locations')->insert([
            'location_type_id' => 1,
            'name' => 'Guatemala',
            'uuid' => Str::uuid(),
        ]);

        DB::table('locations')->insert([
            'location_type_id' => 2,
            'name' => 'Guatemala',
            'uuid' => Str::uuid(),
        ]);

        DB::table('locations')->insert([
            'location_type_id' => 3,
            'name' => 'Zona 1',
            'uuid' => Str::uuid(),
        ]);

        DB::table('locations')->insert([
            'location_type_id' => 3,
            'name' => 'Zona 2',
            'uuid' => Str::uuid(),
        ]);

        //complaint_types
        DB::table('complaint_types')->insert([
            'description' => 'Trata de personas',
            'uuid' => Str::uuid(),
        ]);

        DB::table('complaint_types')->insert([
            'description' => 'Violencia contra la mujer',
            'uuid' => Str::uuid(),
        ]);

        DB::table('complaint_types')->insert([
            'description' => 'Maltrato animal',
            'uuid' => Str::uuid(),
        ]);        
    }
}
