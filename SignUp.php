<?php
$hostname = 'localhost';
$dbuser = 'sqluser';
$dbpassword = 'password';
$dbname = 'masaartstudio';
if(isset($_POST['SignUpBTN']))
{   
    
$Username = $_POST['REGusername'];
$Email = $_POST['REGemail'];
$Password = $_POST['REGpassword'];
$db = new mysqli($hostname, $dbuser, $dbpassword, $dbname);
    try {

        $sql = "INSERT INTO user (First_name,password,Email,address) VALUES ('$Username','$Password','$Email',null);";
        $res = $db->query($sql);
        echo "hi";
        $db->commit();
        $db->close();
    }
    catch(Exception $e){
        echo $e;
    }
}

if (isset($_POST['LoginBTN'])) {
    $INEmail = $_POST['INemail'];
    $INPassword = $_POST['INpassword'];

    try {

        $db = new mysqli($hostname, $dbuser, $dbpassword, $dbname);
        $sql = "SELECT * FROM user WHERE email='$INEmail' and password='$INPassword';";

        $res = $db->query($sql);

        if ($res->num_rows > 0) {
            echo "hiiiiiiii";
            
        } else {
            die("Something Went Wrong!");
        }
        $db->close();
    } catch (Exception $e) {
        echo $e;
    }
}

?>




























