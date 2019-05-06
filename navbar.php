<?php $link = $_SERVER['REQUEST_URI']; ?>
<nav align="center">
  <div id="btnspan">
    <button id="nvhomebtn" onclick="window.location.href='index.php'" class="btn"><img id="nvhomeimg" src="img/navbar/homebw.png" width="35" height="auto"></button>
    <button id="nvassignmentbtn" onclick="window.location.href='assignments.php'" class="btn"><img id="nvassignmentimg" src="img/navbar/assignmentbw.png" width="35" height="auto"></button>
    <button id="nvuserbtn" onclick="window.location.href='welcome.php'" class="btn"><img id="nvuserimg" src="img/navbar/userbw.png" width="35" height="auto"></button>
    <button id="nvmessagebtn" onclick="window.location.href='message.php'" class="btn"><img id="nvmessageimg" src="img/navbar/messagebw.png" width="35" height="auto"></button>
    <button id="nvcontactsbtn" onclick="window.location.href='contacts.php'" class="btn"><img id="nvcontactsimg" src="img/navbar/contactsbw.png" width="35" height="auto"></button>
  </div>
</nav>
<script>
  var pageLoc = location.pathname;
  if(pageLoc == '/school' || pageLoc == '/school/index.php') {
    document.getElementById("nvhomeimg").src = 'img/navbar/home.png';
    document.getElementById("nvhomebtn").style.borderBottom = '3px solid #3399ff'
  }
  if(pageLoc == '/school/assignments.php') {
    document.getElementById("nvassignmentimg").src = 'img/navbar/assignment.png';
    document.getElementById("nvassignmentbtn").style.borderBottom = '3px solid #3399ff'
  }
  if(pageLoc == '/school/welcome.php' || pageLoc == '/school/login.php' || pageLoc == '/school/register.php') {
    document.getElementById("nvuserimg").src = 'img/navbar/user.png';
    document.getElementById("nvuserbtn").style.borderBottom = '3px solid #3399ff'
  }
  if(pageLoc == '/school/message.php') {
    document.getElementById("nvmessageimg").src = 'img/navbar/message.png';
    document.getElementById("nvmessagebtn").style.borderBottom = '3px solid #3399ff'
  }
  if(pageLoc == '/school/contacts.php') {
    document.getElementById("nvcontactsimg").src = 'img/navbar/contacts.png';
    document.getElementById("nvcontactsbtn").style.borderBottom = '3px solid #3399ff'
  }
</script>