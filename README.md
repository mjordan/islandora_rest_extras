# Islandora REST Extras

> This module was originally named 'islandora_rest_ingester_extras' but was renamed 'islandora_rest_extras' on January 9, 2018.

## Introduction

Utility module that provides options for objects ingested via Islandora's REST interface. Currently, it provides two features:

* a way to regenerate the DC of each ingested object, effectively emulating the behavior of objects ingested using Islandora's web interface or standard batch tools
* a very basic 'describe' REST endpoint that returns the server's configuration value limiting the size of the largest file that can be `POST`ed; the JSON returned by a requst to `islandora/rest/v1/describe` is like this, where `500M` is the value of the server's PHP 'upload_max_filesize' configuration value:

```javascript
{
   "max_datastream_file_size":"500M"
}
```

The `/describe` endpoint takes no parameters, and only returns a JSON response.

## Requirements

* [Islandora REST](https://github.com/discoverygarden/islandora_rest)

## Installation

Install as usual, see [this](https://drupal.org/documentation/install/modules-themes/modules-7) for further information.

## Configuration

Configuration options are available at Administration > Islandora > Islandora Utility Modules > Islandora REST Extras (`admin/islandora/tools/rest_extras`). Access to the `/describe` endpoint requires the user to have the "View repository describe" permission.

## Maintainer

* [Mark Jordan](https://github.com/mjordan)

## Development and feedback

Bug reports, use cases, feature requests, and pull requests are welcome. Please open an issue before opening a pull request.

## License

* [GPLv3](http://www.gnu.org/licenses/gpl-3.0.txt)
