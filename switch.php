<?php
  $fav_fruit = readline('Enter fruit name: ');
  switch($fav_fruit){
    case "orange":
        echo "Your favorite fruit is an orange";
        break;
    case "Mango":
        echo "Your favorite fruit is Mango";
        break;
    case "apple":
        echo "your favorite fruit is apple";
        break;
    default:
      echo "Your favorite fruit is neither orange , mango nor apple";
  }

?>