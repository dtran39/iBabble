<?php require('init.php'); ?>

<?php
//Create Topic Object
$topic = new Topic;

//Create User Object
 $user = new User;


//Get Template & Assign Vars
$template = new Template('views/index_view.php');

//Assign Vars
$template->topics = $topic->getAllTopics();
$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();
$template->totalUsers = $user->getTotalUsers();
//Display template
echo $template;