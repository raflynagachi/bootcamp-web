<?php

namespace Database\Seeders;

use App\Models\CampBenefit;
use Illuminate\Database\Seeder;

class CampBenefitTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $campBenefits = [
            [
                'camp_id' => '1',
                'name' => 'Lifetime access'
            ],
            [
                'camp_id' => '1',
                'name' => 'Discussion group'
            ],
            [
                'camp_id' => '1',
                'name' => '1-1 Mentoring'
            ],
            [
                'camp_id' => '1',
                'name' => 'Final project certification'
            ],
            [
                'camp_id' => '1',
                'name' => 'Offline videos'
            ],
            [
                'camp_id' => '2',
                'name' => '6 months access'
            ],
            [
                'camp_id' => '2',
                'name' => 'Discussion group'
            ],
            [
                'camp_id' => '2',
                'name' => 'Final project certification'
            ],
            [
                'camp_id' => '2',
                'name' => 'Offline videos'
            ]
            ];
        foreach ($campBenefits as $key => $campBenefit) {
            CampBenefit::create($campBenefit);
        }
    }
}
