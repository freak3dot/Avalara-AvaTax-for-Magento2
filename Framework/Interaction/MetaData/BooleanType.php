<?php
/**
 * ClassyLlama_AvaTax
 *
 * NOTICE OF LICENSE
 *
 * This source file is subject to the Open Software License (OSL 3.0), a
 * copy of which is available through the world-wide-web at this URL:
 * http://opensource.org/licenses/osl-3.0.php
 *
 * @copyright  Copyright (c) 2016 Avalara, Inc.
 * @license    http://opensource.org/licenses/osl-3.0.php Open Software License (OSL 3.0)
 */

namespace ClassyLlama\AvaTax\Framework\Interaction\MetaData;

use Magento\Framework\Phrase;

class BooleanType extends MetaDataAbstract
{
    /**
     * @param string $name
     * @param array $data
     */
    public function __construct($name, array $data = [])
    {
        parent::__construct('boolean', $name, $data);
    }

    /**
     * Set valid options of metadata object
     * Valid for integer, string, double (float)
     * Returns true if valid options is valid for this type and false if not
     *
     * @param array $validOptions
     * @return boolean
     */
    public function setOptions(array $validOptions)
    {
        return false;
    }

    /**
     * Pass in a value and get the validated value back
     *
     * @param mixed $value
     * @return mixed
     * @throws ValidationException
     */
    public function validateData($value)
    {
        $value = $this->validateSimpleType($value);

        return $value;
    }
}
