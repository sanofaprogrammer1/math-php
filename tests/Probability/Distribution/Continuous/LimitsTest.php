<?php
namespace Math\Probability\Distribution\Continuous;

class LimitsTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Limits should look like:
     *  (a,b)
     *  [a,b)
     *  (a,b]
     *  [a,b]
     */
    private function limitTest($limits)
    {
        foreach ($limits as $parameter => $limit) {
            $this->assertRegExp('/^ ([[(]) (.+) , (.+?) ([])]) $/x', $limit);
        }
        
    }

    public function testBetaParameterLimits()
    {
        $this->limitTest(Beta::LIMITS);
    }
}