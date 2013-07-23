<!-- @module SOCIALCOUNT -->
<?php 
  function get_shares($url) {
    $json_string = file_get_contents("http://graph.facebook.com/?id=" . $url);
    $json = json_decode($json_string, true);
    return intval($json['shares']);
  }
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
<ul class="socialcount">
    <li class="facebook-share">
      <a href="#"
        onclick="
          window.open(
            'https://www.facebook.com/sharer/sharer.php?u='+encodeURIComponent(location.href), 
            'facebook-share-dialog', 
            'width=626,height=436'); 
          return false;">
        <img src="<?php bloginfo('template_directory'); ?>/images/fb_share_button.png">
      </a>
      <span class="count"><?php echo $shares; ?></span> 
    </li>
    <li class="twitter">
      <a href="https://twitter.com/share" class="twitter-share-button" data-via="" data-count="none">Tweet</a>
      <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
      <span class="count"><?php echo $tweets; ?></span> 
    </li>   
    <li class="twitter">
       <script type="text/javascript" src="https://apis.google.com/js/plusone.js"></script>
        <g:plusone size="medium" annotation="none"></g:plusone>
      <span class="count"><?php echo $plusones; ?></span> 
    </li>
    <li><div id="fb-root"></div>
      <script>(function(d, s, id) {var js, fjs = d.getElementsByTagName(s)[0]; if (d.getElementById(id)) return; js = d.createElement(s); js.id = id; js.src = "//connect.facebook.net/en_US/all.js#xfbml=1"; fjs.parentNode.insertBefore(js, fjs); }(document, 'script', 'facebook-jssdk'));</script>
      <fb:like send="true" width="450" show_faces="false"></fb:like></li>
     </ul>
