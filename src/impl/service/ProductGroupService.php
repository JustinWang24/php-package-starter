<?php
/**
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */

namespace Smartbro\PostOffice\impl\service;

use Smartbro\PostOffice\contracts\IDeliveryService;

class ProductGroupService extends AbstractService
{
    public function __construct($data)
    {
        $this->type = IDeliveryService::TYPE_PRODUCT_GROUP;
        parent::__construct($data);
    }

    public function getCode()
    {
        return null;
    }

    public function getAvailability()
    {
        return null;
    }

    public function getDescription()
    {
        return null;
    }

    public function getAttributes()
    {
        return null;
    }
}