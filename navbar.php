<?php $link = $_SERVER['REQUEST_URI']; ?>
<nav align="center">
  <div id="logospan" style="left: 10px; top: 10px; vertical-align: middle; position: absolute;">
    <img src="img/logomin.png" width="45" height="45">
    &nbsp; <span style="font-family: 'Work Sans', sans-serif; vertical-align: middle; font-size: 30px; color: #2F80ED;"> facebook </span>
  </div>
  <div id="btnspan">
    <button onclick="window.location.href='/'" class="btn <?php if($link=='/school/index.php' or $link=='/school/') echo 'active'; ?>"><img src="img/navbar/home.png" width="40" height="auto"></button>
    <button onclick="window.location.href='/assign.php'" class="btn <?php if($link=='/school/assign.php') echo 'active'; ?>"><img src="img/navbar/assignment.png" width="40" height="auto"></button>
    <button onclick="window.location.href='/profile.php'" class="btn <?php if($link=='/school/profile.php') echo 'active'; ?>"><img src="img/navbar/user.png" width="40" height="auto"></button>
    <button onclick="window.location.href='/message.php'" class="btn <?php if($link=='/school/message.php') echo 'active'; ?>"><img src="img/navbar/message.png" width="40" height="auto"></button>
    <button onclick="window.location.href='/find.php'" class="btn <?php if($link=='/school/find.php') echo 'active'; ?>"><img src="img/navbar/contacts.png" width="40" height="auto"></button>
  </div>
</nav>
<script>
  $(document).ready(function(){
    $('.active').css({"color": "#2F80ED"});
    });
</script>