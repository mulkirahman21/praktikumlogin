<?php

namespace Database\Seeders;

use App\Models\Supplier;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class seeding_barang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        Supplier::factory(100)->create();
    }
}
