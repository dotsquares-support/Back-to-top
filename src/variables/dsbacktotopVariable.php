<?php

/**
 * DS Back To Top plugin for Craft CMS 3.x
 *
 * DS BacktoTop
 *
 * @link      https://www.dotsquares.com/
 * @copyright Copyright (c) 2021 Dotsquares
 */


namespace ds\dsbacktotop\variables;
use ds\dsbacktotop\dsbacktotop;

use Craft;


class dsbacktotopVariable

    // Public Methods
    // =========================================================================
     /**
     * Whatever you want to output to a Twig template can go into a Variable method.
     * You can have as many variable functions as you want.  From any Twig template,
     * call it like this:
     *
     *     {{ craft.dsbacktotop.enbled() }}
     *  */
{
    public function enbled()

    {     
       return dsbacktotop::getInstance()->dsbacktotop->dsbacktotop();
    }

}
