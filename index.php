<?php
    $books = [
        [
            'title' => 'The first book',
            'Author' => 'Author1',
            'publish_date' => '1395',
            'price' => 100000
        ],
        [
            'title' => 'The new first book',
            'Author' => 'Author1',
            'publish_date' => '1395',
            'price' => 110000
        ],
        [
            'title' => 'The second book',
            'Author' => 'The second Author',
            'publish_date' => '1399',
            'price' => 200000
        ],
        [
            'title' => 'The third book',
            'Author' => 'The third Author',
            'publish_date' => '1395',
            'price' => 150000
        ]
    ];
    
    $filteredbook = array_filter($books,function($book){
        return $book['price'] <= 150000;
    });
require('index.view.php');