<html>
  <head>
  <title>temp for Biz</title>
  </head>
  <body>
  <p>You can put HTML right in your PHP:</p>
  <p>Adding two numbers in PHP here:
  <?php
    $number = 3 * 9;
    echo $number;
  ?>
  <br />
  <h4> making a for loop in php to iterate over an array: </h4>
  <?php
          $players = array("arod",
          "jordy", "clay",
          "eddie", "sam");

          foreach ($players as $one) {
              echo "<li>$one</li>";
          }
        ?>

  <h2>
  <?php
    if(5>6){
      echo "this ain't right!";
    }else{
      echo "you r a smartypants!";
    }
    ?></h2>
  </p>
  <p>
     ... and you can include other PHP as "partials":
     <?php include 'other.php';?>
  </p>
  <h2>below is a footer partial!!</h2>
  <?php include 'footer.php';?>
  </body>
</html>
