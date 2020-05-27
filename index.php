

<html>
  <body>
    <div class="index-title">
      <br>
      <h1><?php echo $blogname ?></h1>
      <br>
    </div>

    <div class="index-post">

      <br>
      <?php
      
        for ($i = 1; $i <= $config['post']; $i ++)
        {
          echo "
          <h3><a href=\"/view?pid=$i\"".$posttit[$i]."</a></h3>
          <span>In ".$posttag[$i]."</span>
          <hr><br>
          ";
        }

      ?>
    </div>
  </body>
</html>