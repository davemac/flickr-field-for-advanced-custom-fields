# Flickr Field for Advanced Custom Fields

Display items from a Flickr photostream or entire sets/galleries along with WordPress content.

This is a maintained fork of the now obsolete [wp-plugins/flickr-field-for-advanced-custom-fields](https://github.com/wp-plugins/flickr-field-for-advanced-custom-fields), updated for modern PHP versions and ACF compatibility.

## Features

- Display photos from Flickr photostreams or photosets
- Private Mode support for accessing non-public photos
- Configurable image sizes for thumbnails and large images
- File-based caching to reduce API calls
- Support for ACF v4 and v5/v6

## Installation

1. Ensure Advanced Custom Fields v4 or v5+ is installed
2. Upload the plugin to `/wp-content/plugins/`
3. Activate through the Plugins menu in WordPress

## Usage

See `readme.txt` for detailed usage examples and configuration options.

## Recent Changes

### Error Handling Improvements
- Added error checking before iterating over Flickr API results
- API errors are now logged to debug.log when WP_DEBUG is enabled
- Failed photosets are skipped gracefully instead of causing PHP errors
- Error responses are no longer cached, preventing temporary Flickr outages from breaking galleries

### Bug Fixes
- Resolved JavaScript `ReferenceError` in `flickr-acf5.js`
- Fixed PHP `TypeError` in `acf-flickr-v5.php` by ensuring `$items` is always an array
- Added initialisation for `$sets` array to prevent undefined variable notices

## License

GPLv2 or later
