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
 * Moodle's Seagulls theme, an example of how to make a Bootstrap theme
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

/**
 * Parses CSS before it is cached.
 *
 * This function can make alterations and replace patterns within the CSS.
 *
 * @param string $css The CSS
 * @param theme_config $theme The theme config object.
 * @return string The parsed CSS The parsed CSS.
 */
function theme_blacademy_process_css($css, $theme) {

    // Set the background image for the logo.
    $logo = $theme->setting_file_url('logo', 'logo');
    $css = theme_blacademy_set_logo($css, $logo);
    
    // Set the front-header image for the headerimg.
    $headerimg = $theme->setting_file_url('headerimg', 'headerimg');
    if (!isset($headerimg)) {
        $headerimg = $OUTPUT->pix_url('headerimg', 'theme');
    }
    $css = theme_blacademy_set_headerimg($css, $headerimg);
    
    // Set the marketingbox background image for the backgroundimg.
    $backgroundimg = $theme->setting_file_url('backgroundimg', 'backgroundimg');
    if (!isset($backgroundimg)) {
        $backgroundimg = $OUTPUT->pix_url('backgroundimg', 'theme');
    }
    $css = theme_blacademy_set_backgroundimg($css, $backgroundimg);

    // Set custom CSS.
    if (!empty($theme->settings->customcss)) {
        $customcss = $theme->settings->customcss;
    } else {
        $customcss = null;
    }
    $css = theme_blacademy_set_customcss($css, $customcss);

    return $css;
}

/**
 * Adds the logo to CSS.
 *
 * @param string $css The CSS.
 * @param string $logo The URL of the logo.
 * @return string The parsed CSS
 */
