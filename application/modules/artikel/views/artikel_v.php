
<?php
// $this->config->set_item('meta_article', true);
set_config('meta_article', true);

 ?>
<!-- popup -->
<?php if ($popups): ?>
<style media="screen">

/*.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: visible;
  opacity: 1;
}*/
.overlay {
  position: fixed;
  top: 0;
  bottom: 0;
  left: 0;
  right: 0;
  background: rgba(0, 0, 0, 0.7);
  transition: opacity 500ms;
  visibility: visible;
  opacity: 1;
}
.overlay:target {
  visibility: hidden;
  opacity: 0;
}
/*.close:target {
  visibility: hidden;
  opacity: 0;
}*/
.popup {
  margin: 100px auto;
  /*margin-top: 100px;*/
  padding: 0px;
  /*background: #fff;*/
  border-radius: 5px;
  /*max-width: 640px;*/
  position: relative;
  transition: all 5s ease-in-out;
}
.popup .close {
  position: absolute;
  top: -20px;
  right: -15px;
  /*transition: all 200ms;*/
  font-size: 40px;
  /*font-weight: bold;*/
  text-decoration: none;
  color: #06D85F;
}
.popup .close:hover {
  color: #06D85F;
}
.popup .content {
  max-height: 30%;
  overflow: auto;
}
@media screen and (max-width: 700px){
  .box{
    width: 70%;
  }
  .popup{
    width: 70%;
  }
}

</style>
<div id="popup1" class="overlay">
  <div class="row">
        <div class="col-sm-6 col-sm-offset-5">
          <div class="popup" id="kkk">
            <a class="close" href="#popup1">&times;</a>
            <a href="<?php echo $popups->popup_link ?>" target="_blank">
              <img class="img-responsive" src="<?php echo base_url($popups->popup_img) ?>" alt="<?php echo $popups->popup_alt ?>" />
            </a>
          </div>
      </div>
	</div>
</div>
<?php endif; ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/id_ID/sdk.js#xfbml=1&version=v2.8&appId=199212920500045";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));
</script>
<div class="row">
      <!-- left sec Start -->
      <div class="col-md-11 col-sm-11">
        <div class="row">
          <!-- post details start -->
          <div class="col-sm-16">
            <div class="row">
              <div class="sec-topic col-sm-16">
                <div class="row">
                  <div class="col-sm-16">
                    <figure>
                      <img width="1000" height="606" alt="<?= $article->news_title ?>" src="<?= $article->news_thumb ?>" class="img-thumbnail">
                      <figcaption class="text-italic"><em><?php echo $article->caption; ?></em></figcaption>
                    </figure>
                  </div>
                  <div class="col-sm-16 sec-info">
                    <h3><?php echo $article->news_title; ?></h3>
                    <div class="text-danger sub-info-bordered">
                      <div class="author"><span class="ion-person icon"></span>Oleh : <?= $article->news_creator ?></div>
                      <div class="time"><span class="ion-android-data icon"></span><?= $this->format->date_indonesia($article->news_timestamp); ?></div>
                      <div class="comments"><span class="ion-eye icon"></span><?= $article->news_views ?></div>
                    </div>
                    <div id="shared">
                      <span class='st_facebook_hcount' displayText='Facebook'></span>
                      <span class='st_whatsapp_hcount' displayText='WhatsApp'></span>
                      <span class='st__hcount' displayText=''></span>
                      <span class='st_twitter_hcount' displayText='Tweet'></span>
                      <span class='st_linkedin_hcount' displayText='LinkedIn'></span>
                      <span class='st_pinterest_hcount' displayText='Pinterest'></span>
                      <span class='st_email_hcount' displayText='Email'></span>
                      <!-- AddToAny END -->
                      <div class="fb-like" data-href="https://facebook.com/terasmediatama" data-layout="button_count" data-action="like" data-size="small" data-show-faces="true" data-share="false"></div>
                    </div>
                    <br>
                  <article>
                    <!-- start article -->
                    <?php echo $article->news_desc ?>
                    <!-- end of article -->
                  </article>
                  </div>
                </div>
              </div>
              <div class="col-sm-16">
                <div id="vc-feelback-main" data-access-token="8bccc0c22efcfed0d36b71eff420babf" data-display-type="4"></div>

                <script>
                (function() {
                var v = document.createElement('script'); v.async = true;
                v.src = "http://assets-prod.vicomi.com/vicomi.js";
                var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(v, s);
                })();
                </script>
              </div>
              <div class="col-sm-16 comments-area">
                <div class="main-title-outer pull-left">
                  <div class="main-title">Komentar</div>
                </div>
                <div class="row">
                  <div class="col-xs-16 col-sm-16 col-md-16">
                    <div class="fb-comments" data-href="<?php echo current_url(); ?>"  data-num-posts="2" data-width="100%" mobile="auto-detect"></div>
                  </div>
                </div>
                  <!-- FACEBOOK COMMENT -->
                  <!-- END FACEBOOK COMMENT -->
              </div>
            </div>
          </div>
          <!-- post details end -->
        </div>
      </div>
      <!-- left sec End -->
      <!-- right sec Start -->
      <div class="col-sm-5 hidden-xs right-sec">
        <div class="bordered">
          <div class="row ">
            <div class="col-sm-16 bt-space">
              <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
              <!-- homepage -->
              <ins class="adsbygoogle"
                   style="display:block"
                   data-ad-client="ca-pub-1161473705566559"
                   data-ad-slot="5244050428"
                   data-ad-format="auto"></ins>
              <script>
              (adsbygoogle = window.adsbygoogle || []).push({});
              </script>
              <?php echo modules::run('ads/get_kaa', 'artikel') ?>
            </div>
            <!-- flicker imgs start -->
            <div class="col-sm-16 bt-space">
              <div class="main-title-outer pull-left">
                <div class="main-title full">Popular news</div>
                <ul class="list-unstyled">
                  <?php echo modules::run('berita/get_popular'); ?>

                </ul>
              </div>
            </div>
            <!-- flicker imgs end -->
          </div>
        </div>
      </div>
      <!-- Right Sec End -->
    </div>
<script type="text/javascript">

</script>
