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
 * The maintenance layout.
 *
 * @package   theme_blacademy
 * @copyright 2015 Nephzat Dev Team,nephzat.com
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */
 
$mapheader = theme_blacademy_get_setting('mapheader', 'format_text');

$footer1header = theme_blacademy_get_setting('footer1header', 'format_text');

$footer2header = theme_blacademy_get_setting('footer2header', 'format_text');

//$footer2header = theme_blacademy_lang($footer2header);

$footer3header = theme_blacademy_get_setting('footer3header', 'format_text');
//$footer3header = theme_blacademy_lang($footer3header);


$address  = theme_blacademy_get_setting('address');
$emailid  = theme_blacademy_get_setting('emailid');
$phoneno  = theme_blacademy_get_setting('phoneno');

$footnote = theme_blacademy_get_setting('footnote', 'format_html');
$copyright_footer = theme_blacademy_get_setting('copyright_footer');

$footerbtitle = theme_blacademy_get_setting('footerbtitle', 'format_text');

?>

<footer id="footer">    
  <div class="footer-main">
    <div class="container-fluid">
      <div class="row-fluid">
          
        <div class="span3">
        	
                    <div id="footermap">
                	<iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3505.092638924225!2d77.2687097!3d28.5369351!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x390ce1584e462f17%3A0xb6f81c809b350f96!2sBallistic+Learning+Private+Limited!5e0!3m2!1sen!2sin!4v1464680932218" 
                            class="googlemap" width="100%" height="auto" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
           
        </div>
          
        <div class="span2">
            <div class="footer-nav">
            <h1> <?php echo $footer1header; ?></h1>
                <ul>                        	
                     <?php echo theme_blacademy_generate_links('footerblock1link'); ?>  
                </ul>
             </div>
        </div>
          
         <div class="span4">
          <div class="footer-desc">
            <h1><?php echo $footer2header; ?></h1>        	
             <p><?php echo $footnote; ?></p>
           </div>
        </div> 
          
        <div class="span3">
            <div class="contact-info">
                 <h1><?php echo $footer3header; ?></h1> 
                <p><?php echo $address; ?><br>
                <i class="fa fa-phone-square"></i>Phone: <?php echo $phoneno; ?><br>
                <i class="fa fa-envelope"></i>E-mail: <a class="mail-link" href="mailto:<?php echo $emailid; ?>"><?php echo $emailid; ?></a>
                </p>
            </div> 
        </div>
      </div>
    </div>
  </div>
    
  <div class="footer-foot">
  	<div class="container-fluid">
	  	 <?php if ($copyright_footer): ?>
      	<p><?php echo $copyright_footer; ?></p>
       <?php endif; ?>
    </div>
  </div>
    
 <?php  echo $OUTPUT->standard_end_of_body_html() ?>
</footer>
<!--E.O.Footer-->

