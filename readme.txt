=== Flickr field for Advanced Custom Fields ===
Contributors: davemac
Tags: flickr, acf, custom, fields, photostream, photosets
Requires at least: 5.0
Tested up to: 6.7
Stable tag: 2.0.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Display items from a Flickr photostream or entire sets/galleries along with WordPress content.

== Description ==

This is a maintained fork of the now obsolete [flickr-field-for-advanced-custom-fields](https://github.com/wp-plugins/flickr-field-for-advanced-custom-fields), updated for modern PHP versions and ACF compatibility.

The Flickr Field provides the ability to include photos, sets and galleries from a Flickr account. After selecting which image formats to use, the plugin will generate the Flickr image URLs. This plugin is an add-on for the Advanced Custom Fields WordPress plugin.

The plugin also provides "Private Mode". This requires authenticating the Flickr account and generating a token to access private pictures that are not publicly available on Flickr.com.

== Installation ==

1. Ensure Advanced Custom Fields v5 or later is installed
2. Upload the plugin to `/wp-content/plugins/`
3. Activate the plugin through the Plugins menu in WordPress

== Usage ==

**Getting the contents of a photostream and looping through the results**

	$flickr_photostream = get_field('field_name');

	if (isset($flickr_photostream['items'])) {
		foreach ($flickr_photostream['items'] as $id => $photo) {
			echo '<a href="' . $photo['large'] . '" title="' . $photo['title'] . '"><img src="' . $photo['thumb'] . '" /></a>';
		}
	}

**Getting the contents of a set and looping through the results**

	$flickr_set = get_field('field_name');

	if (isset($flickr_set['items'])) {
		foreach ($flickr_set['items'] as $id => $photos) {
			foreach ($photos as $photo) {
				echo '<a href="' . $photo['large'] . '" title="' . $photo['title'] . '"><img src="' . $photo['thumb'] . '" /></a>';
			}
		}
	}

== Screenshots ==

1. Setting up the field
2. Selecting a photo set
3. Selecting individual photos from a photostream

== Changelog ==

= 2.0.0 =
* Forked from obsolete wp-plugins repository
* Added error handling to prevent caching of failed API responses
* API errors are now logged to debug.log when WP_DEBUG is enabled
* Failed photosets are skipped gracefully instead of causing PHP errors
* Only successful API responses are cached
* Fixed JavaScript ReferenceError in flickr-acf5.js
* Fixed PHP TypeError by ensuring $items is always an array
* Updated for modern PHP compatibility
* Updated documentation for public release
