<?php

/*
 * Plugin Name:    		ACF Addon: Range Slider
 * Plugin URI:     		https://thowzif.com
 * Description:    		Number Slider field for Advanced Custom Fields
 * Version:        		0.5.9
 * Author:         		Abdullah Thowzif Hameed
 * Author URI:     		https://thowzif.com
 * License:       	 	GPLv3 or later
 * License URI:    		http://www.gnu.org/licenses/gpl-2.0.html
 * GitHub Plugin URI: 	qstudio/advanced-custom-fields-number-slider
*/

/*
 * This plugin uses the Simpler Slider jQuery library by James Smith - http://loopj.com/jquery-simple-slider/
 */

class acf_field_number_slider_plugin{
	
    /*
	*  Construct
	*/
    public function __construct(){
        
        // set text domain
        $mo_file = trailingslashit( dirname(__FILE__)) . 'lang/' . 'advanced-custom-fields-number-slider' . '-' . get_locale() . '.mo';
        load_textdomain( 'advanced-custom-fields-number-slider', $mo_file );

        // version 4+
        add_action( 'acf/register_fields', array( $this, 'register_fields' ) );

        // version 3- REMOVED
        // add_action( 'init', array( $this, 'init' ));
		
		// add config ##
        add_action('acf/include_field_types', array($this, 'include_field_types_number_slider'));	
        
    }

    /*
    *  Init
    */
	/*
    public function init(){

        if ( function_exists('register_field') ) {
            
            register_field( 'acf_field_number_slider', dirname(__FILE__) . '/number-slider-v3.php' );

        }

    }
	*/
	
    /*
    *  register_fields
    */
	public function register_fields(){

		include_once('number-slider-v4.php');
		
    }
    
    public function include_field_types_number_slider( $version ) {
	
        include_once('number-slider-v5.php');
		
    }

}

new acf_field_number_slider_plugin();
