<?php include "include/header.php"; ?>
<body class="mainBody">
<div class="classCenter">
  <div>
    <?php gen_header(); ?>
  </div>
  <div>
    <?php include "include/nav_bar.php"; ?>
  </div>
  <div>
    <table class="body_table">
      <tr>
        <td class="body_left_sidebar">
        <div class="working_on">What are you working on</div><br />
        <div class="photo_wall">Photo Gallery<div>
<?php
          /** settings **/
            $img_dir = 'images/Photo_wall/';
            $thumbs_main_dir = 'images/Photo_wall/thumbs_main/';
            $images_per_row = 3;
// this thumbs should be generated from the admin page that controls the images that get published
//            $thumbs_dir = 'images/Photo_wall/thumbs/';
//            $thumbs_width = 200;
//            $thumbs_width_main = 65;
//            create_thumbs($img_dir,$thumbs_dir,$thumbs_width);
//            create_thumbs($img_dir,$thumbs_main_dir,$thumbs_width_main);    
            generate_home_gallery($thumbs_main_dir,$images_per_row);
?>
          <a href="photo_wall.php"><span class="empty"></span></a></div></div>
        <br />
        <div class="new_hires">New Hires</div>
        </td>
        <td>
          <div>
          <table>
          <tr>
          <td class="body_center">
            <div class="polls">Company poll</div><br />
            <div class="questions">Questions Feature</div><br />
            <div class="luncher">Luncher Module</div>
          </td>
          <td class="body_right_sidebar">
            
            <div class="calendar"><span>Calendar <br /></span><div class="calendar-scroll">
<?php   
                get_Calendar_events();
?>  
            </div></div><br />
            <div class="news">News Widget</div><br />
            <div class="applauz">Applauz App</div>           
          </td>
          </tr>
          </table>
          </div>
        </td>
      </tr>
    </table>
  </div>
</div>
</body>
</html>
