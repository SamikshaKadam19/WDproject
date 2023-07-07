<?php
    $Username=$_POST['Username'];
    $Email=$_POST['Email'];
    $Password=$_POST['Password'];

     
    $mysqli=new mysqli('localhost','root');
    if(!$mysqli){
        die('Connection Failed : '.mysqli_connect_error());

    }
    else{

        $sql="SELECT * FROM logindata";
        $result=mysqli_query($mysqli,$sql);


        // $stmt=$conn->prepare("insert into logindata");
        // $stmt->bind_param("sss", $Username,$Email,$Password);
        // $stmt->execute();
        echo "registration Successfully";

        // $stmt->close();
        // $conn->close();

    }

?>