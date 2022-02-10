<?php
/**
 * DS Back To Top plugin for Craft CMS 3.x
 *
 * DS BacktoTop
 *
 * @link      https://www.dotsquares.com/
 * @copyright Copyright (c) 2021 Dotsquares
 */

namespace ds\dsbacktotop;

use Craft;
use craft\base\Plugin;
use craft\services\Plugins;
use ds\dsbacktotop\models\Settings;
use ds\dsbacktotop\services\dsbacktotopService;
use craft\web\twig\variables\CraftVariable;
use ds\dsbacktotop\variables\dsbacktotopVariable;

use yii\base\Event;



class dsbacktotop extends Plugin

{
    public $hasCpSettings = true;
	public static $plugin;
    
    // Public Methods
    // =========================================================================

    public function init()
    {
        parent::init();
         self::$plugin = $this;
         
        // Register our service

        $this->setComponents([
            //classname
            'dsbacktotop' =>  services\dsbacktotopService::class,
            
        ]);

        
        // Register our variable
        Event::on(
            CraftVariable::class,
            CraftVariable::EVENT_INIT,
            function (Event $event) {
                /** @var CraftVariable $variable */
                $variable = $event->sender;
                //handle name                             //classname
                $variable->set('dsbacktotop', variables\dsbacktotopVariable::class);
            }
        );


       
    }

     // Protected Methods
    // =========================================================================
        protected function createSettingsModel()
        {
            return new Settings();
        }
    
    
            // Get the settings that are being defined by template
    
        protected function settingsHtml()
        {
            return \Craft::$app->getView()->renderTemplate(
                // Plugin handle name/settings
                'dsbacktotop/settings',
                [ 'settings' => $this->getSettings() ]
            );

        } 
    
}
?>