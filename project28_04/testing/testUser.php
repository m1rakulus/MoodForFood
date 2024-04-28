<?php
require "../User.php";
require "../Functions.php";
//Create test user
$usrTest = new User();
//test all setters for the attributes
$usrTest->set_firstname("test_firstname");
$usrTest->set_lastname("test_lastname");
$usrTest->set_email("test@gmail.com");
$usrTest->set_password("testpassword123");
$usrTest->set_contact("0753214637");
$usrTest->set_roleid(3);
//output all the data associated with the user object just created
echo("Test all of the user attributes:");
echo nl2br("\n");
echo($usrTest->get_firstname());
echo nl2br("\n");
echo nl2br($usrTest->get_lastname());
echo nl2br("\n");
echo nl2br($usrTest->get_email());
echo nl2br("\n");
echo nl2br($usrTest->get_password());
echo nl2br("\n");
echo nl2br($usrTest->get_contact());
echo nl2br("\n");echo nl2br("\n");
echo "Test writeUser() function with the newly created user object and the new user role.";
echo nl2br("\n");
writeUser($usrTest);
?>