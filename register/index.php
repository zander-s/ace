<?php

// Connect to database

try
{
  $pdo = new PDO('mysql:host=localhost;dbname=ace-hole_db', 'ace-hole_user', 'CAS222USERace');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  $pdo->exec('SET NAMES "utf8"');
}
catch (PDOException $e)
{
  $error = 'Unable to connect to the database server.';
  include 'error.php';
  exit();
}


// Begin Insert query to write form data to database

if (array_key_exists('myemail', $_POST)) {

    $myfname = $_POST['myfname'];
    $mylname = $_POST['mylname'];
    $myemail = $_POST['myemail'];
    $myrace = $_POST['myrace'];
    $mycomments = $_POST['mycomments'];

    try {
        $sql = 'INSERT INTO registration SET
        first_name = :first_name,
        last_name = :last_name,
        email = :email,
        race = :race,
        comments = :comments';
        $s = $pdo->prepare($sql);
        $s->bindValue(':first_name', $_POST['myfname']);
        $s->bindValue(':last_name', $_POST['mylname']);
        $s->bindValue(':email', $_POST['myemail']);
        $s->bindValue(':race', $_POST['myrace']);
        $s->bindValue(':comments', $_POST['mycomments']);
        $s->execute();

    } catch (PDOException $e) {
        $error = 'Error fetching pages: ' . $e->getMessage();
        include 'error.php';
        exit();
    }
    include 'success.php';
} else {
    include 'register.php';
}