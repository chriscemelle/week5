<?php

use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'name' => 'Holdera',
                'address' => 'Enougher',
                'phone' => '09123487621',
                'capitalization' => 20000,
                'loan' => 10000
            ],
            [
                'name' => 'Runner',
                'address' => 'Accelerate',
                'phone' => '0982312',
                'capitalization' => 40000,
                'loan' => 300000
            ],
            [
                'name' => 'Dragon',
                'address' => 'Mountain',
                'phone' => '09983271632',
                'capitalization' => 50000,
                'loan' => 500000
            ],
        ];

        foreach($data as $client) {
            \App\Client::create($client);
        }
    }
}
