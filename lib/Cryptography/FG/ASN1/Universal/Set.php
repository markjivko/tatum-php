<?php
/*
 * This file is part of the PHPASN1 library.
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Tatum\Cryptography\FG\ASN1\Universal;

use Tatum\Cryptography\FG\ASN1\Identifier;

class Set extends Sequence {
    public function getType() {
        return Identifier::SET;
    }
}
