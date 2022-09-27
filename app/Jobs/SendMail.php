<?php

namespace App\Jobs;

use App\Models\User;
use Faker\Factory;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
       $faker=  Factory::create();
       $jumlah = 10000;

       for ($i = 1; $i <= $jumlah; $i++){
        $data = [
            'name' => $faker->name(),
            'email' => $faker->unique()->email(),
            'password' => bcrypt('password'),
        ];
        User::create($data);
       }
    }
}
