<?php

/**
 * rdfa-lite
 *
 * @category Jkphl
 * @package Jkphl\Rdfalite
 * @subpackage Jkphl\Rdfalite\Application
 * @author Joschi Kuphal <joschi@tollwerk.de> / @jkphl
 * @copyright Copyright © 2017 Joschi Kuphal <joschi@tollwerk.de> / @jkphl
 * @license http://opensource.org/licenses/MIT The MIT License (MIT)
 */

/***********************************************************************************
 *  The MIT License (MIT)
 *
 *  Copyright © 2017 Joschi Kuphal <joschi@kuphal.net> / @jkphl
 *
 *  Permission is hereby granted, free of charge, to any person obtaining a copy of
 *  this software and associated documentation files (the "Software"), to deal in
 *  the Software without restriction, including without limitation the rights to
 *  use, copy, modify, merge, publish, distribute, sublicense, and/or sell copies of
 *  the Software, and to permit persons to whom the Software is furnished to do so,
 *  subject to the following conditions:
 *
 *  The above copyright notice and this permission notice shall be included in all
 *  copies or substantial portions of the Software.
 *
 *  THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 *  IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY, FITNESS
 *  FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE AUTHORS OR
 *  COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER LIABILITY, WHETHER
 *  IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM, OUT OF OR IN
 *  CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE SOFTWARE.
 ***********************************************************************************/

namespace Jkphl\Rdfalite\Application\Parser;

/**
 * Recursive DOM node iterator
 *
 * @package Jkphl\Rdfalite
 * @subpackage Jkphl\Rdfalite\Application
 */
class DOMIterator extends \ArrayIterator implements \RecursiveIterator
{
    /**
     * Recursive DOM node iterator constructor
     *
     * @param \DOMNodeList $nodeList Node list
     */
    public function __construct(\DOMNodeList $nodeList)
    {
        $nodes = array();
        foreach ($nodeList as $node) {
            $nodes[] = $node;
        }

        parent::__construct($nodes);
    }

    /**
     * Return the recursive iterator
     *
     * @return \RecursiveIteratorIterator Recursive iterator
     */
    public function getRecursiveIterator()
    {
        return new \RecursiveIteratorIterator($this, \RecursiveIteratorIterator::SELF_FIRST);
    }

    /**
     * Return whether the current node has child nodes
     *
     * @return boolean Current node has child nodes
     */
    public function hasChildren()
    {
        return $this->current()->hasChildNodes();
    }

    /**
     * Return a child node iterator
     *
     * @return DOMIterator Child node iterator
     */
    public function getChildren()
    {
        return new static($this->current()->childNodes);
    }
}