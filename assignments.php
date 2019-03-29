<?php require_once('header.php') ?>
</head>
<body>
<?php require_once('navbar.php') ?>
<br>
<div align="center">
<b>Sort by: </b>
<button type="button" onclick="sortActivity()" style="margin: 5px;" class="btn btn-outline-primary">Actvity Name</button>
<button type="button" onclick="sortDate()" style="margin: 5px;" class="btn btn-outline-success">Date</button>
<button type="button" onclick="sortCourse()" style="margin: 5px;" class="btn btn-outline-danger">Course</button>
</div>
<br>
<table class="table" id="myTable">

  <thead class="thead-light">
    <tr>
      <th scope="col"> Activity Name</th>
      <th scope="col"> Date</th>
      <th scope="col"> Course Code</th>
      <th scope="col"> Course Name</th>
    </tr>
  </thead>

  <tbody>
    <tr>
      <th scope="row">WT1</th>
      <td>21 Jan, 2019</td>
      <td>EN106</td>
      <td>Proffesional Communication</td>
    </tr>
    <tr>
      <th scope="row">WT2</th>
      <td>11 March, 2019</td>
      <td>EN106</td>
      <td>Proffesional Communication</td>
    </tr>
    <tr>
      <th scope="row">GA1</th>
      <td>24 Jan, 2019</td>
      <td>EN106</td>
      <td>Proffesional Communication</td>
    </tr>
    <tr>
      <th scope="row">GA2</th>
      <td>14 March, 2019</td>
      <td>EN106</td>
      <td>Proffesional Communication</td>
    </tr>
  
    <tr>
      <th scope="row">WT1</th>
      <td>28 Jan, 2019</td>
      <td>PY102</td>
      <td>Eng. Physics</td>
    </tr>
    <tr>
      <th scope="row">WT2</th>
      <td>18 March, 2019</td>
      <td>PY102</td>
      <td>Eng. Physics</td>
    </tr>
    <tr>
      <th scope="row">GA1</th>
      <td>31 Jan, 2019</td>
      <td>PY102</td>
      <td>Eng. Physics</td>
    </tr>
    <tr>
      <th scope="row">GA2</th>
      <td>21 March, 2019</td>
      <td>PY102</td>
      <td>Eng. Physics</td>
    </tr>
  
    <tr>
      <th scope="row">WT1</th>
      <td>4 Feb, 2019</td>
      <td>MA 102</td>
      <td>Mathematics - II</td>
    </tr>
    <tr>
      <th scope="row">WT2</th>
      <td>25 March, 2019</td>
      <td>MA 102</td>
      <td>Mathematics - II</td>
    </tr>
    <tr>
      <th scope="row">GA1</th>
      <td>7 Feb, 2019</td>
      <td>MA 102</td>
      <td>Mathematics - II</td>
    </tr>
    <tr>
      <th scope="row">GA2</th>
      <td>28 March, 2019</td>
      <td>MA 102</td>
      <td>Mathematics - II</td>
    </tr>
  
    <tr>
      <th scope="row">WT1</th>
      <td>11 Feb, 2019</td>
      <td>CP 104</td>
      <td>CP / JAVA</td>
    </tr>
    <tr>
      <th scope="row">WT2</th>
      <td>1 April, 2019</td>
      <td>CP 104</td>
      <td>CP / JAVA</td>
    </tr>
    <tr>
      <th scope="row">GA1</th>
      <td>14 Feb, 2019</td>
      <td>CP 104</td>
      <td>CP / JAVA</td>
    </tr>
    <tr>
      <th scope="row">GA2</th>
      <td>4 April, 2019</td>
      <td>CP 104</td>
      <td>CP / JAVA</td>
    </tr>
  
    <tr>
      <th scope="row">WT1</th>
      <td>18 Feb, 2019</td>
      <td>ME 102</td>
      <td>Eng. Mechanics</td>
    </tr>
    <tr>
      <th scope="row">WT2</th>
      <td>8 April, 2019</td>
      <td>ME 102</td>
      <td>Eng. Mechanics</td>
    </tr>
    <tr>
      <th scope="row">GA1</th>
      <td>21 Feb, 2019</td>
      <td>ME 102</td>
      <td>Eng. Mechanics</td>
    </tr>
    <tr>
      <th scope="row">GA2</th>
      <td>11 April, 2019</td>
      <td>ME 102</td>
      <td>Eng. Mechanics</td>
    </tr>
  
    <tr>
      <th scope="row">WT1</th>
      <td>25 Feb, 2019</td>
      <td>EC 102</td>
      <td>MATLAB</td>
    </tr>
    <tr>
      <th scope="row">WT2</th>
      <td>15 April, 2019</td>
      <td>EC 102</td>
      <td>MATLAB</td>
    </tr>
    <tr>
      <th scope="row">GA1</th>
      <td>28 Feb, 2019</td>
      <td>EC 102</td>
      <td>MATLAB</td>
    </tr>
    <tr>
      <th scope="row">GA2</th>
      <td>20 April, 2019</td>
      <td>EC 102</td>
      <td>MATLAB</td>
    </tr>
  </tbody>
  
</table>

<script>

function sortActivity() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TH")[0];    
      y = rows[i + 1].getElementsByTagName("TH")[0];
      //check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}

function sortDate() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[0];    
      y = rows[i + 1].getElementsByTagName("TD")[0];
      //check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}

function sortCourse() {
  var table, rows, switching, i, x, y, shouldSwitch;
  table = document.getElementById("myTable");
  switching = true;
  /*Make a loop that will continue until
  no switching has been done:*/
  while (switching) {
    //start by saying: no switching is done:
    switching = false;
    rows = table.rows;
    /*Loop through all table rows (except the
    first, which contains table headers):*/
    for (i = 1; i < (rows.length - 1); i++) {
      //start by saying there should be no switching:
      shouldSwitch = false;
      /*Get the two elements you want to compare,
      one from current row and one from the next:*/
      x = rows[i].getElementsByTagName("TD")[2];    
      y = rows[i + 1].getElementsByTagName("TD")[2];
      //check if the two rows should switch place:
      if (x.innerHTML.toLowerCase() > y.innerHTML.toLowerCase()) {
        //if so, mark as a switch and break the loop:
        shouldSwitch = true;
        break;
      }
    }
    if (shouldSwitch) {
      /*If a switch has been marked, make the switch
      and mark that a switch has been done:*/
      rows[i].parentNode.insertBefore(rows[i + 1], rows[i]);
      switching = true;
    }
  }
}

</script>

<?php require_once('footer.php') ?>