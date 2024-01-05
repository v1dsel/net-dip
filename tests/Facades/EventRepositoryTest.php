<?php

/*
 * This file is part of Bootstrap CMS.
 *
 * (c) Graham Campbell <graham@alt-three.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace GrahamCampbell\Tests\BootstrapCMS\Facades;

use GrahamCampbell\TestBenchCore\FacadeTrait;
use GrahamCampbell\TestBenchCore\HelperTrait;
use GrahamCampbell\Tests\BootstrapCMS\AbstractTestCase;

/**
 * This is the event repository facade test class.
 *
 * @author Graham Campbell <graham@alt-three.com>
 */
class EventRepositoryTest extends AbstractTestCase
{
    use FacadeTrait, HelperTrait;

    /**
     * Get the facade accessor.
     *
     * @return string
     */
    protected function getFacadeAccessor()
    {
        return 'eventrepository';
    }

    /**
     * Get the facade class.
     *
     * @return string
     */
    protected function getFacadeClass()
    {
        return 'GrahamCampbell\BootstrapCMS\Facades\EventRepository';
    }

    /**
     * Get the facade route.
     *
     * @return string
     */
    protected function getFacadeRoot()
    {
        return 'GrahamCampbell\BootstrapCMS\Repositories\EventRepository';
    }
}
