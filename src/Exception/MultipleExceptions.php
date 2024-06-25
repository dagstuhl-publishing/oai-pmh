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


namespace Dagstuhl\OaiPmh\Exception;

use Dagstuhl\OaiPmh\Exception;
use Traversable;

class MultipleExceptions extends Exception implements \IteratorAggregate
{
    private $exceptions = [];

    public function setExceptions($exceptions)
    {
        $this->exceptions = $exceptions;
        return $this;
    }

    /**
     * (PHP 5 &gt;= 5.0.0)<br/>
     * Retrieve an external iterator
     * @link http://php.net/manual/en/iteratoraggregate.getiterator.php
     * @return Traversable An instance of an object implementing <b>Iterator</b> or
     * <b>Traversable</b>
     */
    public function getIterator()
    {
        return new \ArrayIterator($this->exceptions);
    }
}
