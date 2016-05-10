<?php include "include/header.php"; ?>
<!-- Add jQuery library -->
<script type="text/javascript" src="/fancybox/source/jquery.latest.min.js"></script>
<!-- Add fancyBox -->
<link rel="stylesheet" href="/fancybox/source/jquery.fancybox.css" type="text/css" media="screen" />
<script type="text/javascript" src="/fancybox/source/jquery.fancybox.pack.js"></script>
<script>
  $(document).ready(function() {
    $('.fancybox').fancybox();
  });
</script>
<body class="mainBody">
  <div class="classCenter">
    <div>
      <?php gen_header(); ?>
    </div>
    <div>
      <?php include "include/nav_bar.php"; ?>
    </div>
    <div class="photo">
      <div class="photo_container">
        <?php
        /** settings **/
        $images_dir = 'images/Photo_wall/';
        $thumbs_dir = 'images/Photo_wall/thumbs/';
        $images_per_row = 5;
        generate_gallery($images_dir,$thumbs_dir,$images_per_row);
        
        ?>
      </div>
    </div>
  </div>
</body>

</html>
