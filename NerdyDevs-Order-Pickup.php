<?php
/**
 * @package NerdyDevsOrderPickUpPlugin
 */
/*
Plugin Name: NerdyDevs Order Pickup
Plugin URI: https://github.com/Kris-Cloutier/NerdyDevs-Order-Pickup
Description: A plugin for woocommerce to set a pick up time and date for an order.
Version: 1.0.0
Author: NerdyDevs
Author URI: https://www.nerdydevs.com
License: GPLv2 or Later
Text-Domain: NerdyDevs-Order-Pickup
*/

/*
NerdyDevs Order PickUp Plugin
Copyright (C) 2018  NerdyDevs

This program is free software; you can redistribute it and/or
modify it under the terms of the GNU General Public License
as published by the Free Software Foundation; either version 2
of the License, or (at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA  02110-1301, USA.
 */

defined('ABSPATH') or die('What in tarnations are ya doin there? GET OFF MY LAWN!');

class NerdyDevsOPP {
    function activate() {

    }

    function deactivate() {

    }

    function unistall() {

    }


}

if(class_exists('NerdyDevsOPP')){
    $nerdyDevsOPP = new NerdyDevsOPP();
}

//activate
register_activation_hook( __FILE__, array($nerdyDevsOPP, 'activate') );

//deactivate
register_deactivation_hook( __FILE__, array($nerdyDevsOPP, 'deactivate') );

//unistall

