<?php

use Illuminate\Database\Seeder;

class deliveryStatusTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pact_deliveryStatus')->insert([
            'statusName' => Str::random(10),
            'code' => Str::random(8),
            'status' => 0,
            'createdBy' => 1
        ]);
    }
}
