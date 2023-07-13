<?php
    $connection =mysqli_connect('localhost', 'root', '','contact_db');

    if(isset($_POST['send'])){
        $name = $_POST['name'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $address = $_POST['address'];
        $message = $_POST['message'];

        $request = " insert into contact_form(name, email, phone, address, message) 
        values('$name', '$email', '$phone', '$address', '$message ')";
    
        msqli_query($connection, $request);
        heading('location:index.html');
    }

    else{
        echo '! something went wrong try again';
    }
?>