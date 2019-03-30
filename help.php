<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<?php require_once('header.php'); ?>

<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #333;;
}

#regForm {
  background-color: #ffffff;
  margin: 100px auto;
  font-family: Raleway;
  padding: 40px;
  width: 70%;
  min-width: 300px;
}

h1 {
  text-align: center;  
}

input {
  padding: 10px;
  width: 100%;
  font-size: 17px;
  font-family: Raleway;
  border: 1px solid #aaaaaa;
}

/* Mark input boxes that gets an error on validation: */
input.invalid {
  background-color: #ffdddd;
}

/* Hide all steps by default: */
.tab {
  display: none;
}

button {
  background-color: #4CAF50;
  color: #ffffff;
  border: none;
  padding: 10px 20px;
  font-size: 17px;
  font-family: Raleway;
  cursor: pointer;
}

button:hover {
  opacity: 0.8;
}

#prevBtn {
  background-color: #bbbbbb;
}

/* Make circles that indicate the steps of the form: */
.step {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbbbbb;
  border: none;  
  border-radius: 50%;
  display: inline-block;
  opacity: 0.5;
}

.step.active {
  opacity: 1;
}

/* Mark the steps that are finished and valid: */
.step.finish {
  background-color: #4CAF50;
}
</style>

</head>
<body> 

    <?php require_once('navbar.php'); ?>

<form id="regForm" action="upload.php" method="post" enctype="multipart/form-data">
  
  <!-- One "tab" for each step in the form: -->
  <div class="tab"><h1><i class="material-icons">description</i> <b> Subject </b></h1>
    
    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01"><i class="material-icons">note</i></label>
        </div>
        <select name="subject" class="custom-select" id="inputGroupSelect01" required>
            <option value="java">Advanced Java</option>
            <option value="skills">Employblity Skills</option>
            <option value="physics">Engineering Physics</option>
            <option value="matlab">Basics of MATLAB</option>
            <option value="workshop">Workshop Practice</option>
            <option value="mechanics">Engineering Mecahnics</option>
            <option value="maths">Maths II</option>
            <option value="comm">Prof Comm</option>
        </select>
    </div>

    <div class="input-group mb-3">
        <div class="input-group-prepend">
            <label class="input-group-text" for="inputGroupSelect01"><i class="material-icons">call_split</i></label>
        </div>
        <select name="category" class="custom-select" id="inputGroupSelect01">
            <option value="theory">Theory</option>
            <option value="practical">Practical</option>
        </select>
    </div>
   
  </div>

  <div class="tab"><h1><i class="material-icons">label</i> <b> File </b></h1>
    <div class="input-group mb-3">
        <div class="custom-file">
            <input type="file" class="custom-file-input" name="fileToUpload" id="fileToUpload" required>
            <label class="custom-file-label" for="customFile"><i class="material-icons">send</i></label>
        </div>
    </div>
  </div>

  <div class="tab"><h1><i class="material-icons">loyalty</i> <b> Tpoic </b></h1>
    <div class="input-group mb-3">
        <div class="input-group-prepend">
        <span class="input-group-text" id="basic-addon1"><i class="material-icons">gesture</i></span>
        </div>
        <input name="topic" type="text" class="form-control" placeholder="Topic?" aria-label="Topic?" aria-describedby="basic-addon1">
    </div>
  </div>

  <div style="overflow:auto;">
    <div style="float:right;">
      <button type="button" class="btn btn-secondary" id="prevBtn" onclick="nextPrev(-1)"><span style="color: black;">Previous</span></button>
      <button type="button" class="btn btn-success" id="nextBtn" onclick="nextPrev(1)">Next</button>
    </div>
  </div>
  <!-- Circles which indicates the steps of the form: -->
  <div style="text-align:center;margin-top:40px;">
    <span class="step"></span>
    <span class="step"></span>
    <span class="step"></span>
  </div>
</form>

<script>
var currentTab = 0; // Current tab is set to be the first tab (0)
showTab(currentTab); // Display the current tab

function showTab(n) {
  // This function will display the specified tab of the form...
  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";
  //... and fix the Previous/Next buttons:
  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").innerHTML = "Submit";
  } else {
    document.getElementById("nextBtn").innerHTML = "Next";
  }
  //... and run a function that will display the correct step indicator:
  fixStepIndicator(n)
}

function nextPrev(n) {
  // This function will figure out which tab to display
  var x = document.getElementsByClassName("tab");
  // Exit the function if any field in the current tab is invalid:
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab:
  x[currentTab].style.display = "none";
  // Increase or decrease the current tab by 1:
  currentTab = currentTab + n;
  // if you have reached the end of the form...
  if (currentTab >= x.length) {
    // ... the form gets submitted:
    document.getElementById("regForm").submit();
    return false;
  }
  // Otherwise, display the correct tab:
  showTab(currentTab);
}

function validateForm() {
  // This function deals with validation of the form fields
  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");
  // A loop that checks every input field in the current tab:
  for (i = 0; i < y.length; i++) {
    // If a field is empty...
    if (y[i].value == "") {
      // add an "invalid" class to the field:
      y[i].className += " invalid";
      // and set the current valid status to false
      valid = false;
    }
  }
  // If the valid status is true, mark the step as finished and valid:
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  return valid; // return the valid status
}

function fixStepIndicator(n) {
  // This function removes the "active" class of all steps...
  var i, x = document.getElementsByClassName("step");
  for (i = 0; i < x.length; i++) {
    x[i].className = x[i].className.replace(" active", "");
  }
  //... and adds the "active" class on the current step:
  x[n].className += " active";
}
</script>

<?php require_once('footer.php'); ?>