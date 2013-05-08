<?php include 'page.header.inc'; ?>
<div id="body-wrap">
<div class="container">
	<div class="row">
<?php
if ($is_front):?>
		<div class="sixcol">
        	<div class="columnhead"><h2>News</h2></div>
                 <?php if ($content): ?>
                  <div class='page-content content-wrapper clear-block'><?php print $content ?></div>
                 <?php endif; ?>
                  <?php print $content_region ?>
                </div>
		<div class="sixcol last">
                <div class="columnhead"><h2>Documents</h2></div>
                <?php if ($right) print $right ?>
                </div>
<?php else: ?>
                <div class="ninecol">
        	<div class="columnhead"><h2>Documents</h2></div>
                 <?php if ($content): ?>
                  <div class='page-content content-wrapper clear-block'><?php print $content ?></div>
                 <?php endif; ?>
                  <?php print $content_region ?>
                </div>
		<div class="threecol last">
        	<h2>Related media</h2>
        	<ul>
            	<li>This is the title of a news article</li>
                <li>Another news article title comes here</li>
            	<li>This is the title of a news article</li>
                <li>Another news article title comes here</li>
            	<li>This is the title of a news article</li>
                <li>Another news article title comes here</li>
            	<li>This is the title of a news article</li>
                <li>Another news article title comes here</li>
            	<li>This is the title of a news article</li>
                <li>Another news article title comes here</li>
            	<li>This is the title of a news article</li>
                <li>Another news article title comes here</li>
            	<li>This is the title of a news article</li>
                <li>Another news article title comes here</li>
            </ul>
        </div>
<?php endif; ?>
            


        </div>
</div>

<?php include 'page.footer.inc'; ?>
