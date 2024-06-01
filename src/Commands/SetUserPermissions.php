<?php 

// src/Commands/SetUserPermissions.php
namespace Tharindu\LaravelPermissionUI\Commands;

use Illuminate\Console\Command;

class SetUserPermissions extends Command
{
    protected $signature = 'permissions:set-user';
    protected $description = 'Set permissions for the user with UI implementation';

    public function handle()
    {
        $this->call('vendor:publish', ['--tag' => 'views', '--force' => true]);
        $this->info('User Permissions UI generated successfully.');
    }
}
