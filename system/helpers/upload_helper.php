<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Upload extends CI_Controller { 
 
    public function index ( ) 
  { 
    # call view crop 
    $this->load->view ('crop') ; 
  } 
  
  public function do_crop ( ) { 
    //# grab the crop width 
    $targ_w = $_POST['w']; 
    # abmil crop heigth 
    $targ_h = $_POST[ 'p' ] ; 
    # crop the image ratio 
    $jpeg_quality = 90 ; 
 
    # folder where the image you want in the crop 
    $src = APPPATH . '../images/pool.jpg' ; 
    
    # initials handle copy image 
    $img_r = imagecreatefromjpeg ( $src ) ; 
    $dst_r = imagecreatetruecolor ( $targ_w , $targ_h ) ; 
    
    # save results croping in another folder 
    $path_img_crop = realpath ( APPPATH . '../images/result' ) ; 
    # name pictures in the crop 
    $img_name_crop = time ( ) . '.jpg' ; 
    
    # process 
    
    
    //create images 
    imagejpeg ( $dst_r , $path_img_crop . '/' . $img_name_crop , $jpeg_quality ) ; 
  } 

} 
?>

<script language="Javascript">
 
      $(function(){
        var jcrop_api;
        $('#cropbox').hover(function(e) {
alert("P");        });
        $('#cropbox').Jcrop({
          aspectRatio: 1,
          onSelect: updateCoords,
          setSelect: [ 0, 0, 15, 15 ]
        },function(){
          jcrop_api = this;
        });
        
        jcrop_api.setOptions({ 
          bgFade: true,
          bgOpacity: 0.4
        });
      });
 
      function updateCoords(c)
      {
        $('#x').val(c.x);
        $('#y').val(c.y);
        $('#w').val(c.w);
        $('#h').val(c.h);
      };
 
      function checkCoords()
      {
        if (parseInt($('#w').val())) return true;
        alert('Please select a crop region then press submit.');
        return false;
      };
 
    </script>
