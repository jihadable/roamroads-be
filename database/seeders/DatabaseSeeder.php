<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Flight;
use App\Models\Hotel;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use function PHPSTORM_META\map;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void {
        User::create([
            "name" => "Umar Jihad",
            "email" => "umarjihad@gmail.com",
            "phone" => "082352395596",
            "password" => Hash::make("abcddcba")
        ]);

        $hotels = [
            [
                "name" => "Aurora Sky Hotel",
                "image" => "hotel1",
                "stars" => 4,
                "price" => 1155000,
                "city" => "Kendari",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "The Velvet Hotel",
                "image" => "hotel2",
                "stars" => 3,
                "price" => 865000,
                "city" => "Kendari",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Luminary Hotel",
                "image" => "hotel3",
                "stars" => 4,
                "price" => 1170000,
                "city" => "Kendari",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Serenity Hotel",
                "image" => "hotel4",
                "stars" => 5,
                "price" => 1335000,
                "city" => "Kendari",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Eclipse Grand Hotel",
                "image" => "hotel5",
                "stars" => 5,
                "price" => 1465000,
                "city" => "Kendari",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Zenith Hotel",
                "image" => "hotel6",
                "stars" => 4,
                "price" => 1200000,
                "city" => "Kendari",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Meeting Facilities"]
            ],
            [
                "name" => "Mystique Mano Hotel",
                "image" => "hotel7",
                "stars" => 4,
                "price" => 1200000,
                "city" => "Kendari",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center"]
            ],
            [
                "name" => "The Oberoi Hotel",
                "image" => "hotel8",
                "stars" => 3,
                "price" => 1110000,
                "city" => "Kendari",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Meeting Facilities"]
            ],
            [
                "name" => "Ayana Hotel",
                "image" => "hotel9",
                "stars" => 4,
                "price" => 1200000,
                "city" => "Kendari",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Alila Uluwatu Hotel",
                "image" => "hotel10",
                "stars" => 3,
                "price" => 895000,
                "city" => "Kendari",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access"]
            ]
        ];

        foreach ($hotels as $hotel) {
            $hotel["created_at"] = Carbon::now();
            $hotel["updated_at"] = Carbon::now();
        
            Hotel::create($hotel);
        }

        $flights = [
            [
                "type" => "Domestic",
                "airline" => "Quantum Air",
                "seat" => "Economy",
                "price" => "1.345.000",
                "departure_city" => "Jakarta",
                "arrival_city" => "Kendari",
                "departure" => 4,
                "arrival" => 9,
                "transit_number" => 1,
                "transit_arrival_time" => "06:00",
                "transit_departure_time" => "08:00",
                "transit_city" => "Makassar",
                "facilities" => ["Baggage", "In-flight meal"]
            ],
            [
                "type" => "Domestic",
                "airline" => "Nebula Airways",
                "seat" => "Business",
                "price" => "2.675.000",
                "departure_city" => "Jakarta",
                "arrival_city" => "Yogyakarta",
                "departure" => 12,
                "arrival" => 13,
                "transit_number" => 0,
                "facilities" => ["Baggage", "In-flight meal", "Wifi", "Power/USB Port"]
            ],
            [
                "type" => "Domestic",
                "airline" => "Nebula Airways",
                "seat" => "Economy",
                "price" => "1.254.000",
                "departure_city" => "Jakarta",
                "arrival_city" => "Bandung",
                "departure" => 11,
                "arrival" => 12,
                "transit_number" => 0,
                "facilities" => ["Baggage", "Wifi"]
            ],
            [
                "type" => "Domestic",
                "airline" => "Quantum Air",
                "seat" => "Economy",
                "price" => "1.095.000",
                "departure_city" => "Jakarta",
                "arrival_city" => "Bali",
                "departure" => 14,
                "arrival" => 16,
                "transit_number" => 0,
                "facilities" => ["Baggage", "Power/USB Port"]
            ],
            [
                "type" => "Domestic",
                "airline" => "Stellar Airlines",
                "seat" => "Economy",
                "price" => "1.285.000",
                "departure_city" => "Yogyakarta",
                "arrival_city" => "Makassar",
                "departure" => 13,
                "arrival" => 15,
                "transit_number" => 0,
                "facilities" => ["Baggage", "In-flight meal"]
            ],
            [
                "type" => "Domestic",
                "airline" => "SkyWing",
                "seat" => "Business",
                "price" => "2.265.000",
                "departure_city" => "Palembang",
                "arrival_city" => "Bandung",
                "departure" => 9,
                "arrival" => 11,
                "transit_number" => 0,
                "facilities" => ["Baggage", "In-flight meal", "Wifi", "Power/USB Port"]
            ],
            [
                "type" => "Domestic",
                "airline" => "SkyWing",
                "seat" => "Business",
                "price" => "2.054.000",
                "departure_city" => "Jakarta",
                "arrival_city" => "Surabaya",
                "departure" => 19,
                "arrival" => 20,
                "transit_number" => 0,
                "facilities" => ["Baggage", "In-flight meal", "Wifi", "Power/USB Port"]
            ],
            [
                "type" => "Domestic",
                "airline" => "Thunderbird",
                "seat" => "Economy",
                "price" => "1.065.000",
                "departure_city" => "Surabaya",
                "arrival_city" => "Malang",
                "departure" => 21,
                "arrival" => 22,
                "transit_number" => 0,
                "facilities" => ["Baggage", "Wifi"]
            ],
            [
                "type" => "Domestic",
                "airline" => "Quantum Air",
                "departure_city" => "Jakarta",
                "arrival_city" => "Lombok",
                "seat" => "Economy",
                "price" => "965.000",
                "departure" => 5,
                "arrival" => 11,
                "transit_number" => 1,
                "transit_arrival_time" => "07:00",
                "transit_departure_time" => "10:00",
                "transit_city" => "Makassar",
                "facilities" => ["Baggage", "Power/USB Port"]
            ],
            [
                "type" => "Domestic",
                "airline" => "SkyWing",
                "seat" => "Business",
                "price" => "2.675.000",
                "departure_city" => "Denpasar",
                "arrival_city" => "Yogyakarta",
                "departure" => 7,
                "arrival" => 12,
                "transit_number" => 0,
                "facilities" => ["Baggage", "In-flight meal", "Wifi", "Power/USB Port"]
            ]
        ];

        $internationalFlight = [
            [
                "route" => ["Jakarta", "Amsterdam"],
                "airline" => "SkyWing",
                "transit_number" => 1,
                "transit_city" => ["Bangkok"],
                "transit_time" => [8, 11],
                "departure" => 4,
                "arrival" => 22,
                "seat" => "Business",
                "price" => "5.565.000",
                "facilities" => ["Baggage", "In-flight meal", "Wifi", "Power/USB Port"]
            ],
            [
                "route" => ["Jakarta", "Tokyo"],
                "airline" => "Nebula Airways",
                "transit_number" => 1,
                "transit_city" => ["Kuala Lumpur"],
                "transit_time" => [10, 13],
                "departure" => 8,
                "arrival" => 16,
                "seat" => "Business",
                "price" => "5.765.000",
                "facilities" => ["Baggage", "In-flight meal", "Wifi", "Power/USB Port"]
            ],
            [
                "route" => ["Jakarta", "Seoul"],
                "airline" => "Stellar Airlines",
                "transit_number" => 1,
                "transit_city" => ["Kuala Lumpur"],
                "transit_time" => [14, 20],
                "departure" => 12,
                "arrival" => 23,
                "seat" => "Economy",
                "price" => "3.345.000",
                "facilities" => ["Baggage", "Wifi", "Power/USB Port"]
            ],
            [
                "route" => ["Denpasar", "Singapore"],
                "airline" => "Stellar Airlines",
                "departure" => 9,
                "arrival" => 11,
                "seat" => "Economy",
                "price" => "3.245.000",
                "facilities" => ["Baggage", "In-flight meal", "Power/USB Port"]
            ],
            [
                "route" => ["Jakarta", "Kuala Lumpur"],
                "airline" => "Elysian Airways",
                "departure" => 19,
                "arrival" => 21,
                "seat" => "Business",
                "price" => "5.124.000",
                "facilities" => ["Baggage", "In-flight meal", "Wifi", "Power/USB Port"]
            ],
            [
                "route" => ["Jakarta", "Osaka"],
                "airline" => "Nebula Airways",
                "transit_number" => 1,
                "transit_city" => ["Singapore"],
                "transit_time" => [20, 23],
                "departure" => 19,
                "arrival" => 1,
                "seat" => "Economy",
                "price" => "3.421.000",
                "facilities" => ["Baggage", "In-flight meal", "Wifi"]
            ],
            [
                "route" => ["Yogyakarta", "Singapore"],
                "airline" => "SkyWing",
                "departure" => 4,
                "arrival" => 6,
                "seat" => "Economy",
                "price" => "3.114.000",
                "facilities" => ["Baggage", "Wifi", "Power/USB Port"]
            ],
            [
                "route" => ["Jakarta", "Shanghai"],
                "airline" => "Thunderbird",
                "transit_number" => 1,
                "transit_city" => ["Guangzhou"],
                "transit_time" => [8, 15],
                "departure" => 4,
                "arrival" => 16,
                "seat" => "Economy",
                "price" => "3.098.000",
                "facilities" => ["Baggage", "In-flight meal", "Power/USB Port"]
            ],
            [
                "route" => ["Jakarta", "Melbourne"],
                "airline" => "Elysian Airways",
                "transit_number" => 1,
                "transit_city" => ["Denpasar"],
                "transit_time" => [20, 0],
                "departure" => 19,
                "arrival" => 3,
                "seat" => "Business",
                "price" => "5.876.000",
                "facilities" => ["Baggage", "In-flight meal", "Wifi", "Power/USB Port"]
            ],
            [
                "route" => ["Jakarta", "Sydney"],
                "airline" => "Thunderbird",
                "transit_number" => 1,
                "transit_city" => ["Kuala Lumpur"],
                "transit_time" => [15, 20],
                "departure" => 15,
                "arrival" => 23,
                "seat" => "Economy",
                "price" => "3.212.000",
                "facilities" => ["Baggage", "In-flight meal", "Wifi"]
            ]
        ];

        foreach ($flights as $flight) {
            $flight["created_at"] = Carbon::now();
            $flight["updated_at"] = Carbon::now();
        
            Flight::create($flight);
        }
    }
}
