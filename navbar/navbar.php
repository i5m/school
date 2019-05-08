<link rel="stylesheet" href="../css/main.css">
<nav class="sticky-top" align="center">
  <div id="btnspan">
    <button id="nvhomebtn" onclick="window.location.href='../index.php'" class="btn"><img id="nvhomeimg" src="../img/navbar/homebw-min.png" width="35" height="auto"></button>
    <button id="nvassignmentbtn" onclick="window.location.href='../assignments.php'" class="btn"><img id="nvassignmentimg" src="../img/navbar/assignmentbw-min.png" width="35" height="auto"></button>
    <button id="nvuserbtn" onclick="window.location.href='../users/welcome.php'" class="btn"><img id="nvuserimg" src="../img/navbar/userbw-min.png" width="35" height="auto"></button>
    <button id="nvnotificationsbtn" onclick="window.location.href='../notifications.php'" class="btn"><img id="nvnotificactionsimg" src="../img/navbar/notificationsbw-min.png" width="35" height="auto"></button>
    <button id="nvcontactsbtn" onclick="window.location.href='../contacts.php'" class="btn"><img id="nvcontactsimg" src="../img/navbar/contactsbw-min.png" width="35" height="auto"></button>
  </div>
</nav>
<script>
  var pageLoc = location.pathname;
  if(pageLoc == '/' || pageLoc == '/index.php') {
    document.getElementById("nvhomeimg").src = '../img/navbar/home-min.png';
    document.getElementById("nvhomebtn").style.borderBottom = '3px solid #3399ff';
  }
  if(pageLoc == '/assignments.php') {
    document.getElementById("nvassignmentimg").src = '../img/navbar/assignment-min.png';
    document.getElementById("nvassignmentbtn").style.borderBottom = '3px solid #3399ff';
  }
  if(pageLoc == '/users/welcome.php' || pageLoc == '/users/login.php' || pageLoc == '/users/register.php' || pageLoc == '/users/editprofile.php' || pageLoc == '/users/reset-password.php') {
    document.getElementById("nvuserimg").src = '../img/navbar/user-min.png';
    document.getElementById("nvuserbtn").style.borderBottom = '3px solid #3399ff';
  }
  if(pageLoc == '/notifications.php') {
    document.getElementById("nvnotificationsimg").src = '../img/navbar/notifications-min.png';
    document.getElementById("nvnotificationsbtn").style.borderBottom = '3px solid #3399ff';
  }
  if(pageLoc == '/contacts.php') {
    document.getElementById("nvcontactsimg").src = '../img/navbar/contacts-min.png';
    document.getElementById("nvcontactsbtn").style.borderBottom = '3px solid #3399ff';
  }
</script>