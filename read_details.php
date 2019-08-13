<?php
$permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
// Output: 54esmdr0qf
$b= substr(str_shuffle($permitted_chars), 0, 5);
 
?>