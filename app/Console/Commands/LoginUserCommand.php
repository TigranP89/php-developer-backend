<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class LoginUserCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'user:login {email} {password}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Login to account and generate token';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if (Auth::attempt(['email' => $this->argument('email'),'password' =>  $this->argument('password')])){
            $user = Auth::user();
            $token = $user->createToken('MyApp')->accessToken;

            $this->info($token);
        }
    }
}
