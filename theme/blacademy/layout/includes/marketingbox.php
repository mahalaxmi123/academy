<?php

if (!empty($PAGE->theme->settings->backgroundheading)) {
    $backgroundheading = $PAGE->theme->settings->backgroundheading;
} else {
    $backgroundheading = '';
}
if (!empty($PAGE->theme->settings->backgroundcontent)) {
    $backgroundcontent = $PAGE->theme->settings->backgroundcontent;
} else {
    $backgroundcontent = '';
}


if (!empty($PAGE->theme->settings->marketing1icon)) {
    $marketing1icon = $PAGE->theme->setting_file_url('marketing1icon', 'marketing1icon');
} else {
    $marketing1icon = $OUTPUT->pix_url('icon1', 'theme');
}

if (!empty($PAGE->theme->settings->displaymarketingbox)) {
    $displaymarketingbox = $PAGE->theme->settings->displaymarketingbox;
} else {
    $displaymarketingbox = '';
}

if (!empty($PAGE->theme->settings->marketing1heading)) {
    $marketing1heading = $PAGE->theme->settings->marketing1heading;
} else {
    $marketing1heading = '';
}
if (!empty($PAGE->theme->settings->marketing1subheading)) {
    $marketing1subheading = $PAGE->theme->settings->marketing1subheading;
} else {
    $marketing1subheading = '';
}
if (!empty($PAGE->theme->settings->marketing1content)) {
    $marketing1content = $PAGE->theme->settings->marketing1content;
} else {
    $marketing1content = '';
}
if (!empty($PAGE->theme->settings->marketing1url)) {
    $marketing1url = $PAGE->theme->settings->marketing1url;
} else {
    $marketing1url = '';
}
if (!empty($PAGE->theme->settings->marketing2icon)) {
    $marketing2icon = $PAGE->theme->setting_file_url('marketing2icon', 'marketing2icon');
} else {
    $marketing2icon = $OUTPUT->pix_url('icon2', 'theme');
}
if (!empty($PAGE->theme->settings->marketing2heading)) {
    $marketing2heading = $PAGE->theme->settings->marketing2heading;
} else {
    $marketing2heading = '';
}
if (!empty($PAGE->theme->settings->marketing2subheading)) {
    $marketing2subheading = $PAGE->theme->settings->marketing2subheading;
} else {
    $marketing2subheading = '';
}
if (!empty($PAGE->theme->settings->marketing2content)) {
    $marketing2content = $PAGE->theme->settings->marketing2content;
} else {
    $marketing2content = '';
}
if (!empty($PAGE->theme->settings->marketing2url)) {
    $marketing2url = $PAGE->theme->settings->marketing2url;
} else {
    $marketing2url = '';
}
if (!empty($PAGE->theme->settings->marketing3icon)) {
    $marketing3icon = $PAGE->theme->setting_file_url('marketing3icon', 'marketing3icon');
} else {
    $marketing3icon = $OUTPUT->pix_url('icon3', 'theme');
}
if (!empty($PAGE->theme->settings->marketing3heading)) {
    $marketing3heading = $PAGE->theme->settings->marketing3heading;
} else {
    $marketing3heading = '';
}
if (!empty($PAGE->theme->settings->marketing3subheading)) {
    $marketing3subheading = $PAGE->theme->settings->marketing3subheading;
} else {
    $marketing3subheading = '';
}
if (!empty($PAGE->theme->settings->marketing3content)) {
    $marketing3content = $PAGE->theme->settings->marketing3content;
} else {
    $marketing3content = '';
}
if (!empty($PAGE->theme->settings->marketing3url)) {
    $marketing3url = $PAGE->theme->settings->marketing3url;
} else {
    $marketing3url = '';
}
if (!empty($PAGE->theme->settings->marketing4icon)) {
    $marketing4icon = $PAGE->theme->setting_file_url('marketing4icon', 'marketing4icon');
} else {
    $marketing4icon = $OUTPUT->pix_url('icon4', 'theme');
}
if (!empty($PAGE->theme->settings->marketing4heading)) {
    $marketing4heading = $PAGE->theme->settings->marketing4heading;
} else {
    $marketing4heading = '';
}
if (!empty($PAGE->theme->settings->marketing4subheading)) {
    $marketing4subheading = $PAGE->theme->settings->marketing4subheading;
} else {
    $marketing4subheading = '';
}
if (!empty($PAGE->theme->settings->marketing4content)) {
    $marketing4content = $PAGE->theme->settings->marketing4content;
} else {
    $marketing4content = '';
}
if (!empty($PAGE->theme->settings->marketing4url)) {
    $marketing4url = $PAGE->theme->settings->marketing4url;
} else {
    $marketing4url = '';
}

