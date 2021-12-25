<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Camp;

class CampTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $camps = [
            [
                'title' => 'Belajar Python Extra',
                'slug' => 'belajar-python-extra',
                'price' => 199,
                // 'created_at' => date('Y-m-d H:i:s', time()),
                // 'updated_at' => date('Y-m-d H:i:s', time())
            ],
            [
                'title' => 'Belajar Python',
                'slug' => 'belajar-python',
                'price' => 99,
                // 'created_at' => date('Y-m-d H:i:s', time()),
                // 'updated_at' => date('Y-m-d H:i:s', time())
            ]
            ];
        foreach ($camps as $key => $camp) {
            Camp::create($camp); //It's okay without created_at
        }

        //Alternative method but we have to define created_at
        // Camp::insert($camps);
    }
}
