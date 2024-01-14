<?php
session_start(); 
if(isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true) {
    $is_owner = false; 
    if($_SESSION['user_type'] === 'owner') {
        $is_owner = true;
    }
    if($is_owner) {
        echo '<button type="button">Submit Property</button>';
    }
} else {
   
    echo 'Please log in to access this feature.';
}
?>
>      
                    

