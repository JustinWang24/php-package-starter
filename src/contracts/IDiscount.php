<?php
/**
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */

namespace Smartbro\PostOffice\contracts;


interface IDiscount
{
    public function getName();

    public function getValue();
}