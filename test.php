<?php
echo "<pre>";
print_r($_POST);
echo "</pre>";
echo $_POST['fname'];

echo "<br>";

echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

echo $_REQUEST['fname'];
echo $_REQUEST['age'];


if (isset($_GET['name']) && isset($_GET['age'])) {
    $name = ($_GET['name']);
    $age = (int)$_GET['age'];
    echo "Hello, $name! You are $age years old.";
} else {
    echo "Please provide both name and age.";
}



?>