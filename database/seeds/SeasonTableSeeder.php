<?php

use Illuminate\Database\Seeder;
use App\Season;
use Carbon\Carbon;

class SeasonTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now()->toDateTimeString();
        
        $seasons = [
            ['id' => 1, 'name' => 'Winter', 'description' => 'Winter season', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 2, 'name' => 'Summer', 'description' => 'Summer season', 'created_at' => $now, 'updated_at' => $now],
            ['id' => 3, 'name' => 'Rain', 'description' => 'Rainny season', 'created_at' => $now, 'updated_at' => $now],
        ];

        Season::insert($seasons);
    }
}
