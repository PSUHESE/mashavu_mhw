<article class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php print $unpublished; ?>

  <header class="clearfix<?php $picture ? print ' with-picture' : ''; ?>">
    <?php print $picture; ?>
    <?php print render($title_prefix); ?>
    <?php if ($title): ?>
      
    <?php endif; ?>
    <?php print render($title_suffix); ?>
    <?php if ($new): ?>
      <em class="new"><?php print $new ?></em>
    <?php endif; ?>
    <p class="submitted">
		<?php
			//By:   Mike Ghen 
			//Date: 5/21/2012
			//Description: This Modifies the submitted user and date info.
			//             Code from: http://drupal.org/node/1072640
			if ($submitted) { 
				echo "Submitted on " . date( "F j, Y",$node->created);  
			} 
		?>
	</p>
  </header>

  <div<?php print $content_attributes; ?>>
    <?php
      hide($content['links']);
      print render($content);
    ?>
    <?php if ($signature): ?>
      <aside class="user-signature clearfix">
        <?php print $signature;  ?>
      </aside>
    <?php endif; ?>
  </div>

  

</article>
