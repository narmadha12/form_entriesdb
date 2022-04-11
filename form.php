<?php
    if(isset($_POST['submit']))
    {
        $name = $_POST['fname'];
        $email = $_POST['email'];
        $message = $_POST['msg'];
        
        //database details. You have created these details in the third step. Use your own.
        $host = "localhost";
        $username = "formdb_user";
        $password = "abc123";
        $dbname = "form_entriesdb";

        //create connection
        $con = mysqli_connect($host, $username, $password, $dbname);
        //check connection if it is working or not
        if (!$con)
        {
            die("Connection failed!" . mysqli_connect_error());
        }
        //This below line is a code to Send form entries to database
        $sql = "INSERT INTO contactform_entries (id, name_fld, email_fld, msg_fld) VALUES ('0', '$name', '$email', '$message')";
      //fire query to save entries and check it with if statement
        $rs = mysqli_query($con, $sql);
        if($rs)
        {
            echo "Successfully saved";
        }
      //connection closed.
        mysqli_close($con);
    }
?>
