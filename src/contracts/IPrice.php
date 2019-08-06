<?php
namespace Smartbro\PostOffice\contracts;

interface IPrice{

    /**
     * @return string
     */
    public function getType();

    /**
     * @return string
     */
    public function getCode();

    /**
     * @return float
     */
    public function getValue();

    /**
     * @param IDiscount $discount
     * @return mixed
     */
    public function attachDiscount(IDiscount $discount);
}