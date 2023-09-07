<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $address = $_POST['address'];
      $location = $_POST['location'];
      $guests = $_POST['guests'];
      $checkIn = $_POST['checkIn'];

      $request = " insert into book_form(name, email, address, location, guests, checkIn) values('$name','$email','$address','$location','$guests','$checkIn') ";
      mysqli_query($connection, $request);

      header('location:book.html'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>



