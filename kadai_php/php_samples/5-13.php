<?php
require_once 'app/Shop/Book.php';
require_once 'app/Review/Book.php';

use app\Shop\Book;
use app\Review\Book as BookReview;

$book = new Book();
echo $book->getPrice(), "\n";

$book_review = new BookReview();
echo $book_review->getPoint();