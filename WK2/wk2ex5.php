<?php
// checks if the user's browser is internet explorer and outputs an appropriate message.
if (strpos($_SERVER["HTTP_USER_AGENT"], "MSIE") != false) 
{
   echo "You are using Internet Explorer<br/>";
}
else
{
   echo "Why are you not using Internet Explorer ?<br/>";
}
?> 
