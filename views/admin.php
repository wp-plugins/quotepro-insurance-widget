<p>
<label for="<?php echo $titleId; ?>"><?php _e('Title','quotepro-insurance-widget'); ?></label>
<input class="widefat" id="<?php echo $titleId; ?>" name="<?php echo $titleName; ?>" value="<?php echo esc_attr($title); ?>"/>
</p>

<p>
<label for="<?php echo $urlId; ?>"><?php _e('Quotepro Retail Website Url','quotepro-insurance-widget'); ?></label>
<input class="widefat" id="<?php echo $urlId; ?>" name="<?php echo $urlName; ?>" value="<?php echo esc_attr($url); ?>"/>
<br/><a href="http://retail.quotepro.com/RetailWebSite/en/Builder/Wizard/StepOne" target="_blank">Request A Url</a>
</p>

<p>
<label for="<?php echo $affId; ?>"><?php _e('Affiliate Id (optional)','quotepro-insurance-widget'); ?></label>
<input type="number" class="widefat" id="<?php echo $affId; ?>" name="<?php echo $affName; ?>" value="<?php echo esc_attr($aff); ?>"/>
</p>

<p>
<label><?php _e('Language','quotepro-insurance-widget'); ?></label>
<input type="radio"
       name="<?php echo $langName; ?>" value="en"
       <?php if ( $lang == "en") { echo "checked"; } ?>
/> English
<input type="radio"
       name="<?php echo $langName; ?>" value="es"
       <?php if ( $lang == "es") { echo "checked"; } ?>
/> Espa&ntilde;ol
</p>
<p>
<label><?php _e('Insurance Types','quotepro-insurance-widget'); ?></label>
<input type="checkbox" id="<?php echo $autoId; ?>" 
       name="<?php echo $autoName; ?>" value="1"
       <?php echo $auto; ?>
/> Auto
<input type="checkbox" id="<?php echo $cycleId; ?>" 
       name="<?php echo $cycleName; ?>" value="1"
       <?php echo $cycle; ?>
/> Motorcycle
</p>