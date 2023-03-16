<?php
/** 
 * @package 	MYPLUGIN
 * @subpackage 	MYPLUGIN/includes
 * @since 		1.0
 * @author 		JRETECH
 */
?>
<form method="post" action="options.php" enctype="multipart/form-data">
	<?php
		settings_fields( 'my_plugin_setting_option' );
		do_settings_sections( 'my_plugin_setting_option' );
		submit_button();
	?>
</form>
</div>