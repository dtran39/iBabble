<?php
//Start Session
session_start();

define("DB_HOST", "");
define("DB_USER", "");
define("DB_PASS", "");
define("DB_NAME", "");

define("SITE_TITLE", "Welcome to iBabble! You can talk anything");

//Paths
define ('BASE_URI', 'http://'.$_SERVER['SERVER_NAME'].'/iBabble');
define ('VIEWS_URI', BASE_URI.'/views');

//Helper Function Files
// Redirects to page, displayMessages, isLoggedIn, get Logged in user info
require_once('helpers/system_helper.php');
// Format Date, Url, Add classname active if category is active
 require_once('helpers/format_helper.php');
// Get number of replies per topic,  All Categories,  number of User Posts
 require_once('helpers/db_helper.php');

//Autoload core Classes
/* Database:
 * Use PDO (need more research on this
 * constructor, query, execute, bind, single,
 */
// Template: construct, getter, setter, toString
/*
 *  Topic: $db
 * Getter: all topics, by category, by user, a category, a topic, all replies,
 * Counter: topics, categories, replies from a topic
 * Creator: topics, replies
 */
/*
 * User: $db
 * register, uploadAvatar, login, setUserData, logout, countusernums
 */
// Validator: Check Required Fields, Validate Email Field, Check Password Match
function __autoload($class_name){
    require_once('libraries/'.$class_name . '.php');
}