?>

<?php  if ($displaymarketingbox) { ?>

<div class="marketingbox">
    <div class="container-fluid">
        <div class="marketing-bg-content">
                 <?php if ($backgroundheading) { ?>
                   <h1><?php echo $backgroundheading?></h1>
                     <?php 
                      } else {
                      ?>
                      <?php 
                      }
                      ?>
                      <?php if ($backgroundcontent) { ?>
                      <p><?php echo $backgroundcontent?></p>
                      <?php 
                      } else {
                      ?>
                      <?php 
                      }
                      ?>
        </div>
        <div class="marketing-innerbox">
            <div class="row-fluid">
              <div class="span3">
               <img src="<?php echo $marketing1icon ?>" />        
               <?php if ($marketing1heading) { ?>
               <h1><?php echo $marketing1heading?></h1>
               <?php 
               } else {
               ?>
               <?php 
               }
               ?>
               <?php if ($marketing1subheading) { ?>
               <h4><?php echo $marketing1subheading?></h4>
               <?php
               } else {
               ?>
                  <?php 
               }
               ?>       
               <?php if ($marketing1content) { ?>
               <p><?php echo $marketing1content?></p>
               <?php
               } else {
               ?>
               <?php 
               }
               ?>
               <?php if ($marketing1url) { ?>
               <a href="<?php echo $marketing1url?>"><button>More</button></a>
               <?php 
               } else {
               ?>
               <?php 
               }
               ?>
              </div>

              <div class="span3">
               <img src="<?php echo $marketing2icon ?>" />
               <?php if ($marketing2heading) { ?>
               <h1><?php echo $marketing2heading?></h1>
               <?php 
               } else {
               ?>
               <?php 
               }
               ?>
               <?php if ($marketing2subheading) { ?>
               <h4><?php echo $marketing2subheading?></h4>
               <?php 
               } else {
               ?>
               <?php 
               }
               ?>

               <?php if ($marketing2content) { ?>
               <p><?php echo $marketing2content?></p>
               <?php
               } else {
               ?>
               <?php 
               }
               ?>
               <?php if ($marketing2url) { ?>
               <a href="<?php echo $marketing2url?>"><button>More</button></a>
               <?php 
               } else {
               ?>
               <?php 
               }
               ?>
               </div>
              <div class="span3">
               <img src="<?php echo $marketing3icon ?>" />
               <?php if ($marketing3heading) { ?>
               <h1><?php echo $marketing3heading?></h1>
               <?php 
               } else {
               ?>
               <?php 
               }
               ?>
               <?php if ($marketing3subheading) { ?>
               <h4><?php echo $marketing3subheading?></h4>
               <?php 
               } else {
               ?>
               <?php 
               }
               ?>
               <?php if ($marketing3content) { ?>
               <p><?php echo $marketing3content?></p>
               <?php 
               } else {
               ?>
               <?php 
               }
               ?>
               <?php if ($marketing3url) { ?>
               <a href="<?php echo $marketing3url?>"><button>More</button></a>
               <?php 
               } else {
               ?>
               <?php 
               }
               ?>
              </div>

              <div class="span3">
               <img src="<?php echo $marketing4icon ?>" />
               <?php if ($marketing4heading) { ?>
               <h1><?php echo $marketing4heading?></h1>
               <?php 
               } else {
               ?>
               <?php 
               }
               ?>
               <?php if ($marketing4subheading) { ?>
               <h4><?php echo $marketing4subheading?></h4>
               <?php 
               } else {
               ?>
               <?php 
               }
               ?>       
               <?php if ($marketing4content) { ?>
               <p><?php echo $marketing4content?></p>
               <?php 
               } else {
               ?>
               <?php 
               }
               ?>        
               <?php if ($marketing4url) { ?>
               <a href="<?php echo $marketing4url?>"><button>More</button></a>
               <?php 
               } else {
               ?>
               <?php 
               }
               ?>        
              </div>
            <div class="clearfix"></div>
            </div> 
        </div>    
    </div>
</div>
<?php 
} else {
?>				
<?php 
}
?>