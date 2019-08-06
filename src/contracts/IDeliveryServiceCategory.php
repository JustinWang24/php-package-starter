<?php
namespace Smartbro\PostOffice\contracts;

interface IDeliveryServiceCategory{
    /** 两种邮寄服务类型: 普通和快递 */
    const EXPRESS = 'EXPRESS';
    const REGULAR = 'REGULAR';
    const DOMESTIC_PARCEL = 'DOMESTIC_PARCEL';


    /**
     * 加载数据
     *
     * @param $resource
     * @param $type
     * @return array|null
     */
    public function load($resource,$type);

    /**
     * 获取最大的可邮寄重量, 以克为单位
     */
    public function getMaximumWeight();

    /**
     * 获取类别 包含的 服务
     * @return IDeliveryService[]
     */
    public function getServices();

    /** 获取服务类别名称 */
    public function getName();

    /** 获取详情描述 */
    public function getDescription();

    /**
     * 获取本类的最终服务价格
     *
     * @return float
     */
    public function getPrice();
}