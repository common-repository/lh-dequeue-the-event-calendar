<?php
/**
 * Plugin Name: LH Dequeue the Event Calendar
 * Plugin URI: https://lhero.org/portfolio/lh-dequeue-the-event-calendar/
 * Description: Plugin to dequeue the Event Calendar styles and scripts, where they are not needed
 * Version: 1.00
 * Author: Peter Shaw
 * Author URI: https://shawfactor.com/
*/


if ( ! defined( 'ABSPATH' ) ) exit; // Exit if accessed directly

if (!class_exists('LH_Dequeue_the_event_calendar_plugin')) {


class LH_Dequeue_the_event_calendar_plugin {
    

private static $instance;
    
public function dequeue_scripts() {
    
       if (!is_admin()){

if (!function_exists('tribe_is_event') or (strpos($_SERVER['REQUEST_URI'], 'events') == false) or !tribe_is_event()){


wp_dequeue_script( 'tribe-common' );
wp_deregister_script( 'tribe-common' );

wp_dequeue_script( 'tribe-buttonset' );
wp_deregister_script( 'tribe-buttonset' );

wp_dequeue_script( 'tribe-dependency' );
wp_deregister_script( 'tribe-dependency' );

wp_dequeue_script( 'tribe-validation' );
wp_deregister_script( 'tribe-validation' );

wp_dequeue_script( 'tribe-pue-notices' );
wp_deregister_script( 'tribe-pue-notices' );

wp_dequeue_script( 'event-tickets-admin-js' );
wp_deregister_script( 'event-tickets-admin-js' );

wp_dequeue_script( 'event-tickets-tpp-admin-js' );
wp_deregister_script( 'event-tickets-tpp-admin-js' );

wp_dequeue_script( 'event-tickets-plus-attendees-list-js' );
wp_deregister_script( 'event-tickets-plus-attendees-list-js' );

wp_dequeue_script( 'jquery-deparam' );
wp_deregister_script( 'jquery-deparam' );


wp_dequeue_script( 'event-tickets-admin-accordion-js' );
wp_deregister_script( 'event-tickets-admin-accordion-js' );

wp_dequeue_script( 'datatables-fixedheader' );
wp_deregister_script( 'datatables-fixedheader' );

wp_dequeue_script( 'jquery-cookie' );
wp_deregister_script( 'jquery-cookie' );
    
    
}

}



}

public function dequeue_styles() {
    
           if (!is_admin()){

if (!function_exists('tribe_is_event') or (strpos($_SERVER['REQUEST_URI'], 'events') == false) or !tribe_is_event()){
    
    
        wp_dequeue_style('event-tickets-admin-refresh-css');
		wp_deregister_style( 'event-tickets-admin-refresh-css' );
		
		wp_dequeue_style('tribe-validation-style');
		wp_deregister_style( 'tribe-validation-style' );
		
		wp_dequeue_style('event-tickets-admin-accordion-css');
		wp_deregister_style( 'event-tickets-admin-accordion-css' );
		
		wp_dequeue_style('tribe-events-block-event-venue');
		wp_deregister_style( 'tribe-events-block-event-venue' );
		
		wp_dequeue_style('tribe-events-block-classic-event-details');
		wp_deregister_style( 'tribe-events-block-classic-event-details' );
		
		wp_dequeue_style('tribe-events-block-event-datetime');
		wp_deregister_style( 'tribe-events-block-event-datetime' );
		
		wp_dequeue_style('tribe-events-block-event-links');
		wp_deregister_style( 'tribe-events-block-event-links' );
		
		wp_dequeue_style('tribe-tooltip');
		wp_deregister_style( 'tribe-tooltip' );
    
    
    
}

}
    
    
    
}

public function plugins_loaded(){
         
    if (!is_admin()){
        
        
    add_action( 'wp_print_scripts', array($this,"dequeue_scripts"), 1000 );
  
    add_action('wp_enqueue_scripts', array($this,"dequeue_styles"),100000);
        
        
    }
    
    
}

    




    /**
     * Gets an instance of our plugin.
     *
     * using the singleton pattern
     */
    public static function get_instance(){
        if (null === self::$instance) {
            self::$instance = new self();
        }
 
        return self::$instance;
    }
    
    
    
    public function __construct() {
        
        
	 //run our hooks on plugins loaded to as we may need checks       
    add_action( 'plugins_loaded', array($this,'plugins_loaded'));
        

}
    
    
}

$lh_dequeue_the_event_calendar_instance = LH_Dequeue_the_event_calendar_plugin::get_instance();

}




?>