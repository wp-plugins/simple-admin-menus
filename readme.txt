===Simple Admin Menus===

Contributors: ravidreams

Tags: wordpress admin, menu, menus, clutter

Donate link: http://wp26.com/

Requires at least: 3.0

Tested up to: 3.5.1

Stable tag: 0.2.0



Hides unwanted or least used menus from WordPress admin to reduce clutter.



== Description ==



This plugin is for WordPress developers working with clients and for people who want minimalism in WordPress admin. It hides unwanted or least used menus from WordPress admin to reduce clutter. For example, if you don't want your client to play with WordPress settings, change theme or add plugins you can hide them. If you don't use tools or users or links menu often you can hide them. 

The hidden menus can be viewed again by deactivating the plugin and each menu item is visible by directly visiting the URL. So, there is no risk and yet it is not completely tamper proof for the clients. The main idea is to reduce clutter in WordPress admin and it be used for this purpose only.

There are white label CMS plugins and user role plugins which offer similar features but this is a simple plugin that just does one thing well.



== Installation ==

1. Upload the simple admin menus folder to /wp-content/plugins/.

2. Activate the plugin through the "Plugins" menu in WordPress.

3. You will see the following menus hidden by default: Links, Appearance, Users, Tools and Settings. There is no settings page.

If you want to show some of them or hide other menus, edit the following line in the plugin file:

$restricted = array(__('Appearance'), __('Settings'), __('Links'), __('Users'), __('Tools'));


== Changelog ==

= 0.2.0 =
* Adding screenshot

= 0.1.0 =
* This is the first version of this plugin.

== Frequently Asked Questions ==

* How do I show or hide some menus?

There is no settings page yet. It may be done in a future version. If you want to show or hide some menus, edit the following line in the plugin file:

$restricted = array(__('Appearance'), __('Settings'), __('Links'), __('Users'), __('Tools'));

== Upgrade Notice ==

= 0.2.0 =
* Adding screenshot

= 0.1.0 =

This is the first version of this plugin.

== Screenshots ==

1. Links, Appearance, Users, Tools and Settings hidden by default.

