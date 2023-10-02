<?php
// Assignment 4

class Product {
    // properties
    private $id;
    private $name;
    private $price;

    // constructor
    public function __construct($id, $name, $price) {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
    }

    // method
    public function getFormattedPrice() {
        return '$' . number_format($this->price, 2);
    }

    // show details method
    public function showDetails() {
        echo "Product Details:\n";
        echo "- ID: {$this->id}\n";
        echo "- Name: {$this->name}\n";
        echo "- Price: {$this->getFormattedPrice()}\n";
    }
}

// Test the Product class
$product = new Product(1, 'T-shirt', 19.99);
$product->showDetails();
