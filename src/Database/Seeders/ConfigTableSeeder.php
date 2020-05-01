<?php
namespace BagistoBrasil\Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

/**
 * ConfigTableSeeder
 *
 * @copyright Copyright © 2020 Bagisto Brasil. All rights reserved.
 * @author    Carlos Gartner <contato@carlosgartner.com.br>
 */

class ConfigTableSeeder extends Seeder
{
    public function run()
    {
        $now = Carbon::now();

        DB::table('core_config')->insert([
            'code'         => 'catalog.products.review.share_message',
            'value'        => 'Hey, look this awesome product',
            'channel_code' => null,
            'locale_code'  => null,
            'created_at'   => $now,
            'updated_at'   => $now,
        ]);
    }
}