function theme_blacademy_set_logo($css, $logo) {
    $tag = '[[setting:logo]]';
    $replacement = $logo;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

/**
 * Serves any files associated with the theme settings.
 *
 * @param stdClass $course
 * @param stdClass $cm
 * @param context $context
 * @param string $filearea
 * @param array $args
 * @param bool $forcedownload
 * @param array $options
 * @return bool
 */
function theme_blacademy_pluginfile($course, $cm, $context, $filearea, $args, $forcedownload, array $options = array()) {
    if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'logo') {
        $theme = theme_config::load('blacademy');
        return $theme->setting_file_serve('logo', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'headerimg') {
        $theme = theme_config::load('blacademy');
        return $theme->setting_file_serve('headerimg', $args, $forcedownload, $options);
     } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'backgroundimg') {
        $theme = theme_config::load('blacademy');
        return $theme->setting_file_serve('backgroundimg', $args, $forcedownload, $options); 
     } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'marketing1icon') {
        $theme = theme_config::load('blacademy');
        return $theme->setting_file_serve('marketing1icon', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'marketing2icon') {
        $theme = theme_config::load('blacademy');
        return $theme->setting_file_serve('marketing2icon', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'marketing3icon') {
        $theme = theme_config::load('blacademy');
        return $theme->setting_file_serve('marketing3icon', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'marketing4icon') {
        $theme = theme_config::load('blacademy');
        return $theme->setting_file_serve('marketing4icon', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'mainbox1icon') {
        $theme = theme_config::load('blacademy');
        return $theme->setting_file_serve('mainbox1icon', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'mainbox2icon') {
        $theme = theme_config::load('blacademy');
        return $theme->setting_file_serve('mainbox2icon', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'mainbox3icon') {
        $theme = theme_config::load('blacademy');
        return $theme->setting_file_serve('mainbox3icon', $args, $forcedownload, $options);
    } else if ($context->contextlevel == CONTEXT_SYSTEM and $filearea === 'mainbox4icon') {
        $theme = theme_config::load('blacademy');
        return $theme->setting_file_serve('mainbox4icon', $args, $forcedownload, $options);
    }
     else {
        send_file_not_found();
    }   
 }

/**
 * Adds any custom CSS to the CSS before it is cached.
 *
 * @param string $css The original CSS.
 * @param string $customcss The custom CSS to add.
 * @return string The CSS which now contains our custom CSS.
 */
function theme_blacademy_set_customcss($css, $customcss) {
    $tag = '[[setting:customcss]]';
    $replacement = $customcss;
    if (is_null($replacement)) {
        $replacement = '';
    }

    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_blacademy_set_headerimg($css, $headerimg) {
    $tag = '[[setting:headerimg]]';
    $replacement = $headerimg;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);

    return $css;
}

function theme_blacademy_set_backgroundimg($css, $backgroundimg) {
    $tag = '[[setting:backgroundimg]]';
    $replacement = $backgroundimg;
    if (is_null($replacement)) {
        $replacement = '';
    }
    $css = str_replace($tag, $replacement, $css);

    return $css;
}

/**
 * Returns an object containing HTML for the areas affected by settings.
 *
 * Do not add Seagulls specific logic in here, child themes should be able to
 * rely on that function just by declaring settings with similar names.
 *
 * @param renderer_base $output Pass in $OUTPUT.
 * @param moodle_page $page Pass in $PAGE.
 * @return stdClass An object with the following properties:
 *      - navbarclass A CSS class to use on the navbar. By default ''.
 *      - heading HTML to use for the heading. A logo if one is selected or the default heading.
 *      - footnote HTML to use as a footnote. By default ''.
 */
function theme_blacademy_get_html_for_settings(renderer_base $output, moodle_page $page) {
    global $CFG;
    $return = new stdClass;
    
    $return->navbarclass = '';
    if (!empty($page->theme->settings->invert)) {
        $return->navbarclass .= ' navbar-inverse';
    }
    
    // Only display the logo on the front page and login page, if one is defined.
    if (!empty($page->theme->settings->logo)) {
        $logolink = html_writer::link($CFG->wwwroot, '&nbsp;');
        $return->heading = html_writer::tag('div', $logolink, array('class' => 'logo'));
    } else {
        $return->heading = $output->page_heading();
    }

    $return->footnote = '';
    if (!empty($page->theme->settings->footnote)) {
        $return->footnote = '<div class="copyright">'.format_text($page->theme->settings->footnote).'</div>';
    }

    return $return;
}

/**
 * Get setting format
 */
function theme_blacademy_get_setting($setting, $format = false) {
    global $CFG;
    require_once($CFG->dirroot . '/lib/weblib.php');
    static $theme;
    if (empty($theme)) {
        $theme = theme_config::load('blacademy');
    }
    if (empty($theme->settings->$setting)) {
        return false;
    } else if (!$format) {
        return $theme->settings->$setting;
    } else if ($format === 'format_text') {
        return format_text($theme->settings->$setting, FORMAT_PLAIN);
    } else if ($format === 'format_html') {
        return format_text($theme->settings->$setting, FORMAT_HTML, array('trusted' => true, 'noclean' => true));
    } else {
        return format_string($theme->settings->$setting);
    }
}



/**
 * All theme functions should start with theme_blacademy_
 * @deprecated since 2.5.1
 */
function theme_blacademy_course_trim_char($str, $n = 500, $endchar = '&#8230;') {
    if (strlen($str) < $n) {
        return $str;
    }

    $str = preg_replace("/\s+/", ' ', str_replace(array("\r\n", "\r", "\n"), ' ', $str));
    if (strlen($str) <= $n) {
        return $str;
    }

    $out = "";
    $small = substr($str, 0, $n);
    $out = $small.$endchar;
    return $out;
}

function theme_blacademy_lang($key = '') {
    $pos = strpos($key, 'lang:');
    if ($pos !== false) {
        list($l, $k) = explode(":", $key);
        $v = get_string($k, 'theme_blacademy');
        return $v;
    } else {
        return $key;
    }

}


/**
 * Display Footer Block Custom Links
 * @param string $menu_name Footer block link name.
 * @return string The Footer links are return.
 */

function theme_blacademy_generate_links($menuname = '') {
    global $CFG, $PAGE;
    $htmlstr = '';
    $menustr = theme_blacademy_get_setting($menuname);
    if(!empty($menustr) && $menustr != ''){
        $menusettings = explode("\n", $menustr);
        //print_r($menusettings);exit;
         foreach ($menusettings as $menukey => $menuval) {
             $expset = explode("|", $menuval);
             list($ltxt, $lurl) = $expset;
             $ltxt = trim($ltxt);

             $ltxt = theme_blacademy_lang($ltxt);
             $lurl = trim($lurl);
             if (empty($ltxt)) {
                 continue;
             }
             if (empty($lurl)) {
                 $lurl = 'javascript:void(0);';
             }

             $pos = strpos($lurl, 'http');
             if ($pos === false) {
                 $lurl = new moodle_url($lurl);
             }
             $htmlstr .= '<li><a href="'.$lurl.'">'.$ltxt.'</a></li>'."\n";
         }

         return $htmlstr;
    }
    
    
}
/**
 * All theme functions should start with theme_blacademy_
 * @deprecated since 2.5.1
 */
function blacademy_process_css() {
    throw new coding_exception('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__);
}

/**
 * All theme functions should start with theme_blacademy_
 * @deprecated since 2.5.1
 */
function blacademy_set_logo() {
    throw new coding_exception('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__);
}

/**
 * All theme functions should start with theme_blacademy_
 * @deprecated since 2.5.1
 */
function blacademy_set_customcss() {
    throw new coding_exception('Please call theme_'.__FUNCTION__.' instead of '.__FUNCTION__);
}

function theme_blacademy_page_init(moodle_page $page) {
    $page->requires->jquery();
}