<?php
declare(strict_types=1);

/**
 * This file is part of the Phalcon Framework.
 *
 * (c) Phalcon Team <team@phalconphp.com>
 *
 * For the full copyright and license information, please view the LICENSE.txt
 * file that was distributed with this source code.
 */

namespace Phalcon\Test\Unit\Cache\Cache;

use Phalcon\Cache\Adapter\Apcu;
use Phalcon\Cache\Cache;
use Phalcon\Storage\Adapter\AdapterInterface;
use UnitTester;

/**
 * Class GetAdapterCest
 */
class GetAdapterCest
{
    /**
     * Tests Phalcon\Cache\Cache :: getAdapter()
     *
     * @param UnitTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2019-05-01
     */
    public function cacheCacheGetAdapter(UnitTester $I)
    {
        $I->wantToTest('Cache\Cache - getAdapter()');

        $adapter = new Cache(new Apcu());

        $class  = AdapterInterface::class;
        $actual = $adapter->getAdapter();
        $I->assertInstanceOf($class, $actual);
    }
}