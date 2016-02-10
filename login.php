<?php include('init.php'); ?>

<?php
if(isset($_POST['do_login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    $user = new User;

    if($user->login($username, $password)){
        redirect('index.php','Welcome, you are now logged in','success');
    } else {
        redirect('index.php','The information you enter are not valid','error');
    }
} else      redirect('index.php');