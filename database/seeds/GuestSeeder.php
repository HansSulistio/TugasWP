<?php

use Illuminate\Database\Seeder;
use App\Guest;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $guest = new guest();
        $guest->name = "agus";
        $guest->role_id = "1";
        $guest->save();

        $guest = new guest();
        $guest->name = "hans";
        $guest->role_id = "2";
        $guest->save();
    }
}
