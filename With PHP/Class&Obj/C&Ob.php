<!DOCTYPE html>
<html>
    <body>

    <?php 
        class Book{
            var $title;
            var $author;
            var $pages;
        }

        $book1 = new Book;
        $book1 -> title = "Harry Potter";
        $book1 -> author = "JK Rowling";
        $book1 -> pages = 400;

        echo $book1 -> author;
    ?>

    </body>
</html>