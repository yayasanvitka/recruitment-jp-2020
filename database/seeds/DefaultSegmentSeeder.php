<?php

use Illuminate\Database\Seeder;

class DefaultSegmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Segment::updateOrCreate([
            "code" => "MN",
        ], [
            "code" => "MN",
            "name" => "Modern On",
        ]);
        \App\Models\Segment::updateOrCreate([
            "code" => "MF",
        ], [
            "code" => "MF",
            "name" => "Modern Off",
        ]);
        \App\Models\Segment::updateOrCreate([
            "code" => "GN",
        ], [
            "code" => "GN",
            "name" => "General On",
        ]);
        \App\Models\Segment::updateOrCreate([
            "code" => "GF",
        ], [
            "code" => "GF",
            "name" => "General Off",
        ]);
    }
}
