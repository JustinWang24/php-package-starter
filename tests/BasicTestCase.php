<?php
/**
 * Created by https://yue.dev
 * Author: Justin Wang
 * Email: hi@yue.dev
 */
namespace Smartbro\PostOffice\tests;
use PHPUnit\Framework\TestCase;

class BasicTestCase extends TestCase
{
    protected $samplePath = __DIR__.'/sample/australian_post_standard.json';

    public function getSampleArray(){
        return json_decode(file_get_contents($this->samplePath), true);
    }
}