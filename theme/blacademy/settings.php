<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle's Blacademy theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package   theme_blacademy
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

$settings = null;

defined('MOODLE_INTERNAL') || die;
global $PAGE;

$ADMIN->add('themes', new admin_category('theme_blacademy', 'Blacademy'));

/* General Settings */
    $temp = new admin_settingpage('theme_blacademy_generic',  get_string('geneicsettings', 'theme_blacademy'));
    
    // Logo file setting.
    $name = 'theme_blacademy/logo';
    $title = get_string('logo','theme_blacademy');
    $description = get_string('logodesc', 'theme_blacademy');
    $setting = new admin_setting_configstoredfile($name, $title, $description, 'logo');
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
   
    // Custom CSS file.
    $name = 'theme_blacademy/customcss';
    $title = get_string('customcss', 'theme_blacademy');
    $description = get_string('customcssdesc', 'theme_blacademy');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
     // Site color.
    $name = 'theme_blacademy/sitecolor';
    $title = get_string('sitecolor', 'theme_blacademy');
    $description = get_string('sitecolordesc', 'theme_blacademy');
    $default = '#0070a8;';
    $setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
    $temp->add($setting);

    
    // Invert Navbar to dark background.
    $name = 'theme_blacademy/invert';
    $title = get_string('invert', 'theme_blacademy');
    $description = get_string('invertdesc', 'theme_blacademy');
    $setting = new admin_setting_configcheckbox($name, $title, $description, 0);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
    $ADMIN->add('theme_blacademy', $temp);
    
    
/* Banner Settings */
    $temp = new admin_settingpage('theme_blacademy_frontpagebanner',  get_string('frontpagebanner', 'theme_blacademy'));

// Headerimg file setting.
$name = 'theme_blacademy/headerimg';
$title = get_string('headerimg', 'theme_blacademy');
$description = get_string('headerimgdesc', 'theme_blacademy');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'headerimg');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Bannerheading.

// Headerimg file setting.
$name = 'theme_blacademy/headerimg';
$title = get_string('headerimg', 'theme_blacademy');
$description = get_string('headerimgdesc', 'theme_blacademy');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'headerimg');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$name = 'theme_blacademy/bannerheading';
$title = get_string('bannerheading', 'theme_blacademy');
$description = get_string('bannerheadingdesc', 'theme_blacademy');
$default = 'Perfect Learning System';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Bannercontent.
$name = 'theme_blacademy/bannercontent';
$title = get_string('bannercontent', 'theme_blacademy');
$description = get_string('bannercontentdesc', 'theme_blacademy');
$default = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Banner Font color.
$name = 'theme_blacademy/bannerfontcolor';
$title = get_string('bannerfontcolor', 'theme_blacademy');
$description = get_string('bannerfontcolordesc', 'theme_blacademy');
$default = '#ffffff';
$setting = new admin_setting_configcolourpicker($name, $title, $description, $default);
$temp->add($setting);

    $ADMIN->add('theme_blacademy', $temp);

  
// Infoblock Setting.    
     $temp = new admin_settingpage('theme_blacademy_Informationblock',  get_string('Informationblock', 'theme_blacademy'));
     // Headerimg file setting.
    
    $name = 'theme_blacademy/Infoblockheading';
    $title = get_string('Infoblockheading', 'theme_blacademy');
    $description = get_string('Infoblockheadingdesc', 'theme_blacademy');
    $default = 'Five Centurie';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    // Bannercontent.
    $name = 'theme_blacademy/Infoblockcontent';
    $title = get_string('Infoblockcontent', 'theme_blacademy');
    $description = get_string('Infoblockcontentdesc', 'theme_blacademy');
    $default = 'It has survived not only five centuries, but also the leap into electronic typesetting.';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);

    $ADMIN->add('theme_blacademy', $temp);
    
    
    // Marketing Box setting page.
$temp = new admin_settingpage('theme_blacademy_marketingbox',  get_string('marketingbox', 'theme_blacademy'));

