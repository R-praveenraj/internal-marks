<?php
$con=new mysqli('localhost','root','','sona');
if (!$con) {
    echo "Connection failed!";
}
session_start(); 
if (isset($_POST['name']) && isset($_POST['password'])) {
    function validate($data){
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $name = validate($_POST['name']);
    $password = validate($_POST['password']);
    if (empty($name)) {
        exit();
    }else if(empty($password)){
        exit();
    }else{
        $sql = "SELECT * FROM adm WHERE name='$name' AND password='$password'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['name'] === $name && $row['password'] === $password) {
                echo "<h1> Logged in! </h1>";
                $_SESSION['name'] = $row['name'];
                $_SESSION['password'] = $row['password'];
                exit();
            }else{
                
                exit();
            }
        }else{
            exit();
        }
    }
}
else{
    exit();

}
?>
