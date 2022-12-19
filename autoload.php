<?php
define('TATUM', '2.0.0');

/**
 * Autoloader
 *
 * @version   3.17.0
 * @copyright (c) 2022-2023 tatum.io
 * @license   MIT
 * @package   Tatum
 * @author    Mark Jivko
 * @link      https://tatum.io/
 *
 * NOTE: This class is auto generated by tatum.io
 * Do not edit this file manually
 */
spl_autoload_register(function ($className) {
    if (0 === strpos($className, "Tatum\\")) {
        // Prepare class parts
        $parts = array_slice(explode("\\", $className), 1);

        // Load the file
        require_once __DIR__ . "/lib/" . implode("/", $parts) . ".php";
    }
});