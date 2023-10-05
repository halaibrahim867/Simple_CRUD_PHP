<?php
include 'partials/header.php';
require __DIR__ . '/users/users.php';


$user=createUser($_POST);

if ($_SERVER['REQUEST_METHOD']=== "POST") {

    if (isset($_FILES['picture'])) {
        uploadImage($_FILES['picture'], $user);
    }
    header('Location: index.php');
}

$user=[
    'id'=>'',
    'name'=>'',
    'username'=>'',
    'email'=>'',
    'phone'=>'',
    'website'=>'',

]
?>

<?php
include "_form.php";
?>