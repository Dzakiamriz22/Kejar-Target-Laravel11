<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Beasiswa;
use Illuminate\Database\Seeder;

class UserAndBeasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // 1. Buat 100 user
        $users = User::factory()->count(100)->create();

        // 2. Pilih secara acak satu ID user untuk dijadikan admin beasiswa
        $adminIds = $users->random(5)->pluck('id');

        // 3. Buat 5 beasiswa dengan admin yang dipilih
        foreach ($adminIds as $adminId) {
            Beasiswa::factory()->create([
                'admin_id' => $adminId,
            ]);
        }
    }
}
