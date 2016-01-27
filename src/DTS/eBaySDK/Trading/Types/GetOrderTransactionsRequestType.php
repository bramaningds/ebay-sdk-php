<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\Trading\Types;

/**
 *
 * @property \DTS\eBaySDK\Trading\Types\ItemTransactionIDArrayType $ItemTransactionIDArray
 * @property \DTS\eBaySDK\Trading\Types\OrderIDArrayType $OrderIDArray
 * @property \DTS\eBaySDK\Trading\Enums\TransactionPlatformCodeType $Platform
 * @property boolean $IncludeFinalValueFees
 */
class GetOrderTransactionsRequestType extends \DTS\eBaySDK\Trading\Types\AbstractRequestType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'ItemTransactionIDArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\ItemTransactionIDArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'ItemTransactionIDArray'
        ),
        'OrderIDArray' => array(
            'type' => 'DTS\eBaySDK\Trading\Types\OrderIDArrayType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'OrderIDArray'
        ),
        'Platform' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Platform'
        ),
        'IncludeFinalValueFees' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'IncludeFinalValueFees'
        )
    );

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = array())
    {
        list($parentValues, $childValues) = self::getParentValues(self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'xmlns="urn:ebay:apis:eBLBaseComponents"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'GetOrderTransactionsRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
