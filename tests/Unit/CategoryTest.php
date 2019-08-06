<?php
/**
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */
namespace Smartbro\PostOffice\tests\Unit;

use Smartbro\PostOffice\contracts\IDeliveryServiceCategory;
use Smartbro\PostOffice\Factory;
use Smartbro\PostOffice\tests\BasicTestCase;

class CategoryTest extends BasicTestCase
{
    /**
     * @var IDeliveryServiceCategory
     */
    private $category = null;
    public function setUp()
    {
        parent::setUp();
        $this->category = Factory::GetServiceCategory(
            IDeliveryServiceCategory::REGULAR,
            $this->samplePath
        );
    }

    public function testCanInit(){
        echo 'Services count: ' . count($this->category->getServices()).PHP_EOL;
        $this->assertNotNull($this->category->getServices());
    }

    public function testCanServices(){
        $services = $this->category->getServices();
        echo PHP_EOL;
        foreach ($services as $service) {
            echo 'Services code: ' . $service->getCode().PHP_EOL;
            echo 'Services ID: ' . $service->getId().PHP_EOL;
            echo 'Services items count: ' . count($service->getItems()).PHP_EOL;
        }
    }

    public function testCanGetMaximumWeight()
    {
        $this->assertNotNull($this->category);
        $this->assertNotNull($this->category->getMaximumWeight());
    }

    public function testCanGetCategoryName()
    {
        $this->assertNotNull($this->category->getName());
    }
}