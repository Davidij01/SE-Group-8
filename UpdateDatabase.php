<?php

        $host = "davidijagbemi";
        $user = "davidijagbemi";
        $pw = "";
        $database = "davidijagbemi";

        $db = new mysqli($host, $user, $pw, $database);
        if ($db->connect_errno) {
                echo "Connect failed: ". $db->connect_error;
                exit();}

//User Table
		if(isset($_REQUEST['id'])){    $id=$_REQUEST['id'];  }
        if(isset($_REQUEST['Lastnameame'])){    $lastName=$_REQUEST['Lastnameame'];  }
        if(isset($_REQUEST['Firstname'])){    $Firstname=$_REQUEST['Firstname']; }
        if(isset($_REQUEST['Username'])){    $Username=$_REQUEST['Username'];  }
        if(isset($_REQUEST['Email'])){    $Email=$_REQUEST['Emailmail']; }
		if(isset($_REQUEST['UserRole'])){    $UserRole=$_REQUEST['UserRole'];  }
		if(isset($_REQUEST['Password'])){    $Password=$_REQUEST['Password'];  }

        if(isset($_REQUEST['id'])){
        $sql = "UPDATE `users` (id, Lastname,Firstname,Username,Email,UserRole,Password)
                VALUES ('$id','$Lastname', '$Firstname', '$Username', '$Email',$UserRole, $Password );";
                 if($db->query($sql) == TRUE)
                {
                        echo "New record successfully created";
                     header('Location: http://compsci.adelphi.edu/~davidijagbemi/');
                }
                else
                {
                        echo "Error: " . $sql . "<br>" . $db->error;
                }
        }


        $sql = "SELECT * FROM `users`;";
        $result = $db->query($sql);

        if(!$result)
        {
                echo "Uh oh..." . $db->error;
        }
        else
        {
                echo "<br>The result has ". $result->num_rows. " rows.";
        }

    mysqli_close($db);
?>
