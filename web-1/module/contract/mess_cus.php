<?php
$First_Name = !empty($_POST['First_Name']) ? $_POST['First_Name'] : null;
$Last_Name = !empty($_POST ['Last_Name']) ? $_POST ['Last_Name'] : null;
$Phone = !empty($_POST['Phone_Cus']) ? $_POST['Phone_Cus'] : "so la";
echo $Phone;

echo $First_Name;
echo $Last_Name;
setcookie("fullname", $First_Name, time() + 3600 * 24 * 7);
setcookie("password", $Last_Name, time() + 3600 * 24 * 7);
?>