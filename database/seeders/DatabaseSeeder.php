<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Booking;
use App\Models\Gallery;
use App\Models\Payment;
use App\Models\Room;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        Room::create([
            'roomType' => 'King Size',
            'roomImage' => 'http://drive.google.com/uc?export=view&id=14OMkxDClGV6OtzeLPFGIzhEAIZbxgn5m',
            'roomDesc' => 'Experience exceptional comfort in our spacious and elegant King Room. With modern decor, a comfortable king-size bed, and beautiful views',
            'roomPrice' => 5000000,
            'roomQuantity' => 10
        ]);

        Room::create([
            'roomType' => 'Queen Size',
            'roomImage' => 'http://drive.google.com/uc?export=view&id=1H-K_Y1HbFOF8IXawuCqHVDx1oqtIR0vu',
            'roomDesc' => 'Experience exceptional comfort in our spacious and elegant Queen Room. With modern decor, a comfortable queen-size bed, and beautiful views',
            'roomPrice' => 3000000,
            'roomQuantity' => 15
        ]);

        Room::create([
            'roomType' => 'Standard Size',
            'roomImage' => 'http://drive.google.com/uc?export=view&id=1eEG66nA2_jMdoAhVtGltMoEwhqGvg0Xr',
            'roomDesc' => 'Experience exceptional comfort in our spacious and elegant Standard Room. With modern decor, a comfortable standard-size bed, and beautiful views',
            'roomPrice' => 1000000,
            'roomQuantity' => 20
        ]);

        Payment::create([
            'paymentMethod' => 'Master Card'
        ]);

        Payment::create([
            'paymentMethod' => 'Visa Card'
        ]);

        Gallery::create([
            'imageName' => 'Lounge Room',
            'image' => 'http://drive.google.com/uc?export=view&id=1aHq9jRKzRWOMQS5YGCxzLSr83YuQ3RxB'
        ]);
        Gallery::create([
            'imageName' => 'Interior Design',
            'image' => 'http://drive.google.com/uc?export=view&id=1FmoYTOclIkLbLDXq1a0zpS2cyhUVgCHj'
        ]);
        Gallery::create([
            'imageName' => 'Ballroom',
            'image' => 'http://drive.google.com/uc?export=view&id=1Xl6BtQ-70NlMNq4dCzT_h8nmLNazD1E8'
        ]);
        Gallery::create([
            'imageName' => 'Beach Cafe',
            'image' => 'http://drive.google.com/uc?export=view&id=1CcrJhogCw23xcFKu9DAt_XW3lxAGHgK9'
        ]);
        Gallery::create([
            'imageName' => 'Swimming Pool',
            'image' => 'http://drive.google.com/uc?export=view&id=14uz9LJKGGd0SDzn8HifNAMSDjfEmSzYL'
        ]);
        Gallery::create([
            'imageName' => 'Exterior Design',
            'image' => 'http://drive.google.com/uc?export=view&id=1zCL2y8lbS87KVfjNAZBk2D-ZDSoGvRYv'
        ]);
        Gallery::create([
            'imageName' => 'Receptionist',
            'image' => 'http://drive.google.com/uc?export=view&id=1ayqFJHzEZKxFecOBeAw9k6Dm_0dE6C4f'
        ]);
        Gallery::create([
            'imageName' => 'Billiard Lounge',
            'image' => 'http://drive.google.com/uc?export=view&id=14AS1FJoNTBZvMESjmFq5shRsfWuiBVkt'
        ]);
        Gallery::create([
            'imageName' => 'Gym and Fitness Center',
            'image' => 'http://drive.google.com/uc?export=view&id=19pfzMHAYiX4kdzLbvtmkz61ho5cUXyGi'
        ]);
        Gallery::create([
            'imageName' => 'King Size Room',
            'image' => 'http://drive.google.com/uc?export=view&id=1oUKrwR2LnKmcpCH1i8scEbPG83r-i6V1'
        ]);
        Gallery::create([
            'imageName' => 'Queen Size Room',
            'image' => 'http://drive.google.com/uc?export=view&id=1fupNJUuBjw0gUWbXSOflwcbPNoEbf1Wa'
        ]);
        Gallery::create([
            'imageName' => 'Standard Room',
            'image' => 'http://drive.google.com/uc?export=view&id=1cPtrDfUZFEYmyx-OR8QBDULGwOVxYFWm'
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin123',
            'password' => 'admin123'
        ]);
    }
}
