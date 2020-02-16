<?php
    if (isset($_POST["submit"]) && $_POST["submit"] == "Submit" ) {
        $username = $_POST["username"];
        $password = $_POST["password"];
        if ($username == "" || $password == "") {
            echo "<script>alert('Username or password is\'t input!');</script>";
        }
        else {
            $link = mysqli_connect('localhost', 'root', '1234', 'test');
            if ($link) {
                $sql = "select username, password from user where username = '$_POST[username]' and password = '$_POST[password]'";
                mysqli_query($link, $sql);
                $num = mysqli_affected_rows($link);
                if($num) {
                    echo "<script>alert('Successfully!');</script>";
                }
                else {
                    echo "<script>alert('Username or password is wrong!');</script>";
                }
            }
        }
    }
    else {
        echo "<script>alert('Submit fail!');</script>";
    }