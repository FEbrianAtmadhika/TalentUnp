<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Laravel\Sanctum\PersonalAccessToken;

class ClearExpiredTokens extends Command
{
    protected $signature = 'sanctum:clear-tokens';


    protected $description = 'Clear expired Sanctum tokens';

    public function handle()
    {
        PersonalAccessToken::where('expires_at', '<' , now()->delete());
        $this->info('Expired Sanctum tokens cleared');
    }
}
