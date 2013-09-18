<?php
/*
Template Name: Application Page with Sidebar Left
*/
?>
<?php get_header(); ?>

<header class="site-header fixed-top">
  <?php get_template_part( 'nav' ); ?>
</header>

<div class="container scroll-page row application">

  <h1 class="center">Apply to Join The Foundation</h1>
  <h2 class="center">Build A Profitable Web Company In 6 Months Even If You Have No Idea What To Start Or How To Code</h2>

  <div class="row">

    <div class="grid-wide pull-r">
      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
      <h2 class="apply-now">Apply Now!</h2>
      <div class="postcard">
      <?php the_content(); ?>
      </div>
      <?php endwhile; endif; ?>
    </div>

    <div class="grid-narrow text application-aside pull-l">
      <h3>Online From Anywhere</h3>
      <div class="laptop-map">
        <img src="<?php echo get_bloginfo('template_directory'); ?>/images/laptop-map.png" alt="">
        <p class="">Get started
                    with just a
                    <b>laptop</b> and
                    the <b>internet.</b></p>
      </div>
      <h3>Community</h3>
      <p>Lonely entrepreneur isn't possible inside The Foundation. Students end up becoming best friends, holding live events, and supporting the ha-ell out of each other. You can move through all of the ups and downs of starting a business. Together.</p>
      <h3>Starting from Nothing</h3>
      <p>No idea? No money? No credibility? No product creation experience? Notta problem son! We create companies out of thin air, and show you how.</p>
      <h3>Expert Coaches</h3>
      <p>Not just any coach. Our expert coaches all have vetted business with paying customers. Many entrepreneurs are stuck with blind spots and need a second perspective. Get live help when you need it.</p>
      <h3>Trusted By The Best</h3>
     <div class="testimonials">
        <?php
        $home_args3 = array(
          'post_type' => 'testimonial',
          'posts_per_page' => '3'
        );
        $testimonials = new WP_Query($home_args3);
        if ($testimonials->have_posts()) {while ($testimonials->have_posts()) {$testimonials->the_post();
          $testimonial_content = get_post_meta( $post->ID, '_cmb_testimonial_quote', true );
          $testimonial_source_name = get_post_meta( $post->ID, '_cmb_testimonial_source_name', true );
          $testimonial_source_title = get_post_meta( $post->ID, '_cmb_testimonial_source_title', true );
      ?>
        <div class="testimonial">
          <blockquote><?php echo $testimonial_content; ?></blockquote>
          <cite class="left">
            <strong><?php echo $testimonial_source_name; ?></strong>
            <?php echo $testimonial_source_title; ?>
          </cite>
        </div>
        <div class="bordered-image left"><?php the_post_thumbnail('testimonial'); ?></div>
    <?php }} ?>
     </div>

    </div>

  </div>

</div>
<!-- begin olark code -->
<script data-cfasync="false" type='text/javascript'>/*<![CDATA[*/window.olark||(function(c){var f=window,d=document,l=f.location.protocol=="https:"?"https:":"http:",z=c.name,r="load";var nt=function(){
f[z]=function(){
(a.s=a.s||[]).push(arguments)};var a=f[z]._={
},q=c.methods.length;while(q--){(function(n){f[z][n]=function(){
f[z]("call",n,arguments)}})(c.methods[q])}a.l=c.loader;a.i=nt;a.p={
0:+new Date};a.P=function(u){
a.p[u]=new Date-a.p[0]};function s(){
a.P(r);f[z](r)}f.addEventListener?f.addEventListener(r,s,false):f.attachEvent("on"+r,s);var ld=function(){function p(hd){
hd="head";return["<",hd,"></",hd,"><",i,' onl' + 'oad="var d=',g,";d.getElementsByTagName('head')[0].",j,"(d.",h,"('script')).",k,"='",l,"//",a.l,"'",'"',"></",i,">"].join("")}var i="body",m=d[i];if(!m){
return setTimeout(ld,100)}a.P(1);var j="appendChild",h="createElement",k="src",n=d[h]("div"),v=n[j](d[h](z)),b=d[h]("iframe"),g="document",e="domain",o;n.style.display="none";m.insertBefore(n,m.firstChild).id=z;b.frameBorder="0";b.id=z+"-loader";if(/MSIE[ ]+6/.test(navigator.userAgent)){
b.src="javascript:false"}b.allowTransparency="true";v[j](b);try{
b.contentWindow[g].open()}catch(w){
c[e]=d[e];o="javascript:var d="+g+".open();d.domain='"+d.domain+"';";b[k]=o+"void(0);"}try{
var t=b.contentWindow[g];t.write(p());t.close()}catch(x){
b[k]=o+'d.write("'+p().replace(/"/g,String.fromCharCode(92)+'"')+'");d.close();'}a.P(2)};ld()};nt()})({
loader: "static.olark.com/jsclient/loader0.js",name:"olark",methods:["configure","extend","declare","identify"]});
/* custom configuration goes here (www.olark.com/documentation) */
olark.identify('8425-248-10-1963');/*]]>*/</script><noscript><a href="https://www.olark.com/site/8425-248-10-1963/contact" title="Contact us" target="_blank">Questions? Feedback?</a> powered by <a href="http://www.olark.com?welcome" title="Olark live chat software">Olark live chat software</a></noscript>
<!-- end olark code -->
<?php get_footer(); ?>