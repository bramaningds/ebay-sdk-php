<?php
/**
 * The contents of this file was generated using the WSDLs as provided by eBay.
 *
 * DO NOT EDIT THIS FILE!
 */

namespace DTS\eBaySDK\ResolutionCaseManagement\Types;

/**
 *
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Enums\MoneyMovementType $type
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\CaseUserType $fromParty
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\CaseUserType $toParty
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Types\Amount $amount
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Enums\PaymentMethodType $paymentMethod
 * @property string $paypalTransactionId
 * @property \DTS\eBaySDK\ResolutionCaseManagement\Enums\MoneyMovementStatusType $status
 * @property \DateTime $transactionDate
 * @property string $id
 * @property string $parentId
 */
class MoneyMovementDetailType extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'type' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'type'
        ),
        'fromParty' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\CaseUserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'fromParty'
        ),
        'toParty' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\CaseUserType',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'toParty'
        ),
        'amount' => array(
            'type' => 'DTS\eBaySDK\ResolutionCaseManagement\Types\Amount',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'amount'
        ),
        'paymentMethod' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'paymentMethod'
        ),
        'paypalTransactionId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'paypalTransactionId'
        ),
        'status' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'status'
        ),
        'transactionDate' => array(
            'type' => 'DateTime',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'transactionDate'
        ),
        'id' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => true,
            'attributeName' => 'id'
        ),
        'parentId' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => true,
            'attributeName' => 'parentId'
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
            self::$xmlNamespaces[__CLASS__] = 'xmlns="http://www.ebay.com/marketplace/resolution/v1/services"';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
