<?php

namespace Joy\VoyagerBreadDeal\Database\Seeders;

use Joy\VoyagerBreadDeal\Models\Deal;
use Illuminate\Database\Seeder;

class DealsTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     *
     * @return void
     */
    public function run()
    {
        if (Deal::query()->count() > 0) {
            return false;
        }

        $count = 20;
        Deal::factory()
            ->count($count)
            ->state(function (array $attributes) use ($count) {
                return [
                    'name' => 'Deal ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count),
                    'description' => 'Deal Description ' . time()
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                        . ' ' . rand(1, $count)
                ];
            })
            ->create();
    }
}
