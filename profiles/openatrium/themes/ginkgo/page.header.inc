<!doctype html>
<html lang="en">
  <head>
    <?php print $head ?>
    <?php print $styles ?>
    <?php print $scripts ?>
    <?php print $ie ?>
<?php
global $user;
if ( $user->uid ) {

}
else { ?>

    <link rel="stylesheet" type="text/css" href="<?php print base_path() . path_to_theme() . '/' . 'camera.css'; ?>" />   
    
    <script type='text/javascript' src="<?php print base_path() . path_to_theme() . '/' . 'js/jquery.min.js'; ?>"></script>
    <script type='text/javascript' src="<?php print base_path() . path_to_theme() . '/' . 'js/jquery.mobile.customized.min.js'; ?>"></script>
    <script type='text/javascript' src="<?php print base_path() . path_to_theme() . '/' . 'js/jquery.easing.1.3.js'; ?>"></script> 
    <script type='text/javascript' src="<?php print base_path() . path_to_theme() . '/' . 'js/camera.js'; ?>"></script>
    <script type="text/javascript" src="<?php print base_path() . path_to_theme() . '/' . 'js/css3-mediaqueries.js'; ?>"></script>     
    <script type="text/javascript">
	jQuery(document).ready(function($){
	
		/* prepend menu icon */
		$('#nav-wrap').prepend('<div id="menu-icon">Menu</div>');
		
		/* toggle nav */
		$("#menu-icon").on("click", function(){
			$("#nav").slideToggle();
			$(this).toggleClass("active");
		});
	
	});
	</script>      
    <script>
		jQuery(function(){
			
			jQuery('#camera_wrap_1').camera({
				thumbnails: false
			});

			jQuery('#camera_wrap_2').camera({
				height: 'auto',
				loader: 'bar',
				pagination: false,
				thumbnails: true
			});
		});
	</script> 
<?php }
?>

    <title><?php print $head_title ?></title>
  </head>

<body <?php print drupal_attributes($attr) ?>>
<div class="header">
   <div class="container">
      <div class="row">
         <div class="fourcol">
           <div id="logo">
              <img src="<?php print base_path() . path_to_theme() . '/' . 'images/logo.png'; ?>"/>
           </div>          
         </div>
	 <div class="fourcol">    
         </div>
         <div class="fourcol last">
<?php
global $user;
if ( $user->uid ) {
print $search;
?>
<div class="upload"><span>&#43;</span><a href="/?q=node/add/file">Upload</a></div>
<?php
}
else { ?>

  <?php if ($content): ?>
    <div class='page-content content-wrapper clear-block'><?php print $content ?></div>
  <?php endif; ?>
  <?php print $content_region ?>
               

<?php }
?>    
	 </div>
       </div>
   </div>    
   <div class="container">
   <div class="row">
      	
<?php
global $user;
if ( $user->uid ) { ?>

    <div id="twelvecol">
    <nav id="nav-wrap">
    <?php print $navigation ?>
    </nav>
    </div>

<?php }
else {  }
?>
      
   </div></div>
</div>

