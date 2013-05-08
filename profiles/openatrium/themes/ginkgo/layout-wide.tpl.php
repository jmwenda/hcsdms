<?php include 'page.header.inc'; ?>



	<div class="container">
	<div class="row">
         <div class='page-region clear-block'>
  <?php if ($content): ?>
    <div class='page-content content-wrapper clear-block'><?php print $content ?></div>
  <?php endif; ?>
  <?php print $content_region ?>
</div></div>

<?php include 'page.footer.inc'; ?>
