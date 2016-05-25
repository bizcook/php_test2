<p>
  this is a parial!
</p>
<?php
  $someOtherNumber = 9 * 9;
  echo $someOtherNumber;
?>
<h1>
<?php echo "this is cool"; ?>
</h1>
<h4>
<?php
    $i = 4;
    //switchcase in php. notice you can have multiple cases with the same output.
    switch ($i) {
        case 0:
            echo '$i is 0.';
            break;
        case 1:
        case 2:
        case 3:
        case 4:
        case 5:
            echo '$i is somewhere between 1 and 5.';
            break;
        case 6:
        case 7:
            echo '$i is either 6 or 7.';
            break;
        default:
            echo "I don't know how much \$i is.";
    }
    ?>

    </h4>
