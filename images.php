<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
    <head>
    
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <meta http-equiv="Author" content="Abhinav Kumar Kushwaha" />
        
        <title>Abhinav Kumar Kushwaha - Images Gallery</title>
                
        <link rel="stylesheet" type="text/css" href="css/styles.css" />
	<link rel="stylesheet" type="text/css" href="css/gallery.css" />
        <link rel="stylesheet" href="css/query-ui.css" type="text/css" media="all" />
	<link rel="stylesheet" type="text/css" href="fancybox/jquery.fancybox-1.2.6.css" />
       
        <!--[if IE]>
        
        <style type="text/css">
        .clear {
          zoom: 1;
          display: block;
        }
        </style>

        
        <![endif]-->
        
<script type="text/javascript" src="scripts/jquery.min.js"></script>
<script type="text/javascript" src="scripts/jquery-ui.min.js"></script>
<script type="text/javascript" src="jquery.scrollTo-1.4.2/jquery.scrollTo-min.js"></script>
<script type="text/javascript" src="fancybox/jquery.fancybox-1.2.6.pack.js"></script>
<script type="text/javascript" src="scripts/pic-script.js"></script>
<script type="text/javascript" src="scripts/script.js"></script>

        
    </head>
    
    <body>

    	<div class="section" id="page"> <!-- Defining the #page section with the section tag -->
    
            <div class="header"> <!-- Defining the header section of the page with the appropriate tag -->

                <h1>Abhinav Kumar Kushwaha</h1>
                <h3>Senior Undergraduate, CSE, IT BHU</h3>
                
                <div class="nav clear"> <!-- The nav link semantically marks your main site navigation -->
                    <ul>
                        <li><a href="./" onclick="window.location.href='./'" >Home</a></li>
						<li><a href="profile.php" onclick="window.location.href='./profile.php'" >Profile</a></li>
                        <li><a href="projects.php" onclick="window.location.href='./projects.php'" >Projects</a></li>
						<li><a href="images.php" class='active' onclick="window.location.href='./images.php'" >Images</a></li>
                        <li><a href="http://abhinavkush.wordpress.com/" onclick="window.open(this.href,'newwin'); return false;" >Blog</a></li>
                    </ul>
                </div>
            
            </div>
            
            <div class="section" id="articles"> <!-- A new section with the articles -->

				<!-- Article 1 start -->

                <div class="line"></div>  <!-- Dividing line -->
	<div class="article" id="article1"> <!-- The new article tag. The id is supplied so it can be scrolled into view. -->
                    <div style="float:right;">
				<iframe src="http://www.facebook.com/widgets/like.php?href=http%3A%2F%2Fakush.in%2Fprofile.php&amp;width=300&amp;connections=0&amp;stream=false&amp;header=true&amp;height=30" scrolling="no" frameborder="0" style="border:none;float:right; overflow:hidden; width:300px; height:30px;" allowTransparency="true"></iframe>
			</div>  
                    <h2>Image Gallery</h2>  
                          
                    
                    <div class="line"></div>
                

      
<!-- Image gallery start    -->

<div id="gallery">
    
<?php

/* Configuration Start */

$thumb_directory = 'img/thumbs';
$orig_directory = 'img/original';

$stage_width=600;	// How big is the area the images are scattered on
$stage_height=400;

/* Configuration end */

$allowed_types=array('jpg','jpeg','gif','png');
$file_parts=array();
$ext='';
$title='';
$i=0;

/* Opening the thumbnail directory and looping through all the thumbs: */

$dir_handle = @opendir($thumb_directory) or die("There is an error with your image directory!");

$i=1;
while ($file = readdir($dir_handle)) 
{
	/* Skipping the system files: */
	if($file=='.' || $file == '..') continue;
	
	$file_parts = explode('.',$file);
	$ext = strtolower(array_pop($file_parts));

	/* Using the file name (withouth the extension) as a image title: */
	$title = implode('.',$file_parts);
	$title = htmlspecialchars($title);

	/* If the file extension is allowed: */	
	if(in_array($ext,$allowed_types))
	{
		/* Generating random values for the position and rotation: */
		$left=rand(0,$stage_width);
		$top=rand(0,400);
		$rot = rand(-40,40);
		
		if($top>$stage_height-130 && $left > $stage_width-230)
		{
			/* Prevent the images from hiding the drop box */
			$top-=120+130;
			$left-=230;
		}
		
		/* Outputting each image: */
		
		echo '
		<div id="pic-'.($i++).'" class="pic" style="top:'.$top.'px;left:'.$left.'px;background:url('.$thumb_directory.'/'.$file.') no-repeat 50% 50%; -moz-transform:rotate('.$rot.'deg); -webkit-transform:rotate('.$rot.'deg);">
		<a class="fancybox" rel="fncbx" href="'.$orig_directory.'/'.$file.'" target="_blank">'.$title.'</a>
		</div>';
	}
}

/* Closing the directory */
closedir($dir_handle);
?>

</div>
                    
<!-- Image gallery end        -->

</div>            
</div>

        <div class="footer"> <!-- Marking the footer section -->

          <div class="line"></div>
       
<div class="by">
	<h4 style='text-align:left;'>Follow:</h4>	
	<a href="http://twitter.com/AbhinavKush" onclick="window.open(this.href,'newwin'); return false;" >Twitter</a>
		<a href="http://www.facebook.com/abhinav7" onclick="window.open(this.href,'newwin'); return false;" >facebook</a>
		<a href="http://in.linkedin.com/in/abhinav7" onclick="window.open(this.href,'newwin'); return false;" >Linked in</a>
		<a href="http://www.google.com/profiles/akush2007" onclick="window.open(this.href,'newwin'); return false;" >Google</a>
        
           </div>
           <a href="#" class="up">Go UP</a>    
           <p>Copyright 2010 - <a href='http://akush.in/'>Abhinav Kumar Kushwaha</a><br/>
		All views expressed here are my personal. All the information is authentic to my knowledge and belief.
		</p> <!-- Change the copyright notice -->
           

       
        </div>
            
		</div> <!-- Closing the #page section -->
        
        <!-- JavaScript Includes -->

<script type="text/javascript"> 
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));
</script> 
<script type="text/javascript"> 
try {
var pageTracker = _gat._getTracker("UA-15983124-1");
pageTracker._trackPageview();
} catch(err) {}</script> 
    
    </body>
</html>
