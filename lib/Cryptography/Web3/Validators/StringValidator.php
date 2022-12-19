<?php

/**
 * This file is part of web3.php package.
 * @author Peter Lai
 * @license MIT
 */

namespace Tatum\Cryptography\Web3\Validators;

use Tatum\Cryptography\Web3\Validators\IValidator;

class StringValidator {
    /**
     * validate
     *
     * @param string $value
     * @return bool
     */
    public static function validate($value) {
        return is_string($value);
    }
}
