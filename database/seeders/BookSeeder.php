<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $books = [
            [
                'title' => 'Where the Wild Things Are',
                'author' => 'Maurice Sendak',
                'published_year' => 1963,
                'genre' => 'Fantasy',
                'description' => 'A story about a young boy\'s journey to a land of monsters.',
            ],
            [
                'title' => 'Charlotte’s Web',
                'author' => 'E.B. White',
                'published_year' => 1952,
                'genre' => 'Children\'s Fiction',
                'description' => 'A tale of friendship between a pig and a spider.',
            ],
            [
                'title' => 'The Cat in the Hat',
                'author' => 'Dr. Seuss',
                'published_year' => 1957,
                'genre' => 'Fantasy',
                'description' => 'A mischievous cat visits two kids on a rainy day.',
            ],
            [
                'title' => 'Goodnight Moon',
                'author' => 'Margaret Wise Brown',
                'published_year' => 1947,
                'genre' => 'Picture Book',
                'description' => 'A bedtime story featuring a quiet goodnight to the world.',
            ],
            [
                'title' => 'Green Eggs and Ham',
                'author' => 'Dr. Seuss',
                'published_year' => 1960,
                'genre' => 'Children\'s Fiction',
                'description' => 'A humorous story about trying new foods.',
            ],
            [
                'title' => 'The Very Hungry Caterpillar',
                'author' => 'Eric Carle',
                'published_year' => 1969,
                'genre' => 'Picture Book',
                'description' => 'The journey of a caterpillar growing into a butterfly.',
            ],
            [
                'title' => 'Harry Potter and the Philosopher\'s Stone',
                'author' => 'J.K. Rowling',
                'published_year' => 1997,
                'genre' => 'Fantasy',
                'description' => 'A young boy discovers he\'s a wizard and goes to magic school.',
            ],
            [
                'title' => 'The Tale of Peter Rabbit',
                'author' => 'Beatrix Potter',
                'published_year' => 1902,
                'genre' => 'Children\'s Fiction',
                'description' => 'A mischievous rabbit ventures into Mr. McGregor\'s garden.',
            ],
            [
                'title' => 'Winnie-the-Pooh',
                'author' => 'A.A. Milne',
                'published_year' => 1926,
                'genre' => 'Children\'s Fiction',
                'description' => 'Adventures of a lovable bear and his friends.',
            ],
            [
                'title' => 'Matilda',
                'author' => 'Roald Dahl',
                'published_year' => 1988,
                'genre' => 'Fantasy',
                'description' => 'A smart girl with special powers stands up to her cruel family.',
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}
