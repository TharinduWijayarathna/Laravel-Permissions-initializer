<?php 

// src/Commands/GenerateRoleBasedPermissions.php
namespace Tharindu\LaravelPermissionUI\Commands;

use Illuminate\Console\Command;

class GenerateRoleBasedPermissions extends Command
{
    protected $signature = 'permissions:generate-roles-ui';
    protected $description = 'Generate role based permissions with UI implementation';

    public function handle()
    {
        $this->call('vendor:publish', ['--tag' => 'views', '--force' => true]);
        $this->info('Roles and Permissions UI generated successfully.');
    }
}
