<?php

$con = mysqli_connect("localhost","sqluser","password","masaartstudio");
$query = 'SELECT item_pic FROM shop';
$result = mysqli_query($con,$query);
while($record = mysqli_fetch_assoc($result))
{
    echo '<img src="' . $record['item_pic'] . '">';
    
}


?>