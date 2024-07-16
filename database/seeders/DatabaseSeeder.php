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
                "name" => "Aurora Sky",
                "image" => "aurora-sky.jpg",
                "stars" => 4,
                "price" => 1155000,
                "city" => "Kendari",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "The Velvet",
                "image" => "the-velvet.jpg",
                "stars" => 3,
                "price" => 865000,
                "city" => "Kendari",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Luminary",
                "image" => "luminary.jpg",
                "stars" => 4,
                "price" => 1170000,
                "city" => "Kendari",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Serenity",
                "image" => "serenity.jpg",
                "stars" => 5,
                "price" => 1335000,
                "city" => "Kendari",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Eclipse Grand",
                "image" => "eclipse-grand.jpg",
                "stars" => 5,
                "price" => 1465000,
                "city" => "Kendari",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Zenith",
                "image" => "zenith.jpg",
                "stars" => 4,
                "price" => 1200000,
                "city" => "Kendari",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Meeting Facilities"]
            ],
            [
                "name" => "Mystique Mano",
                "image" => "mystique-mano.jpg",
                "stars" => 4,
                "price" => 1200000,
                "city" => "Kendari",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center"]
            ],
            [
                "name" => "The Oberoi",
                "image" => "the-oberoi.jpg",
                "stars" => 3,
                "price" => 1110000,
                "city" => "Kendari",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Meeting Facilities"]
            ],
            [
                "name" => "Ayana",
                "image" => "ayana.jpg",
                "stars" => 4,
                "price" => 1200000,
                "city" => "Kendari",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Alila Uluwatu",
                "image" => "alila-uluwatu.jpg",
                "stars" => 3,
                "price" => 895000,
                "city" => "Kendari",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access"]
            ]
        ];

        $jogjaHotels = [
            [
                "name" => "Celestial Treat",
                "image" => "celestial-treat.jpg",
                "stars" => 3,
                "price" => 1150000,
                "city" => "Yogyakarta",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center"]
            ],
            [
                "name" => "Zenith Plaza",
                "image" => "zenith-plaza.jpg",
                "stars" => 4,
                "price" => 1225000,
                "city" => "Yogyakarta",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Saphire Sands",
                "image" => "saphire-sands.jpg",
                "stars" => 4,
                "price" => 1320000,
                "city" => "Yogyakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Meeting Facilities"]
            ],
            [
                "name" => "Avalon Haven",
                "image" => "avalon-haven.jpg",
                "stars" => 3,
                "price" => 1110000,
                "city" => "Yogyakarta",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Meeting Facilities"]
            ],
            [
                "name" => "Syinjuku",
                "image" => "syinjuku.jpg",
                "stars" => 3,
                "price" => 1115000,
                "city" => "Yogyakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Fitness Center"]
            ],
            [
                "name" => "Nova Skyline",
                "image" => "nova-skyline.jpg",
                "stars" => 5,
                "price" => 1505000,
                "city" => "Yogyakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Solstice",
                "image" => "solstice.jpg",
                "stars" => 3,
                "price" => 1320000,
                "city" => "Yogyakarta",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Enchanted Oasis",
                "image" => "enchanted-oasis.jpg",
                "stars" => 3,
                "price" => 1200000,
                "city" => "Yogyakarta",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Meeting Facilities"]
            ],
            [
                "name" => "Vista Vista",
                "image" => "vista-vista.jpg",
                "stars" => 4,
                "price" => 1295000,
                "city" => "Yogyakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center"]
            ],
            [
                "name" => "Luxe Mirage",
                "image" => "luxe-mirage.jpg",
                "stars" => 5,
                "price" => 1650000,
                "city" => "Yogyakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ]
        ];

        $bandungHotels = [
            [
                "name" => "Azure Horizon",
                "image" => "azure-horizon.jpg",
                "stars" => 4,
                "price" => 1485000,
                "city" => "Bandung",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "The Ritz",
                "image" => "the-ritz.jpg",
                "stars" => 4,
                "price" => 1660000,
                "city" => "Bandung",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Cap Edenroc",
                "image" => "cap-edenroc.jpg",
                "stars" => 5,
                "price" => 1985000,
                "city" => "Bandung",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Tranquil Haven",
                "image" => "tranquil-haven.jpg",
                "stars" => 3,
                "price" => 1345000,
                "city" => "Bandung",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center"]
            ],
            [
                "name" => "Costes",
                "image" => "costes.jpg",
                "stars" => 3,
                "price" => 1345000,
                "city" => "Bandung",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Meeting Facilities"]
            ],
            [
                "name" => "Plaza Athenee",
                "image" => "plaza-athenee.jpg",
                "stars" => 4,
                "price" => 1555000,
                "city" => "Bandung",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center"]
            ],
            [
                "name" => "Opulent Elegance",
                "image" => "opulent-elegance.jpg",
                "stars" => 5,
                "price" => 2125000,
                "city" => "Bandung",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Lutetia",
                "image" => "lutetia.jpg",
                "stars" => 3,
                "price" => 1454000,
                "city" => "Bandung",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Fitness Center"]
            ],
            [
                "name" => "Majestic Cannes",
                "image" => "majestic-cannes.jpg",
                "stars" => 5,
                "price" => 2521000,
                "city" => "Bandung",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Enigma Resev",
                "image" => "enigma-resev.jpg",
                "stars" => 4,
                "price" => 1867000,
                "city" => "Bandung",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Meeting Facilities"]
            ]
        ];

        $jakartaHotels = [
            [
                "name" => "Danieli",
                "image" => "danieli.jpg",
                "stars" => 4,
                "price" => 1777000,
                "city" => "Jakarta",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Belmond Splendido",
                "image" => "belmond-splendido.jpg",
                "stars" => 3,
                "price" => 1667000,
                "city" => "Jakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access"]
            ],
            [
                "name" => "Crystal Haven",
                "image" => "crystal-haven.jpg",
                "stars" => 5,
                "price" => 1998000,
                "city" => "Jakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Hassler",
                "image" => "hassler.jpg",
                "stars" => 3,
                "price" => 1822000,
                "city" => "Jakarta",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Exquisite Bliss",
                "image" => "exquisite-bliss.jpg",
                "stars" => 5,
                "price" => 2115000,
                "city" => "Jakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Santa Caterina",
                "image" => "santa-caterina.jpg",
                "stars" => 4,
                "price" => 1743000,
                "city" => "Jakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center"]
            ],
            [
                "name" => "Castello Casole",
                "image" => "castello-casole.jpg",
                "stars" => 3,
                "price" => 1711000,
                "city" => "Jakarta",
                "facilities" => ["Wifi", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Meeting Facilities"]
            ],
            [
                "name" => "Villa Cora",
                "image" => "villa-cora.jpg",
                "stars" => 5,
                "price" => 2456000,
                "city" => "Jakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Harmonic Echoes",
                "image" => "harmonic-echoes.jpg",
                "stars" => 5,
                "price" => 2769000,
                "city" => "Jakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Wheelchair Access", "Fitness Center", "Meeting Facilities"]
            ],
            [
                "name" => "Florence Lamassa",
                "image" => "florence-lamassa.jpg",
                "stars" => 4,
                "price" => 1672000,
                "city" => "Jakarta",
                "facilities" => ["Wifi", "Swimming Pool", "Parking", "Restaurant", "Elevator", "Fitness Center", "Meeting Facilities"]
            ]
        ];

        foreach ([...$kendariHotels, ...$jogjaHotels, ...$bandungHotels, ...$jakartaHotels] as $hotel) {
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
            Flight::create($flight);
        }
    }
}
