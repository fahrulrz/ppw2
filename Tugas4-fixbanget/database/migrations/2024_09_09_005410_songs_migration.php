<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('songs', function (Blueprint $table) {
            $table->id();
            $table->string('title');
            $table->string('artist');
            $table->string('album');
            $table->string('year');
            $table->string('genre');
            $table->string('image');
        });

        DB::table('songs')->insert([
            [
                'title' => 'Sicko Mode', 
                'artist' => 'Travis Scott', 
                'album' => 'Sicko Mode', 
                'year' => '2020', 
                'genre' => 'Rap',
                'image' => 'https://i.scdn.co/image/ab67616d0000b273072e9faef2ef7b6db63834a3'
            ],
            [
                'title' => 'Sucker', 
                'artist' => 'Jonas Brothers', 
                'album' => 'Sucker', 
                'year' => '2020', 
                'genre' => 'Rap',
                'image' => 'https://i.scdn.co/image/ab67616d0000b273c85bf1709e11b6a288925b26'
            ],
            [
                'title' => 'Bird of A Feather',
                'artist' => 'Billie Eilish',
                'album' => 'Hit Me Hard And Soft',
                'year' => '2024',
                'genre' => 'Alternative/Indie',
                'image' => 'https://images.genius.com/90daf672db352fc1cd6e0702818144e1.1000x1000x1.png'
            ],
            [
                'title' => 'Too Sweet',
                'artist' => 'Hozier',
                'album' => 'Unheard',
                'year' => '2024',
                'genre' => 'Alternative/Indie',
                'image' => 'https://i.scdn.co/image/ab67616d0000b2732e8b4358d044b75807e30bf0'
            ]
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
    }
};
