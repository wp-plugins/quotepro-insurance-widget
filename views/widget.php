<form class="quotepro-insurance-widget" action="<?php echo esc_attr($url); ?>/<?php echo esc_attr($lang); ?>/Home/Prefill">
  	<?php 
	if ( !empty( $title ) ) {
        echo $args['before_title'] . apply_filters( 'widget_title',  $title, $instance, $this->id_base ) . $args['after_title'];
	}

    $count = ($auto ? 1 : 0) + ($cycle ? 1:0) + ($home ? 1:0) + ($mexico ? 1:0);
    if ( $count > 1 ) {
    ?>
	    <select name="InsuranceType" class="InsuranceType" required>
	      <option value><?php _e('Insurance Type','quotepro-insurance-widget'); ?></option>
	      <?php
	      if ( $auto ) { ?>
	      <option value="Auto"><?php _e('Auto','quotepro-insurance-widget'); ?></option>
	      <?php }
	      if ( $cycle ) { ?>
	      <option value="Motorcycle"><?php _e('Motorcycle','quotepro-insurance-widget'); ?></option>
	      <?php }
	      if ( $home ) { ?>
	      <option value="Home"><?php _e('Home Owners','quotepro-insurance-widget'); ?></option>
	      <?php }
	      if ( $mexico ) { ?>
	      <option value="Mexico"><?php _e('Mexico','quotepro-insurance-widget'); ?></option>
		  <?php } ?>
	    </select>
	<?php
	} else if ( $cycle ) { 
	?>
		<input type="hidden" name="InsuranceType" value="Motorcycle"/>
	<?php 
	} else if ( $home ) {
	?>
		<input type="hidden" name="InsuranceType" value="Home"/>
	<?php
	} else if ( $mexico ) {
	?>
		<input type="hidden" name="InsuranceType" value="Mexico"/>
	<?php
	}
	if ( !empty( $aff ) ) {
  	?>
		<input type="hidden" name="affid" value="<?php echo esc_attr($aff); ?>"/>
	<?php
	}
	?>

	<input  name="ZipCode" type="number" class="ZipCode"  
			placeholder="<?php esc_attr_e('Enter Zip Code','quotepro-insurance-widget'); ?>" 
			maxlength="5" required
	/>

	<input  type="submit" class="submit" 
			value="<?php esc_attr_e('GO &gt;','quotepro-insurance-widget'); ?>" 
	/>

	<a class="qiw-colorbox" title="<?php echo esc_attr($title); ?>" href="#"></a>
</form>
