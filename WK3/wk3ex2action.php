<?php
  // check if the age is less than 21
  if ($_POST["txtage"] < 21) 
  {
    // display message if the age is under 21
    echo "You are under 21 years old<br/>";
  }
  else
  {
    // display message if the age is 21 or over
    echo "You are 21 years old or over<br/>";
  }

  // check the entered gender
  if ($_POST["txtgender"] == "Male"){
    // display message if Male
    echo "You are a Male";
  }elseif ($_POST["txtgender"] == "Female"){
    // display message if Female
    echo "You are a Female";
  }else{
    // display message if the gender entry is invalid
    echo "Invalid Entry";
  }
?>
