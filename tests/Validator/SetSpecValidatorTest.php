<?php

/*
 * This file is part of Dagstuhl\Oai-Pmh.
 *
 * Dagstuhl\Oai-Pmh is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * Dagstuhl\Oai-Pmh is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with Dagstuhl\Oai-Pmh.  If not, see <http://www.gnu.org/licenses/>.
 */

namespace Test\Dagstuhl\OaiPmh\Validator;

use PHPUnit\Framework\TestCase;

class SetSpecValidatorTest extends TestCase
{

    /**
     *
     * @dataProvider validSpecProvider
     * @param mixed $value
     * @param boolean $expected
     */
    public function testValidSpec($value, $expected)
    {
        $header = new \Dagstuhl\OaiPmh\Validator\SetSpecValidator();
        $return = $header->isValid($value);
        $this->assertEquals($expected, $return);
    }

    public function validSpecProvider()
    {
        return [
            ['abc:abc', true],
            ['123:123', true],
            ['http://test:abc', false],
            ['test/test:abc', false],
            ['test/', false],
        ];
    }
}
