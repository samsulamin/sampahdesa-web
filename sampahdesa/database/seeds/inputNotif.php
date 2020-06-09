<?php

use Illuminate\Database\Seeder;

class inputNotif extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('notifikasi')->insert([
            'warga_id' => '1',
            'desa_id' => '21',
            'status' => 0
        ]);
    }
}
