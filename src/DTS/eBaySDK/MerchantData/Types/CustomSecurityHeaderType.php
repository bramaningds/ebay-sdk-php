<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\MerchantData\Types;

/**
 *
 * @property string $eBayAuthToken
 * @property string $HardExpirationWarning
 * @property \DTS\eBaySDK\MerchantData\Types\UserIdPasswordType $Credentials
 * @property string $NotificationSignature
 */
class CustomSecurityHeaderType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'eBayAuthToken' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'eBayAuthToken'
        ),
        'HardExpirationWarning' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'HardExpirationWarning'
        ),
        'Credentials' => array(
            'type' => 'DTS\eBaySDK\MerchantData\Types\UserIdPasswordType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'Credentials'
        ),
        'NotificationSignature' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'NotificationSignature'
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
            self::$requestXmlRootElementNames[__CLASS__] = 'RequesterCredentials';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
