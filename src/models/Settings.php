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
    
    
   
    // Returns the validation rules for attributes.

    

  
    public function getonsite()
    {     
        return Craft::parseEnv(trim(dsbacktotop::getInstance()->getSettings()->onsite));
    }

    public function getfavcolor()
    {     
        return Craft::parseEnv(trim(dsbacktotop::getInstance()->getSettings()->bgcolor));
    }

   
    
   
    
    
}