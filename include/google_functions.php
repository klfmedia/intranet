<?php
function googleLogIn(){
	$_SESSION['$client']->setAuthConfigFile('APIs/client.json');
	$_SESSION['$client']->setScopes(array('https://www.googleapis.com/auth/userinfo.email',
										  'https://www.googleapis.com/auth/calendar',
										  'https://www.googleapis.com/auth/userinfo.profile'));
	$_SESSION['$client']->setIncludeGrantedScopes(true);
	$_SESSION['$client']->setApprovalPrompt('force');
	$_SESSION['$client']->setAccessType('offline');

///////////////////////// The user accepted the access now you need to exchange it for a token  /////////////////////////
    if (isset($_GET['code'])) {
		$_SESSION['$client']->authenticate($_GET['code']);  
		$_SESSION['token'] = $_SESSION['$client']->getAccessToken();
		$redirect = 'http://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF'];
		header('Location: ' . filter_var($redirect, FILTER_SANITIZE_URL));
    }

///////////////////////// The user has not authenticated we give them a link to login    /////////////////////////
	if (!isset($_SESSION['token'])) 
	{
	    $authUrl = $_SESSION['$client']->createAuthUrl();
	    print "<a href='$authUrl'>Connect to Google</a>";
	}
	return $_SESSION['$client'];
}

function getCLient(){
///////////////////////// Refresh the token if it's expired.  /////////////////////////
	if($_SESSION['$client']->isAccessTokenExpired()) {
		$_SESSION['$client']->refreshToken($_SESSION['$client']->getRefreshToken());
		$_SESSION['token'] = $_SESSION['$client']->getAccessToken();
	}
	$_SESSION['$client']->setAccessToken($_SESSION['token']);


}
function getUserInfo(){
	print "<a href='?logout'>LogOut</a>";
}
?>