import React, { useEffect, useState } from 'react';
import { Link } from 'react-router-dom';
import BookList from '../components/BookList';
import '../styles.css';

const Home = () => {
    const [books, setBooks] = useState([]);
    const [message, setMessage] = useState('');
    const [isVisible, setIsVisible] = useState(false);

    const fetchBooks = async () => {
        try {
            const response = await fetch('http://localhost:8000/api/books');
            if (!response.ok) throw new Error('Failed to fetch books');
            const data = await response.json();
            setBooks(data);
        } catch (error) {
            console.error(error);
        }
    };

    useEffect(() => {
        fetchBooks();
    }, []);

    const handleDelete = async (id) => {
        try {
            const response = await fetch(`http://localhost:8000/api/books/${id}`, {
                method: 'DELETE',
            });
            if (!response.ok) throw new Error('Failed to delete book');
            setMessage('Book deleted successfully!');
            setIsVisible(true);
            setTimeout(() => {
                setIsVisible(false);
            }, 3000); // Fade out after 3 seconds
            fetchBooks();
        } catch (error) {
            console.error(error);
        }
    };

    return (
        <div className="home-background">
            <div className="header-container">
                <header className="header">
                    <h1 className="page-title">Book Management System</h1>
                </header>

                {isVisible && (
                    <div className="success-message" onClick={() => setIsVisible(false)}>
                        {message}
                    </div>
                )}
            </div>

            <BookList books={books} onDelete={handleDelete} />
        </div>
    );
};

export default Home;
