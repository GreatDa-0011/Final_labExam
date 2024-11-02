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
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'published_year' => 1925,
                'genre' => 'Novel',
                'description' => 'A story about the American dream.',
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'published_year' => 1960,
                'genre' => 'Novel',
                'description' => 'A novel about racial injustice in the Deep South.',
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'published_year' => 1949,
                'genre' => 'Dystopian',
                'description' => 'A dystopian novel set in a totalitarian regime.',
            ],
            [
                'title' => 'Pride and Prejudice',
                'author' => 'Jane Austen',
                'published_year' => 1813,
                'genre' => 'Romance',
                'description' => 'A classic novel of manners.',
            ],
            [
                'title' => 'The Catcher in the Rye',
                'author' => 'J.D. Salinger',
                'published_year' => 1951,
                'genre' => 'Fiction',
                'description' => 'A story about teenage angst and alienation.',
            ],
            [
                'title' => 'Moby Dick',
                'author' => 'Herman Melville',
                'published_year' => 1851,
                'genre' => 'Adventure',
                'description' => 'The narrative of a sailor’s obsession with a giant whale.',
            ],
            [
                'title' => 'War and Peace',
                'author' => 'Leo Tolstoy',
                'published_year' => 1869,
                'genre' => 'Historical Fiction',
                'description' => 'A complex tale of Russian society during the Napoleonic wars.',
            ],
            [
                'title' => 'The Odyssey',
                'author' => 'Homer',
                'published_year' => -800,
                'genre' => 'Epic',
                'description' => 'An epic poem about Odysseus\'s journey home.',
            ],
            [
                'title' => 'Jane Eyre',
                'author' => 'Charlotte Brontë',
                'published_year' => 1847,
                'genre' => 'Romance',
                'description' => 'The story of a young woman’s moral and spiritual development.',
            ],
            [
                'title' => 'The Hobbit',
                'author' => 'J.R.R. Tolkien',
                'published_year' => 1937,
                'genre' => 'Fantasy',
                'description' => 'A fantasy adventure of a hobbit named Bilbo Baggins.',
            ],
        ];

        foreach ($books as $book) {
            Book::create($book);
        }
    }
}  
