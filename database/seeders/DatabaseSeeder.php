<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Création des différents profils
        User::create([
            'name' => 'Admin',
            'email' => 'admin@cytech.fr',
            'password' => bcrypt('admin123'),
            'role' => 'admin'
        ]);

        User::create([
            'name' => 'Étudiant',
            'email' => 'etudiant@cytech.fr',
            'password' => bcrypt('etudiant123'),
            'role' => 'etudiant'
        ]);

        User::create([
            'name' => 'Étudiant Association',
            'email' => 'asso@cytech.fr',
            'password' => bcrypt('asso123'),
            'role' => 'etudiant_asso'
        ]);

        User::create([
            'name' => 'Étudiant Handicapé',
            'email' => 'handicape@cytech.fr',
            'password' => bcrypt('handicape123'),
            'role' => 'etudiant_handicape'
        ]);

        User::create([
            'name' => 'Professeur',
            'email' => 'prof@cytech.fr',
            'password' => bcrypt('prof123'),
            'role' => 'professeur'
        ]);

        User::create([
            'name' => 'Sécurité',
            'email' => 'securite@cytech.fr',
            'password' => bcrypt('securite123'),
            'role' => 'securite'
        ]);

        User::create([
            'name' => 'Administration',
            'email' => 'administration@cytech.fr',
            'password' => bcrypt('admin123'),
            'role' => 'administration'
        ]);

        $this->call([
            RoomOccupancySeeder::class,
            ConnectedObjectsSeeder::class,
            CourseSeeder::class,
            ParkingSeeder::class,
            BikeParkingSeeder::class,
        ]);
    }
}
