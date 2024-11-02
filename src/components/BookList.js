import React from 'react';
import { Link } from 'react-router-dom';
import '../styles.css';

const BookList = ({ books, onDelete }) => {
    return (
    

        <div className="page-container">
            <h2 className="page-title-Booklist">Book List</h2> {
            /* Moved title to the top */}
            <Link to="/add">
                <button className="add-button">Add Book</button>
            </Link>
            <div className="card-container">
                {books.map((book) => (
                    <div key={book.id} className="card">
                        <h3>{book.title}</h3>
                        <p>Author: {book.author}</p>
                        <div className="card-actions">
                            <Link to={`/view/${book.id}`}>
                                <button className="view-button">View</button>
                            </Link>
                            <Link to={`/edit/${book.id}`}>
                                <button className="edit-button">Edit</button>
                            </Link>
                            <button onClick={() => onDelete(book.id)} className="delete-button">Delete</button>
                        </div>
                    </div>
                ))}
            </div>
        </div>
    );
};

export default BookList;
