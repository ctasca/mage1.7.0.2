<?php

use Behat\Behat\Context\ClosuredContextInterface,
    Behat\Behat\Context\TranslatedContextInterface,
    Behat\Behat\Context\BehatContext,
    Behat\Behat\Exception\PendingException;
use Behat\Gherkin\Node\PyStringNode,
    Behat\Gherkin\Node\TableNode;

use MageTest\MagentoExtension\Context\MagentoContext;
use Magehat\Magehat\Context\MagehatContext;
/**
 * Features context.
 */
class FeatureContext extends MagentoContext
{
     public function __construct(array $parameters)
    {
        $this->useContext('Magehat', new \Magehat\Magehat\Context\MagehatContext($parameters));
    }
}