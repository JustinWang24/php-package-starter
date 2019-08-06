<?php
/**
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */

namespace Smartbro\PostOffice\impl\service;

use Smartbro\PostOffice\contracts\IDeliveryService;
use Smartbro\PostOffice\contracts\IServiceAttribute;
use Smartbro\PostOffice\impl\attribute\Attribute;

class FeatureService extends AbstractService
{
    private $availability;
    private $code;

    /**
     * @var IServiceAttribute[]
     */
    private $attributes = [];

    public function __construct($data)
    {
        $this->type = IDeliveryService::TYPE_PRODUCT_GROUP;
        parent::__construct($data);

        $this->code = $data['code'];
        $this->availability = $data['availability'];
        if(isset($data['attributes'])){
            foreach ($data['attributes'] as $attribute) {
                $this->attributes[] = new Attribute($attribute);
            }
        }
    }

    public function getCode()
    {
        return $this->code;
    }

    public function getAvailability()
    {
        return $this->availability;
    }

    public function getDescription()
    {
        return null;
    }

    /**
     * @return IServiceAttribute[]
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
}