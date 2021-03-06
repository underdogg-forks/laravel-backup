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

namespace Vinkla\Backup\Processors;

use Zenstruck\Backup\Processor\ZipArchiveProcessor;

/**
 * This is the zip processor class.
 *
 * @author Vincent Klaiber <hello@vinkla.com>
 */
class ZipProcessor implements ProcessorInterface
{
    /**
     * Bootstrap the processor.
     *
     * @return \Zenstruck\Backup\Processor\ZipArchiveProcessor
     */
    public function bootstrap(): ZipArchiveProcessor
    {
        return new ZipArchiveProcessor($this->getName());
    }

    /**
     * Get the processor name.
     *
     * @return string
     */
    public function getName(): string
    {
        return 'zip';
    }
}
