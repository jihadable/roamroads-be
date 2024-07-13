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

        $kendariHotels = [
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

        $jogjaHotels = [
            [
                "name" => "Celestial Treat Hotel",
                "image" => "hotel11",
                "stars" => 3,
                "price" => 1150000,
                "city" => "Yogyakarta",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center"]
            ],
            [
                "name" => "Zenith Plaza Hotel",
                "image" => "hotel12",
                "stars" => 4,
                "price" => 1225000,
                "city" => "Yogyakarta",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Saphire Sands Hotel",
                "image" => "hotel13",
                "stars" => 4,
                "price" => 1320000,
                "city" => "Yogyakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Meeting Facilities"]
            ],
            [
                "name" => "Avalon Haven Hotel",
                "image" => "hotel14",
                "stars" => 3,
                "price" => 1110000,
                "city" => "Yogyakarta",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Meeting Facilities"]
            ],
            [
                "name" => "Syinjuku Hotel",
                "image" => "hotel15",
                "stars" => 3,
                "price" => 1115000,
                "city" => "Yogyakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Fitness Center"]
            ],
            [
                "name" => "Nova Skyline Hotel",
                "image" => "hotel16",
                "stars" => 5,
                "price" => 1505000,
                "city" => "Yogyakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Solstice Hotel",
                "image" => "hotel17",
                "stars" => 3,
                "price" => 1320000,
                "city" => "Yogyakarta",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Enchanted Oasis Hotel",
                "image" => "hotel18",
                "stars" => 3,
                "price" => 1200000,
                "city" => "Yogyakarta",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Meeting Facilities"]
            ],
            [
                "name" => "Vista Vista Hotel",
                "image" => "hotel19",
                "stars" => 4,
                "price" => 1295000,
                "city" => "Yogyakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center"]
            ],
            [
                "name" => "Luxe Mirage Hotel",
                "image" => "hotel20",
                "stars" => 5,
                "price" => 1650000,
                "city" => "Yogyakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ]
        ];

        $bandungHotels = [
            [
                "name" => "Azure Horizon Hotel",
                "image" => "hotel21",
                "stars" => 4,
                "price" => 99,
                "city" => "Bandung",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "The Ritz Hotel",
                "image" => "hotel22",
                "stars" => 4,
                "price" => 105,
                "city" => "Bandung",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Cap EdenRoc Hotel",
                "image" => "hotel23",
                "stars" => 5,
                "price" => 123,
                "city" => "Bandung",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Tranquil Haven Hotel",
                "image" => "hotel24",
                "stars" => 3,
                "price" => 89,
                "city" => "Bandung",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center"]
            ],
            [
                "name" => "Costes Hotel",
                "image" => "hotel25",
                "stars" => 3,
                "price" => 92,
                "city" => "Bandung",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Meeting Facilities"]
            ],
            [
                "name" => "Plaza Athenee Hotel",
                "image" => "hotel26",
                "stars" => 4,
                "price" => 100,
                "city" => "Bandung",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center"]
            ],
            [
                "name" => "Opulent Elegance Hotel",
                "image" => "hotel27",
                "stars" => 5,
                "price" => 124,
                "city" => "Bandung",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Lutetia Hotel",
                "image" => "hotel28",
                "stars" => 3,
                "price" => 88,
                "city" => "Bandung",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Fitness Center"]
            ],
            [
                "name" => "Majestic Cannes Hotel",
                "image" => "hotel29",
                "stars" => 5,
                "price" => 132,
                "city" => "Bandung",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Enigma Resev Hotel",
                "image" => "hotel30",
                "stars" => 4,
                "price" => 104,
                "city" => "Bandung",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Meeting Facilities"]
            ]
        ];

        $jakartaHotels = [
            [
                "name" => "Danieli Hotel",
                "image" => "hotel31",
                "stars" => 4,
                "price" => 100,
                "city" => "Jakarta",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Belmond Splendido Hotel",
                "image" => "hotel32",
                "stars" => 3,
                "price" => 94,
                "city" => "Jakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access"]
            ],
            [
                "name" => "Crystal Haven Hotel",
                "image" => "hotel33",
                "stars" => 5,
                "price" => 114,
                "city" => "Jakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Hassler Hotel",
                "image" => "hotel34",
                "stars" => 3,
                "price" => 92,
                "city" => "Jakarta",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Exquisite Bliss Hotel",
                "image" => "hotel35",
                "stars" => 5,
                "price" => 124,
                "city" => "Jakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Santa Caterina Hotel",
                "image" => "hotel36",
                "stars" => 4,
                "price" => 103,
                "city" => "Jakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center"]
            ],
            [
                "name" => "Castello Casole Hotel",
                "image" => "hotel37",
                "stars" => 3,
                "price" => 91,
                "city" => "Jakarta",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Meeting Facilities"]
            ],
            [
                "name" => "Villa Cora Hotel",
                "image" => "hotel38",
                "stars" => 5,
                "price" => 137,
                "city" => "Jakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Harmonic Echoes Hotel",
                "image" => "hotel39",
                "stars" => 5,
                "price" => 156,
                "city" => "Jakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Florence Lamassa Hotel",
                "image" => "hotel40",
                "stars" => 4,
                "price" => 110,
                "city" => "Jakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Fitness Center", "Meeting Facilities"]
            ]
        ];

        foreach ([...$kendariHotels, ...$jogjaHotels, ...$bandungHotels] as $hotel) {
            $hotel["created_at"] = Carbon::now();
            $hotel["updated_at"] = Carbon::now();
        
            Hotel::create($hotel);
        }

        $domesticFlights = [
            [
                "type" => "Domestic",
                "airline" => "Quantum Air",
                "seat" => "Economy",
                "price" => 1345000,
                "departure_city" => "Jakarta",
                "arrival_city" => "Kendari",
                "departure_time" => "04:00",
                "arrival_time" => "09:00",
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
                "price" => 2675000,
                "departure_city" => "Jakarta",
                "arrival_city" => "Yogyakarta",
                "departure_time" => "12:00",
                "arrival_time" => "13:00",
                "transit_number" => 0,
                "facilities" => ["Baggage", "In-flight meal", "Wifi", "Power/USB Port"]
            ],
            [
                "type" => "Domestic",
                "airline" => "Nebula Airways",
                "seat" => "Economy",
                "price" => 1254000,
                "departure_city" => "Jakarta",
                "arrival_city" => "Bandung",
                "departure_time" => "11:00",
                "arrival_time" => "12:00",
                "transit_number" => 0,
                "facilities" => ["Baggage", "Wifi"]
            ],
            [
                "type" => "Domestic",
                "airline" => "Quantum Air",
                "seat" => "Economy",
                "price" => 1095000,
                "departure_city" => "Jakarta",
                "arrival_city" => "Bali",
                "departure_time" => "14:00",
                "arrival_time" => "16:00",
                "transit_number" => 0,
                "facilities" => ["Baggage", "Power/USB Port"]
            ],
            [
                "type" => "Domestic",
                "airline" => "Stellar Airlines",
                "seat" => "Economy",
                "price" => 1285000,
                "departure_city" => "Yogyakarta",
                "arrival_city" => "Makassar",
                "departure_time" => "13:00",
                "arrival_time" => "15:00",
                "transit_number" => 0,
                "facilities" => ["Baggage", "In-flight meal"]
            ],
            [
                "type" => "Domestic",
                "airline" => "SkyWing",
                "seat" => "Business",
                "price" => 2265000,
                "departure_city" => "Palembang",
                "arrival_city" => "Bandung",
                "departure_time" => "09:00",
                "arrival_time" => "11:00",
                "transit_number" => 0,
                "facilities" => ["Baggage", "In-flight meal", "Wifi", "Power/USB Port"]
            ],
            [
                "type" => "Domestic",
                "airline" => "SkyWing",
                "seat" => "Business",
                "price" => 2054000,
                "departure_city" => "Jakarta",
                "arrival_city" => "Surabaya",
                "departure_time" => "19:00",
                "arrival_time" => "20:00",
                "transit_number" => 0,
                "facilities" => ["Baggage", "In-flight meal", "Wifi", "Power/USB Port"]
            ],
            [
                "type" => "Domestic",
                "airline" => "Thunderbird",
                "seat" => "Economy",
                "price" => 1065000,
                "departure_city" => "Surabaya",
                "arrival_city" => "Malang",
                "departure_time" => "21:00",
                "arrival_time" => "22:00",
                "transit_number" => 0,
                "facilities" => ["Baggage", "Wifi"]
            ],
            [
                "type" => "Domestic",
                "airline" => "Quantum Air",
                "departure_city" => "Jakarta",
                "arrival_city" => "Lombok",
                "seat" => "Economy",
                "price" => 965000,
                "departure_time" => "05:00",
                "arrival_time" => "11:00",
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
                "price" => 2675000,
                "departure_city" => "Denpasar",
                "arrival_city" => "Yogyakarta",
                "departure_time" => "07:00",
                "arrival_time" => "12:00",
                "transit_number" => 0,
                "facilities" => ["Baggage", "In-flight meal", "Wifi", "Power/USB Port"]
            ]
        ];

        $internationalFlight = [
            [
                "type" => "International",
                "airline" => "SkyWing",
                "seat" => "Business",
                "price" => 5565000,
                "departure_city" => "Jakarta",
                "arrival_city" => "Amsterdam",
                "departure_time" => "04:00",
                "arrival_time" => "22:00",
                "transit_number" => 1,
                "transit_city" => "Bangkok",
                "transit_arrival_time" => "08:00",
                "transit_departure_time" => "11:00",
                "facilities" => ["Baggage", "In-flight meal", "Wifi", "Power/USB Port"]
            ],
            [
                "type" => "International",
                "airline" => "Nebula Airways",
                "seat" => "Business",
                "price" => 5765000,
                "departure_city" => "Jakarta",
                "arrival_city" => "Tokyo",
                "departure_time" => "08:00",
                "arrival_time" => "16:00",
                "transit_number" => 1,
                "transit_city" => "Kuala Lumpur",
                "transit_arrival_time" => "10:00",
                "transit_departure_time" => "13:00",
                "facilities" => ["Baggage", "In-flight meal", "Wifi", "Power/USB Port"]
            ],
            [
                "type" => "International",
                "airline" => "Stellar Airlines",
                "seat" => "Economy",
                "price" => 3345000,
                "departure_city" => "Jakarta",
                "arrival_city" => "Seoul",
                "departure_time" => "12:00",
                "arrival_time" => "23:00",
                "transit_number" => 1,
                "transit_city" => "Kuala Lumpur",
                "transit_arrival_time" => "14:00",
                "transit_departure_time" => "20:00",
                "facilities" => ["Baggage", "Wifi", "Power/USB Port"]
            ],
            [
                "type" => "International",
                "airline" => "Stellar Airlines",
                "seat" => "Economy",
                "price" => 3245000,
                "departure_city" => "Denpasar",
                "arrival_city" => "Singapore",
                "departure_time" => "09:00",
                "arrival_time" => "11:00",
                "transit_number" => 0,
                "facilities" => ["Baggage", "In-flight meal", "Power/USB Port"]
            ],
            [
                "type" => "International",
                "airline" => "Elysian Airways",
                "seat" => "Business",
                "price" => 5124000,
                "departure_city" => "Jakarta",
                "arrival_city" => "Kuala Lumpur",
                "departure_time" => "19:00",
                "arrival_time" => "21:00",
                "transit_number" => 0,
                "facilities" => ["Baggage", "In-flight meal", "Wifi", "Power/USB Port"]
            ],
            [
                "type" => "International",
                "airline" => "Nebula Airways",
                "seat" => "Economy",
                "price" => 3421000,
                "departure_city" => "Jakarta",
                "arrival_city" => "Osaka",
                "departure_time" => "19:00",
                "arrival_time" => "01:00",
                "transit_number" => 1,
                "transit_city" => "Singapore",
                "transit_arrival_time" => "20:00",
                "transit_departure_time" => "23:00",
                "facilities" => ["Baggage", "In-flight meal", "Wifi"]
            ],
            [
                "type" => "International",
                "airline" => "SkyWing",
                "seat" => "Economy",
                "price" => 3114000,
                "departure_city" => "Yogyakarta",
                "arrival_city" => "Singapore",
                "departure_time" => "04:00",
                "arrival_time" => "06:00",
                "transit_number" => 0,
                "facilities" => ["Baggage", "Wifi", "Power/USB Port"]
            ],
            [
                "type" => "International",
                "airline" => "Thunderbird",
                "seat" => "Economy",
                "price" => 3098000,
                "departure_city" => "Jakarta",
                "arrival_city" => "Shanghai",
                "departure_time" => "04:00",
                "arrival_time" => "16:00",
                "transit_number" => 1,
                "transit_city" => "Guangzhou",
                "transit_arrival_time" => "08:00",
                "transit_departure_time" => "15:00",
                "facilities" => ["Baggage", "In-flight meal", "Power/USB Port"]
            ],
            [
                "type" => "International",
                "airline" => "Elysian Airways",
                "seat" => "Business",
                "price" => 5876000,
                "departure_city" => "Jakarta",
                "arrival_city" => "Melbourne",
                "departure_time" => "19:00",
                "arrival_time" => "03:00",
                "transit_number" => 1,
                "transit_city" => "Denpasar",
                "transit_arrival_time" => "20:00",
                "transit_departure_time" => "00:00",
                "facilities" => ["Baggage", "In-flight meal", "Wifi", "Power/USB Port"]
            ],
            [
                "type" => "International",
                "airline" => "Thunderbird",
                "seat" => "Economy",
                "price" => 3212000,
                "departure_city" => "Jakarta",
                "arrival_city" => "Sydney",
                "departure_time" => "15:00",
                "arrival_time" => "23:00",
                "transit_number" => 1,
                "transit_city" => "Kuala Lumpur",
                "transit_arrival_time" => "17:00",
                "transit_departure_time" => "20:00",
                "facilities" => ["Baggage", "In-flight meal", "Wifi"]
            ]
        ];

        foreach ([...$domesticFlights, ...$internationalFlight] as $flight) {
            $flight["created_at"] = Carbon::now();
            $flight["updated_at"] = Carbon::now();
        
            Flight::create($flight);
        }
    }
}
