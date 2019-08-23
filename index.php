<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>PPPP</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
  </head>
  <body>
    <!--[if lt IE 7]>
      <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="#">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->
    <ul>
      <a href="index.php"> <li>Index</li></a>
      <a href="about.php"> <li>About</li></a>
      <a href="contanct.php"> <li>Contacts</li></a>
    </ul>
    <?php 
  
    try {
      $dbh = new PDO('mysql:host=localhost;dbname=test', 'root', 'admin123');
  } catch (PDOException $e) {
      print "Error!: " . $e->getMessage() . "<br/>";
      die();
  }
   
  foreach ($dbh->query('SELECT `x` FROM `user` WHERE 1') as $key) {
    print_r("<p>$key[0]</p>");
  }
//    $x = $dbh->query('SELECT count(*) FROM user');
//    print_r($x->fetch());
  // print_r($x->fetchAll());
   
  
//   $dbh->query('UPDATE user SET name = "rrrr" WHERE id = 1');
?>
  <br/>
<?php
//   foreach($dbh->query('SELECT * from user') as $row) {
//     print_r($row['name']);
    
// }

//   $hostname="localhost";
//   $username="root";
//   $password="admin123";
//   $dbname="test";
//   $usertable="user";
//   $yourfield = "your_field";
  
//   mysql_connect($hostname,$username, $password) or die ("html>script language='JavaScript'>alert('Не удается подключиться к базе данных. Повторите попытку позже.'),history.go(-1)/script>/html>");
//   mysql_select_db($dbname);
//   $query = "SELECT * FROM $usertable";
//     echo $result = mysql_query($query);

    //   $a = array();
    //   array_push($a,"fwef","fwefwef");
    //   $a[] = 'eeeee';
    //   if($a[0] != 'eeeee'){
    //     print_r("GG");
    //   }
    //   else {
    //     print_r("neGG");
    //   }
     
      ?>
    <script src="" async defer></script>
  </body>
</html>