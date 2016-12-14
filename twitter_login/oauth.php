<?php
 session_start();
 require_once('./twitter_login/twitteroauth/twitteroauth.php');
 include('./twitter_login/config.php');

  if(isset($_GET['oauth_token']))
 {
 	$connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $_SESSION['request_token'], $_SESSION['request_token_secret']);
 	$access_token = $connection->getAccessToken($_REQUEST['oauth_verifier']);
 	//dump($access_token);
 	if($access_token)
 	{
 			$connection = new TwitterOAuth($CONSUMER_KEY, $CONSUMER_SECRET, $access_token['oauth_token'], $access_token['oauth_token_secret']);
 			$params =array();
 			$params['include_entities']='false';
 			$content = $connection->get('account/verify_credentials',$params);
 			//dump($content);die;
			if($content && isset($content->screen_name) && isset($content->name))
			{
				// $_SESSION['name']=$content->name;
				// $_SESSION['image']=$content->profile_image_url;
				// $_SESSION['twitter_id']=$content->screen_name;
				$where = array(
					'user_type' => 5,
					'user_mark' => $content->id_str,
					);
				A('Index')->is_user($where);
				//redirect to main page.
				//header('Location: login.php'); 
				 // echo "Name :".$_SESSION['name']."<br>";
				 // echo "Twitter ID :".$_SESSION['twitter_id']."<br>";
				 // echo "Image :<img src='".$_SESSION['image']."'/><br>";
				 //echo "<br/><a href='logout.php'>Logout</a>";
			}
			else
			{
				echo "<h4> Login Error </h4>";
			}
	}
	else{
		echo "<h4> Login Error </h4>";
	}

}
else //Error. redirect to Login Page.
{
	header('Location: http://index.php'); 
}

?>