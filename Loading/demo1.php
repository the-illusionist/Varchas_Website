<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
        <title>Varchas</title>
                
        <link rel="stylesheet" href="css/jbclock.css" type="text/css" media="all" />
        <script type="text/javascript" src="js/jquery-1.8.0.min.js"></script>
        <script type="text/javascript" src="./fancybox/jquery.mousewheel-3.0.4.pack.js"></script>
	<script type="text/javascript" src="./fancybox/jquery.fancybox-1.3.2.js"></script>
	<link rel="stylesheet" type="text/css" href="./fancybox/jquery.fancybox-1.3.2.css" media="screen" />
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
 	<link rel="stylesheet" href="style.css" />
	
	<script type="text/javascript">
		$(document).ready(function() {

			$("a#example6").fancybox({
				'width'				: '40%',
				'height'			: '100%',
				'autoScale'			:  true,
				'type'				: 'iframe',
				'onStart': function() {
      $('#fancybox-outer').css({'background':'transparent'});
      $('#fancybox-bg-n,#fancybox-bg-ne,#fancybox-bg-e,#fancybox-bg-se,#fancybox-bg-s,#fancybox-bg-sw,#fancybox-bg-w,#fancybox-bg-nw')
      .css({'background-image':'none'});
    }
				
			});
	});
	</script>
		<script type="text/javascript" src="js/jbclock.js"></script>
                <script type="text/javascript">
            $(document).ready(function(){
                JBCountDown({
                    secondsColor : "#ffdc50",
                    secondsGlow  : "none",
                    
                    minutesColor : "#9cdb7d",
                    minutesGlow  : "none",
                    
                    hoursColor   : "#378cff",
                    hoursGlow    : "none",
                    
                    daysColor    : "#ff6565",
                    daysGlow     : "none",
                    
                    startDate   : "1357034400",
                    endDate     : "1391866800",
                    now         : "1383500668"
                });
            });
        </script>
    </head>
    <body style="background-color:#000;">
    <div id="down" class="glow">
<div id="down-text"  style="margin-top:10px"align="center">
<font   size="+2" color="#333333"><strong>Indian Institute of Technology, Jodhpur</strong></font>
</div>
</div>

    
    
   <p style="margin-left:350px; margin-top:10px"><img src="1.jpg" alt="varchas" style="margin-left:100px"><img src="vachas logo.jpg" />
   </p>
    
    </div>
     <div class="wrapper">
        <h1 style=" margin-top:60px; color:#FFF;">You can <a id="example6" href="formv.php" title="Varchas Registration">register</a> here...</h1>
        <h4 style="color:#FFF;">Varchas gets live on 13 Feb:</h4>
        <div class="clock">
            <!-- Days -->
            <div class="clock_days">
                <div class="bgLayer">
                    <div class="topLayer"></div>
                    <canvas id="canvas_days" width="188" height="188">
                    </canvas>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type_days">Days</p>
                    </div>
                </div>
            </div>
            <!-- Days -->
            <!-- Hours -->
            <div class="clock_hours">
                <div class="bgLayer">
                    <div class="topLayer"></div>
                    <canvas id="canvas_hours" width="188" height="188">
                    </canvas>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type_hours">Hours</p>
                    </div>
                </div>
            </div>
            <!-- Hours -->
            <!-- Minutes -->
            <div class="clock_minutes">
                <div class="bgLayer">
                    <div class="topLayer"></div>
                    <canvas id="canvas_minutes" width="188" height="188">
                    </canvas>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type_minutes">Minutes</p>
                    </div>
                </div>
            </div>
            <!-- Minutes -->
            <!-- Seconds -->
            <div class="clock_seconds">
                <div class="bgLayer">
                    <div class="topLayer"></div>
                    <canvas id="canvas_seconds" width="188" height="188">
                    </canvas>
                    <div class="text">
                        <p class="val">0</p>
                        <p class="type_seconds">Seconds</p>
                    </div>
                </div>
            </div>
            <!-- Seconds -->
        </div>
        <div class="divider">
       	  <p style="margin-bottom:150px">In the meantime why dont follow us on <a target="blank" href="www.facebook.com/Varchas.IITRajasthan">Facebook?</a></p>
        </div>
        </div><!--/wrapper-->
    </body>
     <script src="js/bootstrap.min.js"></script>
</html>