<?php

class Book {
    
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    public function getTitle() {
        return $this->title;
    }


    public function getAvailableCopies() {
        echo "Available copies of '{$this->title}':{$this->availableCopies} .\n";
    }

    
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }

    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
   
    private $name;
    public function __construct($name) {
        $this->name = $name;
    }

   
    public function getName() {
        return $this->name;
    }


    public function borrowBook(Book $book) {
        if ($book->borrowBook()) {
            echo "{$this->getName()} borrowed '{$book->getTitle()}'.\n";
        } else {
            echo "No copies available for '{$book->getTitle()}' to borrow.\n";
        }
    }

    
    public function returnBook(Book $book) {
        $book->returnBook();
        echo "{$this->getName()} returned '{$book->getTitle()}'.\n";
    }
}

    // example usage of the classes
    //instance of member
    $member1 = new Member('John Doe');
    $member2 = new Member('Jane Smith');
    //instance of book
    $book1 = new Book('The Great Gatsby', 5);
    $book2 = new Book('To Kill a Mockingbird', 3);

    //borrow books
    $member1->borrowBook($book1);
    $member1->borrowBook($book2);

    $member2->borrowBook($book1);
    $member2->borrowBook($book2);
    
    //get available copies
    $book1->getAvailableCopies();
    $book2->getAvailableCopies();
?>