<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\BulkDataExchange\Types;

/**
 *
 * @property string $downloadJobType
 * @property string $UUID
 * @property \DTS\eBaySDK\BulkDataExchange\Types\DownloadRequestFilter $downloadRequestFilter
 */
class StartDownloadJobRequest extends \DTS\eBaySDK\BulkDataExchange\Types\BaseServiceRequest
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'downloadJobType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'downloadJobType'
        ),
        'UUID' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'UUID'
        ),
        'downloadRequestFilter' => array(
            'type' => 'DTS\eBaySDK\BulkDataExchange\Types\DownloadRequestFilter',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'downloadRequestFilter'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/services"';
        }

        if (!array_key_exists(__CLASS__, self::$requestXmlRootElementNames)) {
            self::$requestXmlRootElementNames[__CLASS__] = 'startDownloadJobRequest';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
