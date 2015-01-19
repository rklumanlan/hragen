<html>
    <head>
    <script src="<?php echo base_url(); ?>assets/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>assets/jquery.Jcrop.js"></script>
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery.Jcrop.min.css" type="text/css" />
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/jquery.Jcrop.css" type="text/css" />
 
    
 
  </head>
 
  <body>
 
  <div id="outer">
  <div class="jcExample">
  <div class="article"><form action="<?php echo base_url(); ?>upload/do_crop" method="post" onSubmit="return checkCoords();">
 <input type="submit" value="Crop Image" />
    <h1>Jcrop - Crop Behavior</h1>
 
    <!-- This is the image we're attaching Jcrop to -->
    <img src="<?php echo base_url(); ?>images/a.jpg" id="cropbox" class="jcrop img" />
 
    <!-- This is the form that our event handler fills -->
    
      <input type="hidden" id="x" name="x" />
      <input type="hidden" id="y" name="y" />
      <input type="hidden" id="w" name="w" />
      <input type="hidden" id="h" name="h" />
      
    </form>
 
    <p>
      <b>An example server-side crop script.</b> Hidden form values
      are set when a selection is made. If you press the <i>Crop Image</i>
      button, the form will be submitted and a 150x150 thumbnail will be
      dumped to the browser. Try it!
    </p>
 
    <div id="dl_links">
      <a href="http://deepliquid.com/content/Jcrop.html">Jcrop Home</a> |
      <a href="http://deepliquid.com/content/Jcrop_Manual.html">Manual (Docs)</a>
    </div>
  </div>
  </div>
  </div>
  </body>
 
</html>