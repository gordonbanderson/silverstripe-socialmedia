<?php

namespace Suilven\SocialMediaSources\Extension;

use SilverStripe\AssetAdmin\Forms\UploadField;
use SilverStripe\Forms\CheckboxField;
use SilverStripe\Forms\DropdownField;
use SilverStripe\Forms\FieldList;
use SilverStripe\Forms\HTMLEditor\HTMLEditorField;
use SilverStripe\Forms\NumericField;
use SilverStripe\Forms\TextareaField;
use SilverStripe\Forms\TextField;

class SocialMediaSourcesExtension extends \SilverStripe\ORM\DataExtension
{
    /** @var array account names for varoius social media services */
    private static $db = [
        'Facebook' => 'Varchar(255)',
        'Twitter' => 'Varchar(255)',
        'LinkedIn' => 'Varchar(255)',
        'Instagram' => 'Varchar(255)',
        'GooglePlus' => 'Varchar(255)',
        'YouTube' => 'Varchar(255)'
    ];

    public function updateCMSFields(FieldList $fields)
    {
        $services = ['Facebook', 'Twitter', 'LinkedIn', 'Instagram', 'GooglePlus', 'YouTube'];
        foreach($services as $service) {
            $fields->addFieldToTab("Root.SocialMedia",
                new TextField("$service", "$service Account")
            );
        }

    }

}
