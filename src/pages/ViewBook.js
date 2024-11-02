// pages/ViewBook.js
import React from 'react';
import BookDetails from '../components/BookDetails';
import '../styles.css';

const ViewBook = () => {
    return (
        <div className="view-book-container">
            <h1 className="page-title">Book Details</h1>
            <BookDetails />
        </div>
    );
};

export default ViewBook;
