<?php

    if(isset($_POST['submit']))
    {
    if(!empty($_POST['select']))
     {
        $selected = $_POST['select'];
        echo 'Choose: ' .$selected;
    } 
    else 
    {
        echo 'select:';
    }
    
?>