<?php

namespace Joy\VoyagerBreadDeal\Database\Seeders;

use Illuminate\Database\Seeder;
use TCG\Voyager\Models\DataType;

class DataTypesTableSeeder extends Seeder
{
    /**
     * Auto generated seed file.
     */
    public function run()
    {
        $dataType = $this->dataType('slug', 'deals');
        if (!$dataType->exists) {
            $dataType->fill([
                'name'                  => 'deals',
                'display_name_singular' => __('joy-voyager-bread-deal::seeders.data_types.deal.singular'),
                'display_name_plural'   => __('joy-voyager-bread-deal::seeders.data_types.deal.plural'),
                'icon'                  => 'voyager-bread',
                'model_name'            => 'Joy\\VoyagerBreadDeal\\Models\\Deal',
                // 'policy_name'           => 'Joy\\VoyagerBreadDeal\\Policies\\DealPolicy',
                // 'controller'            => 'Joy\\VoyagerBreadDeal\\Http\\Controllers\\VoyagerBreadDealController',
                'generate_permissions'  => 1,
                'description'           => '',
            ])->save();
        }
    }

    /**
     * [dataType description].
     *
     * @param [type] $field [description]
     * @param [type] $for   [description]
     *
     * @return [type] [description]
     */
    protected function dataType($field, $for)
    {
        return DataType::firstOrNew([$field => $for]);
    }
}
