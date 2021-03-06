<?php

/*
 * This file is part of Laravel Backup.
 *
 * (c) Vincent Klaiber <hello@vinkla.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

declare(strict_types=1);

namespace Vinkla\Tests\Backup\Processors;

use Vinkla\Backup\Processors\ZipProcessor;
use Zenstruck\Backup\Processor\ZipArchiveProcessor;

/**
 * This is the zip archive processor test class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class ZipProcessorTest extends AbstractProcessorTestCase
{
    public function testBootstrap()
    {
        $this->assertInstanceOf(ZipArchiveProcessor::class, $this->getProcessor()->bootstrap());
    }

    public function getProcessor()
    {
        return new ZipProcessor();
    }
}
