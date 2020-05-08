<?php


    /*

    JSON

    person = {
        name: 'Amir',
        email: 'amir@acomp.co.il',
        hobbies: [
            'keyboard',
            'books'
        ],
        address: {
            street: 'bla',
            city: 'Haifa'       
        }
    }

    */


    $person = [
        "name" => "Amir",
        "email" => "amir@acomp.co.il",
        "hobbies" => [
            'keyboard', 
            'books'
        ],
        "address" => [
            "street" => "bla",
            "city" => "Haifa"
        ]
    ];

    //  Convert $person to JSON string
    //  echo json_encode($person);


    //  --------------------------------

    //  Convert JSON to an assoc array

    $inputFromAngular = '{"name":"Amir","email":"amir@acomp.co.il","hobbies":["keyboard","books"],"address":{"street":"bla","city":"Haifa"}}';


    $input = json_decode($inputFromAngular, true);

    //echo "Hello " . $input['name'];

    print_r( $input );
