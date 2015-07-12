<?php
/**
 * Created by PhpStorm.
 * User: oomusou
 * Date: 15/6/28
 * Time: 下午5:04
 */

namespace Tests\Whovian;

use \TestCase;
use App\ObjectModel\Whovian\Whovian;

class WhovianTest extends TestCase {
    public function testConstructor()
    {
        $whovian = new Whovian('Peter Capaldi');
        $this->assertAttributeEquals('Peter Capaldi', 'favoriteDoctor', $whovian);
    }

    public function testSay()
    {
        $whovian = new Whovian('David Tennant');
        $this->assertEquals('The best doctor is David Tennant', $whovian->say());
    }

    public function testRespondTo()
    {
        $whovian = new Whovian('David Tennant');
        $opinion = 'David Tennant is the best doctor, period';
        $this->assertEquals('I agree!', $whovian->respondTo($opinion));
    }

    /**
     * @expectedException Exception
     */
    public function testRespondToException()
    {
        $whovian = new Whovian('David Tennant');
        $opinion = 'No way. Matt Smith was awesome!';
        $whovian->respondTo($opinion);
    }

}