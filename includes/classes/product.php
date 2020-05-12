<?php

    class Product {

        public  $id,
                $name,
                $price;

        function __construct()
        {
            
        }

        //  Read data from database
        function read_from_db() {

            if(!$this->id) 
                return;

            //  Declare $db_link as a globl variable 
            global $db_link;

            $sql = "SELECT * FROM products WHERE id = '$this->id' ";

            if( $result = mysqli_query($db_link, $sql) ) { 

                if( $row = mysqli_fetch_assoc($result)) {

                    // foreach($row as $key => $value)
                    //     $this->$key = $value; 

                    $this->name = $row['name'];
                    $this->price = $row['price'];
                }
            }

        }

        //  Store data to dtabase
        function save_to_db() {

            //  Declare $db_link as a globl variable 
            global $db_link;

            //  Generate SQL statement
            if($this->id)
                $sql = "UPDATE products SET 'products.name'='$this->name', price='$this->price' WHERE id='$this->id';";
            else
                $sql = "INSERT INTO products SET 'products.name'='$this->name', price='$this->price'; ";

            if(mysqli_query($db_link, $sql)) {
                if(!$this->id) {
                    $this->id = mysqli_insert_id($db_link);
                }
            }
        }
    }