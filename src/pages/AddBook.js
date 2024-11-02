// pages/AddBook.js
import React from 'react';
import BookForm from '../components/BookForm';

const AddBook = ({ onSuccess }) => {
    return (
        <div className="book-management-container"> {/* Optional: Add class for styling */}
            <h1 className="page-title">Add New Book</h1>
            <BookForm onSuccess={onSuccess} />
        </div>
    );
};

export default AddBook;


