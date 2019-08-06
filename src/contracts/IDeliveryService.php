<?php
namespace Smartbro\PostOffice\contracts;

interface IDeliveryService{
    const TYPE_FEATURE              = 'Feature';
    const TYPE_DELIVERY_ESTIMATE    = 'DeliveryEstimate';
    const TYPE_CALL_OUT             = 'Callout';
    const TYPE_PRODUCT_GROUP        = 'ProductGroup';

    /**
     * @return string
     */
    public function getId();

    /**
     * @return string
     */
    public function getCode();

    /**
     * @return string
     */
    public function getType();

    /**
     * @return string
     */
    public function getAvailability();
    /**
     * @return string
     */
    public function getDescription();

    /**
     * @return IServiceAttribute[]
     */
    public function getAttributes();

    /**
     * @return IServiceItem[]
     */
    public function getItems();
}