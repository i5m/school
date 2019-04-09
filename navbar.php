<!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div id="prof" style="margin-right: 15px;">
    <button class="btn btn-primary" onclick="window.location.href='welcome.php'"> <i class="material-icons">face</i><b> Profile </b> </button>
  </div>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="index.php"><i class="material-icons">domain</i><b> Subjects </b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="help.php"><i class="material-icons">group_work</i><b> Upload </b></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="assignments.php"><i class="material-icons">assignment</i><b> Assignments </b></a>
      </li>
    </ul>

    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav> -->

<style>
  @media only screen and (max-width: 3400px) {
    .navbar {
      width: 60%;
      border-radius: 8px;
      overflow: auto;
      position: relative;
      margin: 10px auto;
      box-shadow: 2px 2px 3px black;
      z-index: 1;
    }
    .navbar a {
      border-radius: 10px;
    }
  }

  @media only screen and (max-width: 1000px) {
    .navbar {
      width: 83%;
      border-radius: 8px;
      overflow: auto;
      position: relative;
      margin: 10px auto;
      box-shadow: 2px 2px 3px black;
      z-index: 1;
    }
    .navbar a {
      border-radius: 10px;
    }
  }

    @media only screen and (max-width: 685px) {
      .navbar {
        width: 98%;
        overflow: auto;
        position: relative;
        margin: 2px auto;
        box-shadow: 2px 2px 3px black;
        z-index: 1;
      }
      .navbar a {
        border-radius: 10px;
      }
      .navbar .material-icons {
        font-size: 35px;
      }
      .navbar .hide0{
        display: none;
      }
    }

    @media only screen and (max-width: 685px) {
      .navbar {
        width: 98%;
        overflow: auto;
        position: relative;
        margin: 2px auto;
        box-shadow: 2px 2px 3px black;
        z-index: 1;
      }
      .navbar .material-icons {
        font-size: 30px;
      }
      .navbar a {
        border-radius: 10px;
      }
      .navbar .hide0{
        display: none;
      }
    }
  
</style>

<div class="navbar">
  <a href="index.php" class="btn btn-light"><i class="material-icons">domain</i> <b class="hide0"> Home </b></a>
  <a href="assignments.php" class="btn btn-light"><i class="material-icons">assignment</i> <b class="hide0"> Assignments </b></a>
  <a href="notifications.php" class="btn btn-light"><i class="material-icons">notifications</i> <b class="hide0"> Notification </b></a>
  <a href="welcome.php" class="btn btn-light"><i class="material-icons">face</i> <b class="hide0"> Profile </b></a>
</div>

<script>


  var colors = new Array(
    [62,35,255],
    [60,255,60],
    [255,35,98],
    [45,175,230],
    [255,0,255],
    [255,128,0]);

  var step = 0;
  //color table indices for: 
  // current color left
  // next color left
  // current color right
  // next color right
  var colorIndices = [0,1,2,3];

  //transition speed
  var gradientSpeed = 0.002;

  function updateGradient()
  {
    
    if ( $===undefined ) return;
    
  var c0_0 = colors[colorIndices[0]];
  var c0_1 = colors[colorIndices[1]];
  var c1_0 = colors[colorIndices[2]];
  var c1_1 = colors[colorIndices[3]];

  var istep = 1 - step;
  var r1 = Math.round(istep * c0_0[0] + step * c0_1[0]);
  var g1 = Math.round(istep * c0_0[1] + step * c0_1[1]);
  var b1 = Math.round(istep * c0_0[2] + step * c0_1[2]);
  var color1 = "rgb("+r1+","+g1+","+b1+")";

  var r2 = Math.round(istep * c1_0[0] + step * c1_1[0]);
  var g2 = Math.round(istep * c1_0[1] + step * c1_1[1]);
  var b2 = Math.round(istep * c1_0[2] + step * c1_1[2]);
  var color2 = "rgb("+r2+","+g2+","+b2+")";

   $('.navbar').css({
     background: "-webkit-gradient(linear, left top, right top, from("+color1+"), to("+color2+"))"}).css({
      background: "-moz-linear-gradient(left, "+color1+" 0%, "+color2+" 100%)"});
    
    step += gradientSpeed;
    if ( step >= 1 )
    {
      step %= 1;
      colorIndices[0] = colorIndices[1];
      colorIndices[2] = colorIndices[3];
      
      //pick two new target color indices
      //do not pick the same as the current one
      colorIndices[1] = ( colorIndices[1] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
      colorIndices[3] = ( colorIndices[3] + Math.floor( 1 + Math.random() * (colors.length - 1))) % colors.length;
      
    }
  }

  setInterval(updateGradient,10);

</script>