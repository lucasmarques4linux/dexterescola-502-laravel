<?php

use Illuminate\Database\Seeder;

class PeriodosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('periodos')->insert(['descricao' => "Noturno",'created_at' => now(),'updated_at' => now()]);
        DB::table('periodos')->insert(['descricao' => "Diruno",'created_at' => now(),'updated_at' => now()]);
        DB::table('periodos')->insert(['descricao' => "Matutino",'created_at' => now(),'updated_at' => now()]);
        DB::table('periodos')->insert(['descricao' => "Sábado",'created_at' => now(),'updated_at' => now()]);
        DB::table('periodos')->insert(['descricao' => "Domingo",'created_at' => now(),'updated_at' => now()]);
    }
}