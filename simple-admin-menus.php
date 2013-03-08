<?php
/**
 * Plugin Name: Simple admin menus
 * Plugin URI: http://wp26.com/wordpress-plugins
 * Description: Hides unwanted menus in WordPress admin.
 * Author: Ravi
 * Author URI: http://wp26.com/about
 * Version: 0.2.0
 * License: GPLv2 or later
 */

/*  

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

/**
 * Remove unwanted menus in dashboard
 */
function remove_menus () {
global $menu;
	$restricted = array(__('Appearance'), __('Settings'), __('Links'), __('Users'), __('Tools'));
	end ($menu);
	while (prev($menu)){
		$value = explode(' ',$menu[key($menu)][0]);
		if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
	}
}
add_action('admin_menu', 'remove_menus');
?>
