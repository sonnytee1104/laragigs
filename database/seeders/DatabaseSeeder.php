<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Listing;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(5)->create();

        $user = User::factory()->create([
            'name' => 'Van A',
            'email' => 'vana@gmail.com'
        ]);

        Listing::factory(6)->create([
            'user_id' => $user->id
        ]);

        // Listing::create([
        //     "title" => "Laravel Senior Devloper",
        //     "tags" => "laravel, javascript",
        //     "company" => "FPT",
        //     "location" => "Danang, Vietnam",
        //     "email" => "email1@emgail.com",
        //     "website" => "https://fsoft.com",
        //     "description" => "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain"
        // ]);

        // Listing::create([
        //     "title" => "Full-Stack Engineer",
        //     "tags" => "laravel, back end, api",
        //     "company" => "VNG",
        //     "location" => "Hanoi, Vietnam",
        //     "email" => "email2@emgail.com",
        //     "website" => "https://vng.com.vn",
        //     "description" => "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain"
        // ]);

        // Listing::create([
        //     "title" => "APTECH DEVELOPER",
        //     "tags" => "laravel, back end, api",
        //     "company" => "APTECH",
        //     "location" => "Hanoi, Vietnam",
        //     "email" => "email2@emgail.com",
        //     "website" => "https://vng.com.vn",
        //     "description" => "On the other hand, we denounce with righteous indignation and dislike men who are so beguiled and demoralized by the charms of pleasure of the moment, so blinded by desire, that they cannot foresee the pain and trouble that are bound to ensue; and equal blame belongs to those who fail in their duty through weakness of will, which is the same as saying through shrinking from toil and pain"
        // ]);
        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