$name = 'theme_blacademy/displaymarketingbox';
$title = get_string('displaymarketingbox', 'theme_blacademy');
$description = get_string('displaymarketingboxdesc', 'theme_blacademy');
$default = 1;
$choices = array(0 => 'No', 1 => 'Yes');
$setting = new admin_setting_configselect($name, $title, $description, $default, $choices);
$temp->add($setting);

// Headerimg file setting.
$name = 'theme_blacademy/backgroundimg';
$title = get_string('backgroundimg', 'theme_blacademy');
$description = get_string('backgroundimgdesc', 'theme_blacademy');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'backgroundimg');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

$name = 'theme_blacademy/backgroundheading';
$title = get_string('backgroundheading', 'theme_blacademy');
$description = get_string('backgroundheadingdesc', 'theme_blacademy');
$default = 'Perfect Learning System';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Bannercontent.
$name = 'theme_blacademy/backgroundcontent';
$title = get_string('backgroundcontent', 'theme_blacademy');
$description = get_string('backgroundcontentdesc', 'theme_blacademy');
$default = 'Lorem Ipsum is simply dummy text of the printing and typesetting industry.';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing1icon.
$name = 'theme_blacademy/marketing1icon';
$title = get_string('marketing1icon', 'theme_blacademy');
$description = get_string('marketing1icondesc', 'theme_blacademy');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing1icon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing1heading.
$name = 'theme_blacademy/marketing1heading';
$title = get_string('marketing1heading', 'theme_blacademy');
$description = get_string('marketing1headingdesc', 'theme_blacademy');
$default = 'We Provide';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing1content.
$name = 'theme_blacademy/marketing1content';
$title = get_string('marketing1content', 'theme_blacademy');
$description = get_string('marketing1contentdesc', 'theme_blacademy');
$default = 'Contrary to popular belief, Lorem Ipsum is not simply ...';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing1url.
$name = 'theme_blacademy/marketing1url';
$title = get_string('marketing1url', 'theme_blacademy');
$description = get_string('marketing1urldesc', 'theme_blacademy');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing2icon.
$name = 'theme_blacademy/marketing2icon';
$title = get_string('marketing2icon', 'theme_blacademy');
$description = get_string('marketing2icondesc', 'theme_blacademy');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing2icon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing2heading.
$name = 'theme_blacademy/marketing2heading';
$title = get_string('marketing2heading', 'theme_blacademy');
$description = get_string('marketing2headingdesc', 'theme_blacademy');
$default = 'We serve';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing2content.
$name = 'theme_blacademy/marketing2content';
$title = get_string('marketing2content', 'theme_blacademy');
$description = get_string('marketing2contentdesc', 'theme_blacademy');
$default = 'Contrary to popular belief, Lorem Ipsum is not simply ...';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing2url.
$name = 'theme_blacademy/marketing2url';
$title = get_string('marketing2url', 'theme_blacademy');
$description = get_string('marketing2urldesc', 'theme_blacademy');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing3icon.
$name = 'theme_blacademy/marketing3icon';
$title = get_string('marketing3icon', 'theme_blacademy');
$description = get_string('marketing3icondesc', 'theme_blacademy');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing3icon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing3heading.
$name = 'theme_blacademy/marketing3heading';
$title = get_string('marketing3heading', 'theme_blacademy');
$description = get_string('marketing3headingdesc', 'theme_blacademy');
$default = 'Fast online';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);


