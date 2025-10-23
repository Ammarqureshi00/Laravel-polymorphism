<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Post2;
use App\Models\Video;

class PostVideoSeeder extends Seeder
{
    public function run()
    {
        // Insert 4 posts
        Post2::insert([
            [
                'title' => 'Understanding Polymorphism in Laravel',
                'body' => 'This post explains how to implement polymorphic relationships in Laravel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Laravel API Authentication',
                'body' => 'Learn how to secure your Laravel APIs with Sanctum.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Mastering Eloquent ORM',
                'body' => 'Advanced guide to Laravel Eloquent ORM for database operations.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Building RESTful APIs in Laravel',
                'body' => 'A practical example on how to build and structure APIs in Laravel.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);

        // Insert 4 videos
        Video::insert([
            [
                'title' => 'Laravel Relationships Tutorial',
                'url' => 'https://youtube.com/watch?v=abc123',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Eloquent Polymorphic Relations Explained',
                'url' => 'https://youtube.com/watch?v=def456',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Laravel 11 New Features',
                'url' => 'https://youtube.com/watch?v=ghi789',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'How to Build APIs in Laravel',
                'url' => 'https://youtube.com/watch?v=jkl101',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
