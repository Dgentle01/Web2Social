<?php
// Include TwitterOAuth library
require "path_to_twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;

// Function to get a short excerpt from the post content
function get_excerpt($post_content, $length = 100) {
    $excerpt = strip_tags($post_content);
    if (strlen($excerpt) > $length) {
        $excerpt = substr($excerpt, 0, $length) . '...';
    }
    return $excerpt;
}

// Function to post on Twitter
function post_to_twitter($post_title, $post_url, $excerpt) {
    $consumer_key = 'YOUR_TWITTER_CONSUMER_KEY';
    $consumer_secret = 'YOUR_TWITTER_CONSUMER_SECRET';
    $access_token = 'YOUR_TWITTER_ACCESS_TOKEN';
    $access_token_secret = 'YOUR_TWITTER_ACCESS_TOKEN_SECRET';

    $connection = new TwitterOAuth($consumer_key, $consumer_secret, $access_token, $access_token_secret);
    $status = $post_title . ' - ' . $excerpt . ' ' . $post_url;
    $connection->post("statuses/update", ["status" => $status]);
}

// Function to post on Facebook Page
function post_to_facebook_page($post_title, $post_url, $excerpt) {
    $page_access_token = 'YOUR_FACEBOOK_PAGE_ACCESS_TOKEN';
    $page_id = 'YOUR_FACEBOOK_PAGE_ID';

    $message = $post_title . ' - ' . $excerpt . ' ' . $post_url;

    $url = "https://graph.facebook.com/{$page_id}/feed";
    $params = [
        'message' => $message,
        'access_token' => $page_access_token
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
}

// Function to post on Facebook Group
function post_to_facebook_group($post_title, $post_url, $excerpt) {
    $group_access_token = 'YOUR_FACEBOOK_GROUP_ACCESS_TOKEN';
    $group_id = 'YOUR_FACEBOOK_GROUP_ID';

    $message = $post_title . ' - ' . $excerpt . ' ' . $post_url;

    $url = "https://graph.facebook.com/{$group_id}/feed";
    $params = [
        'message' => $message,
        'access_token' => $group_access_token
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
}

// Function to post on Telegram
function post_to_telegram($post_title, $post_url, $excerpt) {
    $bot_token = 'YOUR_TELEGRAM_BOT_TOKEN';
    $channel_id = '@YOUR_TELEGRAM_CHANNEL_ID';

    $message = $post_title . ' - ' . $excerpt . ' ' . $post_url;

    $url = "https://api.telegram.org/bot{$bot_token}/sendMessage";
    $params = [
        'chat_id' => $channel_id,
        'text' => $message
    ];

    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($params));
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
}

// Hook into WordPress post publish
function share_new_post($post_ID, $post) {
    if (wp_is_post_revision($post_ID)) {
        return;
    }

    $post_title = get_the_title($post_ID);
    $post_url = get_permalink($post_ID);
    $post_content = $post->post_content;
    $excerpt = get_excerpt($post_content);

    // Post to Twitter
    post_to_twitter($post_title, $post_url, $excerpt);

    // Post to Facebook Page
    post_to_facebook_page($post_title, $post_url, $excerpt);

    // Post to Facebook Group
    post_to_facebook_group($post_title, $post_url, $excerpt);

    // Post to Telegram
    post_to_telegram($post_title, $post_url, $excerpt);
}

add_action('wp_insert_post', 'share_new_post', 10, 2);
?>
