<?php
/**
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */

namespace Smartbro\PostOffice\contracts;


interface IServiceAttribute
{
    /**
     * @return string
     */
    public function getValue();

    /**
     * @return string
     */
    public function getName();
}