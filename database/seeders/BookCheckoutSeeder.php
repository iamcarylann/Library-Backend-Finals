<?php

namespace Database\Seeders;

use App\Models\BookCheckout;
use Illuminate\Database\Seeder;

class BookCheckoutSeeder extends Seeder
{
    public function run(): void
    {
        BookCheckout::factory(10)->create();
    }
}