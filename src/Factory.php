<?php
/**
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */

namespace Smartbro\PostOffice;


use Smartbro\PostOffice\contracts\IDeliveryService;
use Smartbro\PostOffice\contracts\IDeliveryServiceCategory;
use Smartbro\PostOffice\contracts\IServiceItem;
use Smartbro\PostOffice\impl\category\Regular;
use Smartbro\PostOffice\impl\item\ProductItem;
use Smartbro\PostOffice\impl\item\ReferenceItem;
use Smartbro\PostOffice\impl\service\CallOutService;
use Smartbro\PostOffice\impl\service\DeliveryEstimateService;
use Smartbro\PostOffice\impl\service\FeatureService;
use Smartbro\PostOffice\impl\service\ProductGroupService;

class Factory
{
    /**
     * @param $type
     * @param $resource
     * @return IDeliveryServiceCategory
     */
    public static function GetServiceCategory($type, $resource){
        $instance = null;

        switch ($type){
            case IDeliveryServiceCategory::EXPRESS:

                break;
            default:
                $instance = new Regular($resource);
                break;
        }

        return $instance;
    }

    /**
     * @param $type
     * @param $data
     * @return null|ProductGroupService
     */
    public static function GetService($type, $data){
        $instance = null;

        switch ($type){
            case IDeliveryService::TYPE_PRODUCT_GROUP:
                $instance = new ProductGroupService($data);
                break;
            case IDeliveryService::TYPE_CALL_OUT:
                $instance = new CallOutService($data);
                break;
            case IDeliveryService::TYPE_DELIVERY_ESTIMATE:
                $instance = new DeliveryEstimateService($data);
                break;
            case IDeliveryService::TYPE_FEATURE:
                $instance = new FeatureService($data);
                break;
            default:
                break;
        }

        return $instance;
    }

    /**
     * @param $type
     * @param $data
     * @return IServiceItem
     */
    public static function GetServiceItem($type, $data){
        $instance = null;

        switch ($type){
            case IServiceItem::TYPE_PRODUCT:
                $instance = new ProductItem($data);
                break;
            case IServiceItem::TYPE_REFERENCE:
                $instance = new ReferenceItem($data);
                break;
            default:
                break;
        }
        return $instance;
    }
}