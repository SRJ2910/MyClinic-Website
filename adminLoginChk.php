<?php
sleep(2);
    $admin_id = "Dopa70-1";
    $admin_password = "Group#2";
    if(isset($_POST['loginbutton'])){
        $id = $_POST['admin_id'];
        $pass = $_POST['admin_pass'];
    }

    if ($id == $admin_id && $pass == $admin_password) {
        echo "<script> location.href='admin/admin.php'; </script>";
    }

    else {
        echo "<script>  alert('Wrong Credentials'); location.href='adminLogin.php'; </script>";
    }
?>