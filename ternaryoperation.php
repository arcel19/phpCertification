<?php
   $is_logged = false;
  

   $message = "welcome" . ($is_logged ? "back" : "!");

   echo $message;

   $name = isset($name) ? $name : "joe";
   echo $name;

 ?>