<!-- @module SOCIALCOUNT -->
<?php 
  function get_tweets($url) {
    $json_string = file_get_contents('http://urls.api.twitter.com/1/urls/count.json?url=' . $url);
    $json = json_decode($json_string, true);
    return intval( $json['count'] );
  }
  function get_likes($url) {
    $json_string = file_get_contents('http://graph.facebook.com/?ids=' . $url);
    $json = json_decode($json_string, true);
    return intval( $json[$url]['shares'] );
  }
  function get_plusones($url) {           
    $curl = curl_init();
    curl_setopt($curl, CURLOPT_URL, "https://clients6.google.com/rpc");
    curl_setopt($curl, CURLOPT_POST, 1);
    curl_setopt($curl, CURLOPT_POSTFIELDS, '[{"method":"pos.plusones.get","id":"p","params":{"nolog":true,"id":"' . $url . '","source":"widget","userId":"@viewer","groupId":"@self"},"jsonrpc":"2.0","key":"p","apiVersion":"v1"}]');
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
    $curl_results = curl_exec ($curl);
    curl_close ($curl);         
    $json = json_decode($curl_results, true);         
    return intval( $json[0]['result']['metadata']['globalCounts']['count'] );
  }
  $fql  = "SELECT url, normalized_url, share_count, like_count, comment_count, ";
  $fql .= "total_count, commentsbox_count, comments_fbid, click_count FROM ";
  $fql .= "link_stat WHERE url = 'www.apple.com'";

  $apifql="https://api.facebook.com/method/fql.query?format=json&query=".urlencode($fql);
  $json_string=file_get_contents($apifql);
  $json= json_decode($json_string, true);
  $shares = $json[0]['share_count'];
  $link = get_permalink(); 
  $likes = get_likes($link);
  $tweets = get_tweets($link);
  $plusones = get_plusones($link);
  if ($likes < 1) {$likes = "Like";}
  if ($tweets < 1) {$tweets = "Tweet";}
  if ($plusones < 1) {$plusones = "+1";}
?>
<ul class="socialcount" data-url="<?php the_permalink(); ?>">
  <li class="facebook"><a href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>" title="Share on Facebook"><span class="social-icon icon-facebook"></span><span class="count"><?php echo $likes; ?></span> </a></li>
  <li class="twitter"><a href="https://twitter.com/intent/tweet?text=<?php the_permalink(); ?>" title="Share on Twitter"><span class="social-icon icon-twitter"></span><span class="count"><?php echo $tweets; ?></span> </a></li>
  <li class="googleplus"><a href="https://plus.google.com/share?url=<?php the_permalink();?>" title="Share on Google Plus"><span class="social-icon icon-googleplus"></span><span class="count"><?php echo $plusones; ?></span>  </a></li>
</ul>
