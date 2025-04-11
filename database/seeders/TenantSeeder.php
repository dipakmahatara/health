<?php

namespace Database\Seeders;

use App\Models\Tenant;
use Illuminate\Database\Seeder;

class TenantSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $tenant1 = Tenant::create(['id' => 'client1']);
        $tenant1->domains()->create(['domain' => 'client1.health.test']);

        $tenant2 = Tenant::create(['id' => 'client2']);
        $tenant2->domains()->create(['domain' => 'client2.health.test']);
    }
}
