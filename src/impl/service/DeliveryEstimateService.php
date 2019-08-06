<?php
/**
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */

namespace Smartbro\PostOffice\impl\service;

use Smartbro\PostOffice\contracts\IDeliveryService;

class DeliveryEstimateService extends AbstractService
{
    private $code;
    private $description;

    public function __construct($data)
    {
        $this->type = IDeliveryService::TYPE_PRODUCT_GROUP;
        parent::__construct($data);

        $this->code = $data['code'];
        $this->description = $data['estimate'];
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getAvailability()
    {
        return null;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function getAttributes()
    {
        return null;
    }
}