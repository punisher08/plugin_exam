<?php
/** 
 * @package 	MYPLUGIN
 * @subpackage 	MYPLUGIN/includes
 * @since 		1.0
 * @author 		JRETECH
 */

add_action('admin_init', 'my_plugin_register_settings');

function my_plugin_register_settings() {
    add_settings_section(
		'my_plugin_setting_section',
		'My plugin Settings',
		'my_plugin_setting_section_callback',
		'my_plugin_setting_option'
	);
    add_settings_field( 
		'chart_bg_color',
		'Chart Background Color',
		'chart_bg_color_callback',
		'my_plugin_setting_option',
		'my_plugin_setting_section'
	);
    add_settings_field( 
		'chart_border_color',
		'Chart Background Color',
		'chart_border_color_callback',
		'my_plugin_setting_option',
		'my_plugin_setting_section'
	);

    add_settings_field( 
		'chart_post_data',
		'Chart Background Color',
		'chart_post_data_callback',
		'my_plugin_setting_option',
		'my_plugin_setting_section',
		array(
			'post' => 'post',
			'book' => 'book',
		)
	);
}

register_setting( 'my_plugin_setting_option', 'chart_bg_color' );
register_setting( 'my_plugin_setting_option', 'chart_border_color' );
register_setting( 'my_plugin_setting_option', 'chart_post_data' );

function my_plugin_setting_section_callback(){
    echo '<p>Testing</p>';
}
function chart_bg_color_callback(){
	$chart_bg_color = get_option( 'chart_bg_color', 'rgba(54, 162, 235, 0.2)' );
	$html = '<input type="text" id="chart_bg_color" name="chart_bg_color" value="'.esc_attr__( $chart_bg_color ).'" class="ndf_colorpicker" />';
	echo $html;
}
function chart_border_color_callback(){
	$chart_border_color = get_option( 'chart_border_color', 'rgba(54, 162, 235, 1)' );
	$html = '<input type="text" id="chart_border_color" name="chart_border_color" value="'.esc_attr__( $chart_border_color ).'" class="ndf_colorpicker" />';
	echo $html;
}
function chart_post_data_callback($args) {
	$chart_post_data = get_option( 'chart_post_data', 'post' );

	$html = "<select name='chart_post_data' class='ndf_dropdown'>";
	foreach( $args as $option_key => $option_value ){
		$html .= "<option value='".$option_key."' ".selected( $chart_post_data, $option_key, false ).">".$option_value."</option>";
	}
	$html .= "</select>";
	echo $html;
}
