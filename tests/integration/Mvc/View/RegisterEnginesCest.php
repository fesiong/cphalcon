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

namespace Phalcon\Test\Integration\Mvc\View;

use IntegrationTester;

/**
 * Class RegisterEnginesCest
 */
class RegisterEnginesCest
{
    /**
     * Tests Phalcon\Mvc\View :: registerEngines()
     *
     * @param IntegrationTester $I
     *
     * @author Phalcon Team <team@phalconphp.com>
     * @since  2018-11-13
     */
    public function mvcViewRegisterEngines(IntegrationTester $I)
    {
        $I->wantToTest('Mvc\View - registerEngines()');
        $I->skipTest('Need implementation');
    }
}
