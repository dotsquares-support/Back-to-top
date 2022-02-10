<?php
/**
 * DS Back To Top  plugin for Craft CMS 3.x
 *
 * DS BacktoTop
 *
 * @link      https://www.dotsquares.com/
 * @copyright Copyright (c) 2021 Dotsquares
 */

namespace ds\dsbacktotop\models;
use ds\dsbacktotop\dsbacktotop;
use Craft;
use craft\base\Model;

/**
 * DS BacktoTop Model
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 
 */


class Settings extends Model
{
   // Public Properties
    // =========================================================================

   
    
    public $onsite;
    public $bgcolor;
    public $bgwidth;
    public $bgheight;
    public $fontsize;
    public $hovercolor;
    public $scrollduration;
    public $position;
    public $select;
    
   
    // Returns the validation rules for attributes.

    

  
    public function getonsite()
    {     
        return Craft::parseEnv(trim(dsbacktotop::getInstance()->getSettings()->onsite));
    }

    public function getfavcolor()
    {     
        return Craft::parseEnv(trim(dsbacktotop::getInstance()->getSettings()->bgcolor));
    }

    public function getbgwidth()
    {     
        return Craft::parseEnv(trim(dsbacktotop::getInstance()->getSettings()->bgwidth));
    }
    public function getbgheight()
    {     
        return Craft::parseEnv(trim(dsbacktotop::getInstance()->getSettings()->bgheight));
    }
    public function getfontsize()
    {     
        return Craft::parseEnv(trim(dsbacktotop::getInstance()->getSettings()->fontsize));
    }

    public function gethovercolor()
    {     
        return Craft::parseEnv(trim(dsbacktotop::getInstance()->getSettings()->hovercolor));
    }

    public function getscrollduration()
    {     
        return Craft::parseEnv(trim(dsbacktotop::getInstance()->getSettings()->scrollduration));
    }

    public function getposition()
    {     
        return Craft::parseEnv(trim(dsbacktotop::getInstance()->getSettings()->position));
    }

    public function getselect()
    {     
        return Craft::parseEnv(trim(dsbacktotop::getInstance()->getSettings()->select));
    }
    
   
    
    
}