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
 * The two column layout.
 *
 * @package   theme_blacademy
 * @copyright 2013 Moodle, moodle.org
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

// Get the HTML for the settings bits.
$html = theme_blacademy_get_html_for_settings($OUTPUT, $PAGE);

// Set default (LTR) layout mark-up for a two column page (side-pre-only).
$regionmain = 'span9';
$sidepre = 'span3 pull-right';
// Reset layout mark-up for RTL languages.
if (right_to_left()) {
    $regionmain = 'span9 pull-right';
	$sidepre = 'span3 desktop-first-column';
}

if (!empty($PAGE->theme->settings->bannerheading)) {
    $bannerheading = $PAGE->theme->settings->bannerheading;
} else {
    $bannerheading = '';
}
if (!empty($PAGE->theme->settings->bannercontent)) {
    $bannercontent = $PAGE->theme->settings->bannercontent;
} else {
    $bannercontent = '';
}

if (!empty($PAGE->theme->settings->Infoblockheading)) {
    $Infoblockheading = $PAGE->theme->settings->Infoblockheading;
} else {
    $Infoblockheading = '';
}
if (!empty($PAGE->theme->settings->Infoblockcontent)) {
    $Infoblockcontent = $PAGE->theme->settings->Infoblockcontent;
} else {
    $Infoblockcontent = '';
}



echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>" />
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes('two-column'); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>
    <header class="navbar <?php echo $html->navbarclass ?>">
        <nav role="navigation" class="navbar-inner">
            <div class="container-fluid">
                <div class="row-fluid">
                    <div class="span3">
                         <?php echo $html->heading; ?>
                    </div>

                    <div class="span5">
                        <a class="brand" href="<?php echo $CFG->wwwroot;?>"><?php echo
                        format_string($SITE->shortname, true, array('context' => context_course::instance(SITEID)));
                        ?></a>
                        <?php echo $OUTPUT->custom_menu(); ?>
                    </div>


                    <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </a>
                    <div class=" span2 nav-collapse collapse">
                        <ul class="nav pull-right">
                            <li><?php echo $OUTPUT->page_heading_menu(); ?></li>
                        </ul>
                    </div>

                    <div class="span2">
                            <?php echo $OUTPUT->user_menu(); ?>
                    </div>
                </div>
            </div>
        </nav>
</header>
  
<div id="page">
    <div id="page-header">
            <div class="container-fluid">
             <?php if ($bannerheading) { ?>
               <h1 class="new"><?php echo $bannerheading?></h1>
                 <?php 
                  } else {
                  ?>
                  <?php 
                  }
                  ?>
                  <?php if ($bannercontent) { ?>
                  <p><?php echo $bannercontent?></p>
                  <?php 
                  } else {
                  ?>
                  <?php 
                  }
                  ?>
            </div>
    </div>
    
    <div id="Infoblock">
        <div class="row-fluid">
            <div class="container-fluid">
                <div id="contentbox">
                        <div class="span9">
                            <?php if ($Infoblockheading) { ?>
                            <h2 class="Infoheading"><?php echo $Infoblockheading?></h2>
                              <?php 
                               } else {
                               ?>
                               <?php 
                               }
                               ?>


                            <div class="infocontent"<?php if ($Infoblockcontent) { ?>
                            <p><?php echo $Infoblockcontent?></p>
                                <?php 
                                } else {
                                ?>
                                <?php 
                                }
                                ?>

                              </div> 
                        </div>
                </div>
                <div class="span3">
                    <div class="content-top-col-2"></div>
                </div>
            </div>
        </div>
    </div> 
    
    
    <!-- Start Marketing Icons -->
        <?php require_once(dirname(__FILE__).'/includes/marketingbox.php'); ?>
    <!-- End -->
   
    
    
    <div id="page-wrapper" class="container-fluid">
    <div id="page-content" class="row-fluid">
        <section id="region-main" class="<?php echo $regionmain; ?>">
            <?php
            echo $OUTPUT->course_content_header();
            echo $OUTPUT->main_content();
            echo $OUTPUT->course_content_footer();
            ?>
        </section>
        <?php echo $OUTPUT->blocks('side-pre', $sidepre);
        ?>
    </div>  
    </div>

<footer id="footer">
    <div class="footer-in">
        <div class="container-fluid">
            <div id="course-footer"><?php echo $OUTPUT->course_footer(); ?></div>
            <div class="row-fluid">
                <div class="span6 copyright-box"><?php echo $html->footnote; ?></div>
                <div class="span6 footerlinks-box">
                    <!-- Start Social Icons -->
                    <?php require_once(dirname(__FILE__).'/includes/socialicons.php'); ?>
                    <!-- End -->
                </div>
            </div>
        </div>
    </div>
</footer>

<?php if (!empty($OUTPUT->standard_footer_html())) { ?>
    <footer id="page-footer"> <?php echo $OUTPUT->standard_footer_html(); ?></footer>
<?php } ?>

<?php echo $OUTPUT->standard_end_of_body_html() ?>
</div>
</body>
</html>
