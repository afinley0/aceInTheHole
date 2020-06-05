<?php

// Edit or Replace this try/catch statement to work with the current PHT configuration
try
{
    $pdo = new PDO('mysql:host=localhost;dbname=afinleyw_ace_db', 'afinleyw_ace_user', 'ace_user_db_p');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include '../includes/error.html.php';
  exit();
}

// Modify the If statement so the try only runs if the First Name field has been submitted AND the honeypot field is empty ''
if (isset($_POST['myfname'])) {
    // If the if statement is true, save each form field value as a variable. These variable values will be used in the thank you page.
    $myfname = $_POST['myfname'];
    $myemail = $_POST['myemail'];
    $myphone = $_POST['myphone'];
    $myage = $_POST['myage'];
    $mygender = $_POST['mygender'];
    $myrole = $_POST['myrole'];
    $myecontact = $_POST['myecontact'];
    $myeconphone = $_POST['myeconphone'];
    $mysaturday = $_POST['mysaturday'];
    $mysunday = $_POST['mysunday'];
    $myspecial = $_POST['myspecial'];
    // And run the try/catch to attempt to insert data in the database. Modify the INSERT statement to write all the form filed values (except the honeypot) to the database.
    try {
      $sql = 'INSERT INTO register SET
          fname = :fname,
          email = :email,
          phone = :phone,
          age = :age,
          gender = :gender,
          role = :role,
          econtact = :econtact,
          econphone = :econphone,
          saturday = :saturday,
          sunday = :sunday, 
          special = :special';
      $s = $pdo->prepare($sql);
      $s->bindValue(':fname', $myfname);
      $s->bindValue(':age', $myage);
      $s->bindValue(':phone', $myphone);
      $s->bindValue('email', $myemail);
      $s->bindValue(':gender', $mygender);
      $s->bindValue(':role', $myrole);
      $s->bindValue(':econtact', $myecontact);
      $s->bindValue(':econphone', $myeconphone);
      $s->bindValue(':saturday', $mysaturday);
      $s->bindValue(':sunday', $mysunday);
      $s->bindValue(':special', $myspecial);
      $s->execute();
    }
    catch (PDOException $e)
    {
      $error = 'Error adding submitted joke: ' . $e->getMessage();
      include '../includes/error.html.php';
      exit();
    }
    include 'success.html.php';
    // Add an else to load the initial page if the initial (line 19) if statement is false
    
  } else {
        include 'register.html.php';
}