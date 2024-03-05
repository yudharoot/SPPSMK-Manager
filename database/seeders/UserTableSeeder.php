<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // ketua
        $ketua = factory(User::class)->create([

            'name'     => 'Tata Usaha',
            'email'    => 'tatausaha@smpassalam.com',
            'email_verified_at' => now(),
            'password' => bcrypt('smpassalam'),
        ]);

        $ketua->assignRole('TU');

        $this->command->info('>_ Here is your tata usaha details to login:');
        $this->command->warn($ketua->email);
        $this->command->warn('Password is "smpassalam"');

        // bersihkan cache
        $this->command->call('cache:clear');
    }
}