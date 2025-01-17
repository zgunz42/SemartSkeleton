<?php

declare(strict_types=1);

namespace KejawenLab\Semart\Skeleton\Tests\Query;

use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

/**
 * @author Muhamad Surya Iksanudin <surya.iksanudin@gmail.com>
 */
abstract class QueryServiceAbstract extends KernelTestCase
{
    public function setUp()
    {
        static::bootKernel();
    }
}
