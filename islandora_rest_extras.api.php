<?php
/**
 * @file
 * This file documents all available hook functions for the Islandora REST Extras module.
 */

/**
 * Alter the output of the /describe endpoint.
 *
 * Output is converted to JSON, so any alterations must convert to JSON reliably.
 *
 * @param array $describe
 *   The output of the /describe endpoint.
 */
function mymodule_islandora_rest_extras_describe_alter(&$describe) {
  $describe['hello'] = "I have been altered.";
}