// Marketing3content.
$name = 'theme_blacademy/marketing3content';
$title = get_string('marketing3content', 'theme_blacademy');
$description = get_string('marketing3contentdesc', 'theme_blacademy');
$default = 'Contrary to popular belief, Lorem Ipsum is not simply ...';
$setting = new admin_setting_configtextarea($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing3url.
$name = 'theme_blacademy/marketing3url';
$title = get_string('marketing3url', 'theme_blacademy');
$description = get_string('marketing3urldesc', 'theme_blacademy');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing4icon.
$name = 'theme_blacademy/marketing4icon';
$title = get_string('marketing4icon', 'theme_blacademy');
$description = get_string('marketing4icondesc', 'theme_blacademy');
$setting = new admin_setting_configstoredfile($name, $title, $description, 'marketing4icon');
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing4heading.
$name = 'theme_blacademy/marketing4heading';
$title = get_string('marketing4heading', 'theme_blacademy');
$description = get_string('marketing4headingdesc', 'theme_blacademy');
$default = 'Ask que';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Marketing4url.
$name = 'theme_blacademy/marketing4url';
$title = get_string('marketing4url', 'theme_blacademy');
$description = get_string('marketing4urldesc', 'theme_blacademy');
$default = '#';
$setting = new admin_setting_configtext($name, $title, $description, $default);
$setting->set_updatedcallback('theme_reset_all_caches');
$temp->add($setting);

// Read-me.
$readme = new moodle_url('/theme/blacademy/README.txt');
$readme = html_writer::link($readme, get_string('readme_click', 'theme_blacademy'), array('target' => '_blank'));


$ADMIN->add('theme_blacademy', $temp);



$temp = new admin_settingpage('theme_blacademy_footer', get_string('footersettings', 'theme_blacademy'));
    $temp->add(new admin_setting_heading('theme_blacademy_footer', get_string('footerheadingsub', 'theme_blacademy'),
        format_text(get_string('footerdesc', 'theme_blacademy'), FORMAT_MARKDOWN)));
    /* Footer Content */
	
	
	$name = 'theme_blacademy/mapheader';
    $title = get_string('mapheader', 'theme_blacademy');
    $description = get_string('mapheader', 'theme_blacademy');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);
    
    $name = 'theme_blacademy/footer1header';
    $title = get_string('footer1header', 'theme_blacademy');
    $description = get_string('footer1desc', 'theme_blacademy');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);
	
    $name = 'theme_blacademy/footerblock1link';
    $title = get_string('footerblock1link', 'theme_blacademy');
    $description = get_string('footerblock1linkdesc', 'theme_blacademy');
    //$default = get_string('footerblock1link_default', 'theme_blacademy');
    $default = '';
    $setting = new admin_setting_configtextarea($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting);
    
//    $name = 'theme_blacademy/footerblock1link';
//    $title = get_string('footerblock1link', 'theme_blacademy');
//    $description = get_string('footerblock1linkdesc','theme_blacademy');
//    $default = get_string('footerblock1link', 'theme_blacademy');
//    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
//    $setting->set_updatedcallback('theme_reset_all_caches');
//    $temp->add($setting);
    
        /* More Info*/
    $name = 'theme_blacademy/footer2header';
    $title = get_string('footer2header', 'theme_blacademy');
    $description = get_string('footer2headerdesc','theme_blacademy');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);
    
    $name = 'theme_blacademy/footnote';
    $title = get_string('footnote', 'theme_blacademy');
    $description = get_string('footnotedesc', 'theme_blacademy');
    $default = '';
    $setting = new admin_setting_confightmleditor($name, $title, $description, $default);
    $setting->set_updatedcallback('theme_reset_all_caches');
    $temp->add($setting); 
    
    
    $name = 'theme_blacademy/footer3header';
    $title = get_string('footer3header', 'theme_blacademy');
    $description = get_string('footer3headerdesc','theme_blacademy');
    $default = '';
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);
    
    /* Address , Email , Phone No */		
    $name = 'theme_blacademy/address';
    $title = get_string('address', 'theme_blacademy');
    $description = '';
    $default = get_string('defaultaddress','theme_blacademy');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);
				
				
    $name = 'theme_blacademy/emailid';
    $title = get_string('emailid', 'theme_blacademy');
    $description = '';
    $default = get_string('defaultemailid','theme_blacademy');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);
				
    $name = 'theme_blacademy/phoneno';
    $title = get_string('phoneno', 'theme_blacademy');
    $description = '';
    $default = get_string('defaultphoneno','theme_blacademy');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);
    
   $name = 'theme_blacademy/copyright_footer';
    $title = get_string('copyright_footer', 'theme_blacademy');
    $description = '';
    $default = get_string('copyright_default','theme_blacademy');
    $setting = new admin_setting_configtext($name, $title, $description, $default);
    $temp->add($setting);
   
    $ADMIN->add('theme_blacademy', $temp);
