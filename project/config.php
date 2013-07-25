<?php
//Entire project's config options
$GLOBALS['config']['autoload_libraries']=array('database','hash','redirection');
$GLOBALS['config']['autoload_controller']='redirectionController';
$GLOBALS['config']['libraries']['database']['username']='shareit_os';
$GLOBALS['config']['libraries']['database']['password']='buhala282828';
$GLOBALS['config']['libraries']['database']['host']='os.ygeorgiev.com';
$GLOBALS['config']['libraries']['database']['db']='shareit_os';
$GLOBALS['config']['libraries']['database']['autoconnect']=true;
$GLOBALS['config']['libraries']['hash']['salt']='fgjdnfngre g]n-retg owrtgnbojdngbpd gtp] hd0inrdg bodtg';
$GLOBALS['config']['index']['start_session']=true;
$GLOBALS['config']['system']['update']=true;
$GLOBALS['config']['system']['redirect_logged']='profile';
$GLOBALS['config']['system']['email']='support@breader.me';
$GLOBALS['config']['extra']['github']['username']='albertvision';
$GLOBALS['config']['extra']['github']['project']='OpenSupport';
$GLOBALS['config']['extra']['lang']='bg';
$GLOBALS['config']['index']['enviroment']='development';
define('SITE_PATH','http://localhost/OpenSupport/');
//remember to edit the .js file at public (stories.js), also home.js includes some of it.