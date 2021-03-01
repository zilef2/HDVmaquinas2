<?php

namespace Database\Seeders;

use App\Models\Equipo;
use App\Models\Mantenimiento;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         User::factory(10)->create();
         Mantenimiento::factory(10)->create();
         Equipo::factory(10)->create();

        DB::table('equipos_mantenimientos')->insert([
            'fecha' => '2021-02-28 00:00:01',
            'equipo_id' => 1,
            'mantenimiento_id' => 1,
        ]);
//        DB::table('equipo_mantenimiento_user')->insert([
//            'user_id' => 2,
//            'mantenimiento_id' => 2,
//            'equipo_id' => 2,
//        ]);
//        DB::table('equipo_mantenimiento_user')->insert([
//            'user_id' => 3,
//            'mantenimiento_id' => 3,
//            'equipo_id' => 3,
//        ]);

        DB::table('users')->insert([
            'name' => "a",
            'email' => "alejofg2@gmail.com",
            'password' => bcrypt('laravel'),
            'is_admin'=>2,
        ]);
    }
}
