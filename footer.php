</div>

  
</div>

<footer id="footer" role="contentinfo" itemscope itemtype="http://schema.org/WPFooter">
  
  <div class="mui-container-fluid">
  <nav class="mui-row" role="navigation">
    <div class="mui-col-sm-10 mui-col-sm-offset-1">
      <div class="space-top"></div>
      <ul class="mui-list--inline mui--text-body2 mui--text-white">
        <li><a href="/support">Support</a></li>
        <li><a href="/feedback?next=https%3A%2F%2Fwww.muicss.com%2Fdocs%2Fv1%2Fexample-layouts%2Flanding-page">Feedback</a></li>
        <li><a href="/newsletter">Newsletter</a></li>
        <li><a href="https://twitter.com/mui_css">Twitter</a></li>
        <li><a href="https://www.facebook.com/muicss">Facebook</a></li>
        <li><a href="https://github.com/muicss/mui">Github</a></li>
      </ul>
      <div class="mui--text-caption mui--text-white"><p class="source-org copyright">&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?></p><a href="http://www.saivarun.com">Designed by Sai Vaun KN</a></div>
    </div>
  </nav>
</div>

  
</footer>




		</div>

		<?php // all js scripts are loaded in library/bones.php ?>
		<?php wp_footer(); ?>
<script>
var $titleEls = $('strong', $sidedrawerEl);

$titleEls
  .next()
  .hide();

$titleEls.on('click', function() {
  $(this).next().slideToggle(200);
});</script>

    <script> jQuery(function($) {
  var $bodyEl = $('body'),
      $sidedrawerEl = $('#sidedrawer');


  function showSidedrawer() {
    // show overlay
    var options = {
      onclose: function() {
        $sidedrawerEl
          .removeClass('active')
          .appendTo(document.body);
      }
    };

    var $overlayEl = $(mui.overlay('on', options));

    // show element
    $sidedrawerEl.appendTo($overlayEl);
    setTimeout(function() {
      $sidedrawerEl.addClass('active');
    }, 20);
  }


  function hideSidedrawer() {
    $bodyEl.toggleClass('hide-sidedrawer');
  }


  $('.js-show-sidedrawer').on('click', showSidedrawer);
  $('.js-hide-sidedrawer').on('click', hideSidedrawer);
}); </script>
	</body>

</html> <!-- end of site. what a ride! -->
