<?php
if ($_GET['randomId'] != "kOUFek51dm1FYRjK_tVHUmzCaykZmXzk8ASBmic5f6zhRT_9zjB6zedsaFrElFKd") {
    echo "Access Denied";
    exit();
}

// display the HTML code:
echo stripslashes($_POST['wproPreviewHTML']);

?>  
