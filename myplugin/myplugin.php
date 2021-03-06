<?php 
/**
 * Plugin Name: Name Of The Plugin
 * Plugin URI: http://URI_Of_Page_Describing_Plugin_and_Updates
 * Description: A brief description of the Plugin.
 * Version: The Plugin's Version Number, e.g.: 1.0
 * Author: Name Of The Plugin Author
 * Author URI: http://URI_Of_The_Plugin_Author
 * License: A "Slug" license name e.g. GPL2
 */




/*  Copyright YEAR  PLUGIN_AUTHOR_NAME  (email : PLUGIN AUTHOR EMAIL)

    This program is free software; you can redistribute it and/or modify
    it under the terms of the GNU General Public License, version 2, as 
    published by the Free Software Foundation.

    This program is distributed in the hope that it will be useful,
    but WITHOUT ANY WARRANTY; without even the implied warranty of
    MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
    GNU General Public License for more details.

    You should have received a copy of the GNU General Public License
    along with this program; if not, write to the Free Software
    Foundation, Inc., 51 Franklin St, Fifth Floor, Boston, MA  02110-1301  USA
*/



/*  = Internationalizing Your Plugin 
*******************************************/

load_plugin_textdomain('your-unique-name', false, basename( dirname( __FILE__ ) ) . '/languages' );


/*  = Activation 
*******************************************/

function myplugin_activate() {

    // Activation code here...
}
register_activation_hook( __FILE__, 'myplugin_activate' );


/*  = Dectivation 
*******************************************/

function myplugin_deactivate() {

    // Dectivation code here...
}


register_deactivation_hook( __FILE__, 'myplugin_deactivate' );



/*  = Uninstall 
*******************************************/

function myplugin_uninstall() {

    // Uninstall code here...
}


register_uninstall_hook( __FILE__, 'myplugin_uninstall' );



?>