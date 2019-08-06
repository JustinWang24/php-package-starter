<?php
/**
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */

namespace Smartbro\PostOffice\impl\attribute;


use Smartbro\PostOffice\contracts\IServiceAttribute;

class Attribute implements IServiceAttribute
{
    protected $value;
    protected $name;

    public function __construct($data)
    {
        $this->name = $data['name'];
        $this->value = $data['value'];
    }

    public function getValue()
    {
        return $this->value;
    }

    public function getName()
    {
        return $this->name;
    }
}