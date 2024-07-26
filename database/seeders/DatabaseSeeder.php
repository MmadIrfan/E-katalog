<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Contact;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'password' => 'test12345',
        ]);
        
        Contact::create([
            'alamat' => 'Jl. Raya Tegalwangi Km. 10, Weru, Cirebon, Jawa Barat 45154',
            'email' => 'info@aestheticrattan.com',
            'hp' => '+62 823-1967-7113',
            'gmaps' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2633.576875563623!2d108.48731666538586!3d-6.701087938425434!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6ee1bae5e68a99%3A0xc70b86b2bfe9548!2sJl.%20Raya%20Tegalwangi%20No.Km.%2010%2C%20Tegalwangi%2C%20Kec.%20Weru%2C%20Kabupaten%20Cirebon%2C%20Jawa%20Barat%2045154!5e1!3m2!1sid!2sid!4v1721040594392!5m2!1sid!2sid',
        ]);
    }
}
