=== Fast Custom Post ===
Contributors: kemi90
Plugin Name: Fast Custom Post
Plugin URI: http://enjoytripmembership.com/
Tags:Custom Post,news post,easy custom post,fast custom post
Author URI: http://enjoytripmembership.com/
Author: kamal kunwar
Stable tag: 1.1.0
Version: 1.0.0
Requires at least: 3.0
Tested up to: 4.3
License: GPLv2 or Later
Donate link: http://enjoytripmembership.com/

Edit the permalink of custom post type.
== Description ==

<strong>Fast Custom Post</strong> allow to your website for create fast custom post for making different sections like news sections, testimonials sections, music section, movies section,books and many more section.. 

== Setting on Code ==

* For change the permalink of post.change in CPT rewite.
Example:
register_post_type( 'post',
	array(
		"public" => true,
                'hierarchical'          => true,
                'labels'                => $labels,
                'show_ui'               => true,
                'show_admin_column'     => true,
                'query_var'             => true,
		'has_archive' => true,
		"rewrite" =>  'rewrite' => array(
                'slug' => 'custom-post','with_front' => false, 'hierarchical' => true )//Change the base category name and permalink of custom post. if leave blank then it will take default.
		
	)
);

== Installation ==
1. Download, Unzip and drop the extension on /wp-content/plugins/ directory,
1. As administrator, activate the plugin through the 'Plugins' menu in WordPress,
1. Now,You can access the Fast Custom Post in Dashboard.

== Frequently Asked Questions ==

All user frequently asked questions can be found at http://enjoytripmembership.com/

== Screenshots ==

* screenshot-1.png
* screenshot-2.png

==Upgrade Notice ==


 1.1.0 =
* Fast Custom Post the way the plugin deals with automatically setting up with your themes.


== Changelog ==


= 1.0.0 =
* Fix The fast custom menu position.
* Register the fast custom post permalink as you want to used.

= 0.0.0 =

* Old to remember