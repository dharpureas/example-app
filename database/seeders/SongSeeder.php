<?php

namespace Database\Seeders;
use App\Models\Song;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SongSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        // Seed a few songs
        Song::create([
            'artist' => 'Eminem',
	    'title' => 'Stan',
	    'updated_at' => now(),
	    'created_at' => now(),
	]);
	Song::create([
            'artist' => 'A P Dhillon',
	    'title' => 'With You',
	    'updated_at' => now(),
	    'created_at' => now(),
	]);
    }
    }
