<?php
    
    if($_POST['name'] != null && $_POST['amount'] != null ){
        $sql = "INSERT INTO product (proname,amount) VALUES ('". trim($_POST['name']). "','". trim($_POST['amount']). "')";
        if($conn->query($sql)){
            echo "<script>alert('Success added')</script>";
            header("Refresh:0 , url = ../list.php");
            exit();

        }
        else{
            echo "<script>alert('Add failed')</script>";
            header("Refresh:0 , url = ../list.php");
            exit();

        }
    }
    else{
        echo "<script>alert('Please fill in information.')</script>";
        header("Refresh:0 , url = ../list.php");
        exit();

    }
    mysqli_close($conn);
?>