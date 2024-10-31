// pages/EditBook.js
import React from 'react';
import BookForm from '../components/BookForm';

const EditBook = ({ onSuccess }) => {
    return (
        <div>
            <h1>Edit Book</h1>
            <BookForm onSuccess={onSuccess} />
        </div>
    );
};

export default EditBook;
