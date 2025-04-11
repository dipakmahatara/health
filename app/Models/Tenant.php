<?php

namespace App\Models;

use Illuminate\Support\Facades\Config;
use Stancl\Tenancy\Database\Models\Tenant as BaseTenant;
use Stancl\Tenancy\Contracts\TenantWithDatabase;
use Stancl\Tenancy\Database\Concerns\HasDatabase;
use Stancl\Tenancy\Database\Concerns\HasDomains;

class Tenant extends BaseTenant implements TenantWithDatabase
{
    use HasDatabase, HasDomains;

    public function configure()
    {
        Config::set('mail.from.address', 'info@' . $this->getTenantKey() . '.health.test');
        Config::set('mail.from.name', ucfirst($this->getTenantKey()));
    }
}
