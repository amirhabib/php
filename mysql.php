<?php

    //  Objects
    class Product {

        public $id, $name, $price;

    }

    //  Helpers
    function get_data($con, $sql) {

        $html = "";

        $result = mysqli_query($con, $sql);
        
        while( $row = mysqli_fetch_assoc($result) ) {

            $html .= "<div>";
            $html .= "<h3>" . $row['name'] . "</h3>";
            $html .= "Price is " . $row['price'];
            $html .= "</div>";
        }

        return $html;
    }

    //  Insert
    function insert_product($con, $product) {

        $sql = "INSERT INTO products (name, price) VALUE ('$product->name','$product->price');"; 

        if($result = mysqli_query($con, $sql)) {

            $product->id = mysqli_insert_id($con);
            return $product;
        } else {
            return false;
        }

    }

    //  Delete
    function delete_product($con, $id) {
        $sql = "DELETE FROM products WHERE id='$id' LIMIT 1;";
        return mysqli_query($con, $sql);
    }

    //  Connect to MySQL Server
    if($con = mysqli_connect('localhost','root','root','fullstack_15') ) {


        //  Successfully connected to database

        echo get_data($con, 'SELECT * FROM products');

        $p = new Product;
        $p->name = 'Milki';
        $p->price = 3;

        if(insert_product($con, $p)) {
            echo "$p->name succesfully added, id is #$p->id";
        } else 
        {
            echo "could not add product";
        }
    

    } else {

        echo "There was an error connecting to Database";
        echo mysqli_error($con);
        die();

    }

    