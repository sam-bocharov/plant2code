<?php

namespace Tests;


/**
 * -- file description --
 *
 * @author Marko Krüger <plant2code@marko-krueger.de>
 *
 */
class TestCase extends \PHPUnit\Framework\TestCase
{

    protected function setUp()
    {
        include_once(realpath(__DIR__ . '/../boot.php'));

        parent::setUp(); // TODO: Change the autogenerated stub
    }


}