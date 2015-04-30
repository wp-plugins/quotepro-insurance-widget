<form class="quotepro-insurance-widget" action="<?php echo $url; ?>/<?php echo $lang; ?>/Home/Prefill">
  	<?php 
	if ( !empty( $title ) ) {
        echo $args['before_title'] . apply_filters( 'widget_title',  $title, $instance, $this->id_base ) . $args['after_title'];
	}

    if ( $auto && $cycle ) { 
    ?>
	    <select name="InsuranceType" class="InsuranceType" required>
	      <option value><?php _e('Insurance Type','quotepro-insurance-widget'); ?></option>
	      <option value="Auto"><?php _e('Auto','quotepro-insurance-widget'); ?></option>
	      <option value="Motorcycle"><?php _e('Motorcycle','quotepro-insurance-widget'); ?></option>
	    </select>
	<?php
	} else if ( $cycle ) { 
	?>
		<input type="hidden" name="InsuranceType" value="Motorcycle"/>
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
