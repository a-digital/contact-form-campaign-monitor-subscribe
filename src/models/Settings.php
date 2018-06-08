<?php
/**
 * Contact Form Campaign Monitor Subscribe plugin for Craft CMS 3.x
 *
 * Utilises the Campaign Monitor Service plugin to subscribe users to a mailing list based on a checkbox input in a Craft contact form.
 *
 * @link      https://adigital.agency/
 * @copyright Copyright (c) 2018 Mark @ A Digital
 */

namespace adigital\contactformcampaignmonitorsubscribe\models;

use adigital\contactformcampaignmonitorsubscribe\ContactFormCampaignMonitorSubscribe;

use Craft;
use craft\base\Model;

/**
 * ContactFormCampaignMonitorSubscribe Settings Model
 *
 * This is a model used to define the plugin's settings.
 *
 * Models are containers for data. Just about every time information is passed
 * between services, controllers, and templates in Craft, it’s passed via a model.
 *
 * https://craftcms.com/docs/plugins/models
 *
 * @author    Mark @ A Digital
 * @package   ContactFormCampaignMonitorSubscribe
 * @since     1.0.0
 */
class Settings extends Model
{
    // Public Properties
    // =========================================================================

    /**
     * Some field model attribute
     *
     * @var string
     */
    public $someAttribute = 'Some Default';

    // Public Methods
    // =========================================================================

    /**
     * Returns the validation rules for attributes.
     *
     * Validation rules are used by [[validate()]] to check if attribute values are valid.
     * Child classes may override this method to declare different validation rules.
     *
     * More info: http://www.yiiframework.com/doc-2.0/guide-input-validation.html
     *
     * @return array
     */
    public function rules()
    {
        return [
            ['optInInputName', 'string', 'value' => 'mailing-list'],
        ];
    }
}
