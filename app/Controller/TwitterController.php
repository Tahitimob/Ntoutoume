<?php
namespace Controller;
require "/../../vendor/autoload.php";


use \W\Controller\Controller;
use Abraham\TwitterOAuth\TwitterOAuth;

define('CONSUMER_KEY', 'j6WTpjrynB4mIV3YoqKrwl2GS');
define('CONSUMER_SECRET', 'rqGKPK9spnjQO1dlwUixRhjBe1F8v5jaf1XbqsvA0iomg9flav');
$access_token = '472230100-9efALTuTcT5Keilv2SmZsyKaIzaofA9nQr8HnLrg';
$access_token_secret = 'GIG7k198NY4KFoHlbVfEHZ7UDTlogxPpdZ6qwdtsm0CHK';

$connection = new TwitterOAuth(CONSUMER_KEY, CONSUMER_SECRET, $access_token, $access_token_secret);
$content = $connection->get("account/verify_credentials");

$getfield = '?count=1';

// Pour voir tout ses tweets //

$tweets = $connection->get('statuses/user_timeline', array('user_id' => $content->id));
$v = 0;

foreach ($tweets as $tweet) {
	if($v<1){
		$embedTweet = $connection->get('statuses/oembed', array('url' => 'https://twitter.com/'.$content->screen_name.'/status/'.$tweet->id.$getfield));
	echo $embedTweet->html;
	}else{
	echo "";
	}
	$v++;
}

