# Flickr Field for Advanced Custom Fields

## Recent Changes

### Bug Fixes
- **JavaScript Error Fix**: Resolved a `ReferenceError` in `flickr-acf5.js` by ensuring the `value` variable is always defined before use.
- **PHP Fatal Error Fix**: Addressed a `TypeError` in `acf-flickr-v5.php` by ensuring the `$items` variable is always an array, preventing `in_array()` from receiving `null`.

### Improvements
- **Variable Initialization**: Added initialization for the `$sets` array in `acf-flickr-v5.php` to prevent undefined variable notices.

### Notes
- The `acf-flickr-v4.php` file is not used in ACF 6.x environments and was updated for consistency but is not active in your setup.
- Linter warnings about undefined constants are expected and safe to ignore, as they are wrapped in `defined()` checks.

These changes ensure the plugin operates smoothly with ACF 6.4.2 and the Flickr API.