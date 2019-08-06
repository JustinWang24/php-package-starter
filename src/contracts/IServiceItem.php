<?php
namespace Smartbro\PostOffice\contracts;

interface IServiceItem{
    const TYPE_REFERENCE = 'Reference';
    const TYPE_PRODUCT   = 'Product';

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
     * @return float
     */
    public function getWeightLimit();

    /**
     * @return float
     */
    public function getLengthLimit();

    /**
     * @return float
     */
    public function getWidthLimit();

    /**
     * @return IPrice[]
     */
    public function getPrices();
}