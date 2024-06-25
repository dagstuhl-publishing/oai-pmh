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


namespace Dagstuhl\OaiPmh\Implementation;

use Dagstuhl\OaiPmh\Interfaces\Set as SetInterface;

/**
 * Class SetList
 * Basic implementation of Dagstuhl\OaiPmh\Interfaces\SetList
 *
 * @package Dagstuhl\OaiPmh
 */
class SetList implements \Dagstuhl\OaiPmh\Interfaces\SetList
{
    /**
     * @var string
     */
    private $resumptionToken;

    /**
     * @var Set[]
     */
    private $items;

    /**
     * @var int
     */
    private $completeListSize;
    
    /**
     * @var int
     */
    private $cursor;
    
    /**
     * @param Set[] $items
     * @param null|string $resumptionToken
     * @param null|int $completeListSize
     * @param null|int $cursor
     */
    public function __construct($items, $resumptionToken = null, $completeListSize = null, $cursor = null)
    {
        $this->items = $items;
        $this->resumptionToken = $resumptionToken;
        $this->completeListSize = $completeListSize;
        $this->cursor = $cursor;
    }


    /**
     * @return string
     */
    public function getResumptionToken()
    {
        return $this->resumptionToken;
    }

    /**
     * @return SetInterface[]
     */
    public function getItems()
    {
        return $this->items;
    }
    
    /**
     * @return int
     */
    public function getCompleteListSize()
    {
        return $this->completeListSize;
    }
    
    /**
     * @return int
     */
    public function getCursor()
    {
        return $this->cursor;
    }
}
