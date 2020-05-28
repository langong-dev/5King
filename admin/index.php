<?php

if ($_COOKIE['login']=="")
  echo "<script>window.location.href=\"login.php\";</script>";

include "includes.php";

?>

<html>
  <head>
    <title>Config</title>
  </head>
  <body>
    <h1>Config your blog</h1>
    <br>
    <div class="admin">
      <form action="update.php" method="post">
        <table>
          <tr>
            <td>Blog name 博客名称</td>
            <td><input name="name" type="text" value="<?php echo $config['name'] ?>"></td>
          </tr>
          <tr>
            <td>Blog describe 博客描述</td>
            <td><input name="des" type="text" value="<?php echo $config['land'] ?>"></td>
          </tr>
          <tr>
            <td>Posts 文章数量</td>
            <td><?php echo $config['post'] ?></td>
          </tr>
          <?php
            for ($i = 1; $i <= $config['post']; $i ++)
            {
              $ntit = $posttit[$i];
              echo "
              <tr>
                <td>Post NO.$i 文章 $i</td>
                <td><a href=\"edit.php?pid=$i\">$ntit</a></td>
              </tr>
              ";
            }
          ?>
        </table>
        <a href="creat.php">Creat a new post</a><br>
        <input type="button" value=" Back " onclick="javascript:window.location.href='/'">
        <input type="submit" value=" Go ">
      </form>
    </div>
  </body>
</html>