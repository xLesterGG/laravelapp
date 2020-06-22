<?php

use App\CreditRequest;
use App\UserAddress;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Log;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UserSeeder::class);

        factory(UserAddress::class, 500)->create();
        // $this->command->info(CreditRequest::whereDoesntHave('userAddress')->count());

        exec('rm '.storage_path('logs/*.log'));
        Log::info(CreditRequest::with('userAddress')->get()->toJson());
    }
}
