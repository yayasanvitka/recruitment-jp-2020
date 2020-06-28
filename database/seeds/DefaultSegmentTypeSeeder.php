<?php

use Illuminate\Database\Seeder;

class DefaultSegmentTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Type::updateOrCreate([
            "code" => "CMN"
        ], [
            "segment_id" => 4,
            "code" => "CMN",
            "name" => "Counter Minuman",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "KOP"
        ], [
            "segment_id" => 4,
            "code" => "KOP",
            "name" => "Koperasi & Institusi",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "TKO"
        ], [
            "segment_id" => 4,
            "code" => "TKO",
            "name" => "Toko Obat",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "TKK"
        ], [
            "segment_id" => 4,
            "code" => "TKK",
            "name" => "Toko Klontong",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "WRG"
        ], [
            "segment_id" => 4,
            "code" => "WRG",
            "name" => "Warung / Kaki Lima",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "SOS"
        ], [
            "segment_id" => 4,
            "code" => "SOS",
            "name" => "Star Outlet >1.000",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "WSL"
        ], [
            "segment_id" => 4,
            "code" => "WSL",
            "name" => "WS Besar > 200 Sd 1.000",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "WSM"
        ], [
            "segment_id" => 4,
            "code" => "WSM",
            "name" => "Ws Sedang >100 Sd 200",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "WSS"
        ], [
            "segment_id" => 4,
            "code" => "WSS",
            "name" => "Ws Kecil  >50 Sd 100",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "OFC"
        ], [
            "segment_id" => 4,
            "code" => "OFC",
            "name" => "Kantor (Penjualan Langsung)",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "BRD"
        ], [
            "segment_id" => 3,
            "code" => "BRD",
            "name" => "Bardut (Cafe & Karaoke)",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "HO2"
        ], [
            "segment_id" => 3,
            "code" => "HO2",
            "name" => "Hotel  *3 Ke Bawah",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "KKP"
        ], [
            "segment_id" => 3,
            "code" => "KKP",
            "name" => "Kedai Kopi",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "KTN"
        ], [
            "segment_id" => 3,
            "code" => "KTN",
            "name" => "Kantin",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "RLD"
        ], [
            "segment_id" => 3,
            "code" => "RLD",
            "name" => "Red Light",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "RMU"
        ], [
            "segment_id" => 3,
            "code" => "RMU",
            "name" => "Rumah Makan Umum",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "T&B"
        ], [
            "segment_id" => 3,
            "code" => "T&B",
            "name" => "Tayuban & Banjar",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "GAS"
        ], [
            "segment_id" => 3,
            "code" => "GAS",
            "name" => "Game Station",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "DFS"
        ], [
            "segment_id" => 2,
            "code" => "DFS",
            "name" => "Duty Free Shop",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "FM1"
        ], [
            "segment_id" => 2,
            "code" => "FM1",
            "name" => "Fruit Market Chain",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "FM2"
        ], [
            "segment_id" => 2,
            "code" => "FM2",
            "name" => "Fruit Market Non Chain",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "HYM"
        ], [
            "segment_id" => 2,
            "code" => "HYM",
            "name" => "Hypermarket Chain",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "MM1"
        ], [
            "segment_id" => 2,
            "code" => "MM1",
            "name" => "Mini Market National",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "MM2"
        ], [
            "segment_id" => 2,
            "code" => "MM2",
            "name" => "Mini Market Local Chain",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "MM3"
        ], [
            "segment_id" => 2,
            "code" => "MM3",
            "name" => "Mini Market Local",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "SM1"
        ], [
            "segment_id" => 2,
            "code" => "SM1",
            "name" => "Supermarket National",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "SM2"
        ], [
            "segment_id" => 2,
            "code" => "SM2",
            "name" => "Supermarket Local Chain",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "SM3"
        ], [
            "segment_id" => 2,
            "code" => "SM3",
            "name" => "Supermarket Local",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "BIL"
        ], [
            "segment_id" => 1,
            "code" => "BIL",
            "name" => "Billiard",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "FC1"
        ], [
            "segment_id" => 1,
            "code" => "FC1",
            "name" => "Food Court (Umum)",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "FC2"
        ], [
            "segment_id" => 1,
            "code" => "FC2",
            "name" => "Food Court (Mall)",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "FET"
        ], [
            "segment_id" => 1,
            "code" => "FET",
            "name" => "Full Entertainment",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "GOF"
        ], [
            "segment_id" => 1,
            "code" => "GOF",
            "name" => "Golf",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "HO1"
        ], [
            "segment_id" => 1,
            "code" => "HO1",
            "name" => "Hotel *3 Ke Atas",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "FK1"
        ], [
            "segment_id" => 1,
            "code" => "FK1",
            "name" => "Family Karaoke Chain",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "FK2"
        ], [
            "segment_id" => 1,
            "code" => "FK2",
            "name" => "Family Karaoke Local",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "KRK"
        ], [
            "segment_id" => 1,
            "code" => "KRK",
            "name" => "Karaoke Umum",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "P&B"
        ], [
            "segment_id" => 1,
            "code" => "P&B",
            "name" => "Pub, Bar & Cafe",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "RAS"
        ], [
            "segment_id" => 1,
            "code" => "RAS",
            "name" => "Restaurant Asia",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "RSF"
        ], [
            "segment_id" => 1,
            "code" => "RSF",
            "name" => "Restaurant Seafood",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "RIF"
        ], [
            "segment_id" => 1,
            "code" => "RIF",
            "name" => "Restaurant Indonesia",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "RWN"
        ], [
            "segment_id" => 1,
            "code" => "RWN",
            "name" => "Restaurant Western",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "SPA"
        ], [
            "segment_id" => 1,
            "code" => "SPA",
            "name" => "Spa Modern",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "SPO"
        ], [
            "segment_id" => 1,
            "code" => "SPO",
            "name" => "Sport Center",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "SPC"
        ], [
            "segment_id" => 1,
            "code" => "SPC",
            "name" => "Special Channel",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "SUB"
        ], [
            "segment_id" => 2,
            "code" => "SUB",
            "name" => "Sub Distributor",
        ]);

        \App\Models\Type::updateOrCreate([
            "code" => "RST"
        ], [
            "segment_id" => 1,
            "code" => "RST",
            "name" => "Restaurant - Other",
        ]);

    }
}
