<?php

namespace Database\Factories;

use App\Models\Book;
use App\Models\User;
use App\Models\BookCheckout;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookCheckoutFactory extends Factory
{
    protected $model = BookCheckout::class;

    public function definition()
    {
        $checkoutDate = $this->faker->dateTimeBetween('-30 days', 'now');
        $dueDate = $this->faker->dateTimeBetween($checkoutDate, '+30 days');
      

        // Retrieve random user_id and book_id from existing records
        $userId = User::inRandomOrder()->value('id');
        $bookId = Book::inRandomOrder()->value('id');

        return [
            'user_id' => $userId,
            'book_id' => $bookId,
            'checkout_date' => $checkoutDate,
            'due_date' => $dueDate,
            'returned_at' => $dueDate,
        ];
    }
}
