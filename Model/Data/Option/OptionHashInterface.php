<?php

/**
 * Xigen
 */

namespace Xigen\Bannermanager\Model\Data\Option;

interface OptionHashInterface
{
    /**
     * Return array of options as key-value pairs.
     *
     * @return array Format: array('<key>' => '<value>', '<key>' => '<value>', ...)
     */
    public function toOptionHash();
}
