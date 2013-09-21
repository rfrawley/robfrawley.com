<?php

namespace spec\Rf\BlogBundle\Templating\Extension;

use PhpSpec\ObjectBehavior;
use Prophecy\Argument;

class SwimExtensionSpec extends ObjectBehavior
{
    function it_is_initializable()
    {
        $this->shouldHaveType('Rf\BlogBundle\Templating\Extension\SwimExtension');
    }

    function it_can_return_function_array()
    {
    	$this
    		->getFunctions()
    		->shouldBeArray()
    	;
    }
}
