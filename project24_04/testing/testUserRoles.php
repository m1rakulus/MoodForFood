<?php
require "../User_Roles.php";
//Create a new role
$testRole = new User_Roles();
//Set the role id of the new role
$testRole->set_roleid(3);
//Output the new role id
echo "Making a new user role with role id 3";
echo nl2br("\n");
echo "Output the role id using the getter method:";
echo nl2br("\n");
echo $testRole->get_role();
?>