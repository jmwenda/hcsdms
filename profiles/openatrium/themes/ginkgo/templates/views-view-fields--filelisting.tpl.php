
<?php if ($enable_grouping): ?><div class='grouped clear-block <?php print $classes ?>'><?php endif; ?>

<?php foreach ($grouped as $group => $fields): ?>

  <?php if ($enable_grouping): ?><div class='grouped-<?php print $group ?> clear-block'><?php endif; ?>

<?php
if ($fields['filemime']->content == 'image/jpeg')
{
   $row_style = 'description-word';
  
}
if ($fields['filemime']->content == 'application/pdf')
{
   $row_style = 'description-pdf';
  
}
if ($fields['filemime']->content == 'application/xls')
{
   $row_style = 'description-excel';
  
}
?>
        	<div class="downloadlist">
<?php print $row_style->content;?>
                
                 <div><p class="downloaddescription <?php print $row_style;?>"> Description:
                 <?php $fields['description']->content;?></div>
                <p class="downloadfiledetails"><a href="<?php print $fields['filepath']->content;?>">Download</a> <?php print $fields['filename']->content;?> <?php print $fields['filesize']->content;?> uploaded on <?php print $fields['timestamp']->content;?></p>
            </div>

  <?php if ($enable_grouping): ?></div><?php endif; ?>

<?php endforeach; ?>

<?php if ($enable_grouping): ?></div><?php endif; 
