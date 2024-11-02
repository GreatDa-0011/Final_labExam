// pages/EditBook.js
import React from 'react';
import BookForm from '../components/BookForm';

const EditBook = ({ onSuccess }) => {
    return (
        <div className="book-management-container"> {/* Optional: Add class for styling */}
            <h1 className="page-title">Edit Book</h1>
            <BookForm onSuccess={onSuccess} />
        </div>
    );
};

export default EditBook;
