<form class="quotepro-insurance-widget" action="<?php echo $url; ?>/<?php echo $lang; ?>/Home/Prefill">
  <div class="widget-title"><?php _e($title); ?></div>

  <?php if ( $auto && $cycle ) { ?>
    <p>
    <label class="alignleft">Insurance Type</label> 
    <select name="InsuranceType" class="InsuranceType alignleft col-380" required>
      <option value>- Select -</option>
      <option>Auto</option>
      <option>Motorcycle</option>
    </select>
    <p>
  <?php } else if ( $cycle ) { ?>
    <input type="hidden" name="InsuranceType" value="Motorcycle"/>
  <?php }
     if ( !empty( $affid ) ) {
  ?>
	  <input type="hidden" name="affid" value="<?php echo $aff; ?>"/>
  <?php } ?>

  <input name="ZipCode" class="number" class="ZipCode col-460"  placeholder="<?php _e('Enter Zip Code'); ?>" maxlength="5" required/>
  <input type="submit" class="submit" value="Go" />
  <a class="colorbox" title="<?php _e($title); ?>" href="#"></a>
</form>
