<!DOCTYPE html>
<html>

<head>
  <title>Online Examination System</title>
  <link href="css/test.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="data/css/bootstrap.min.css">
  <script type="text/javascript" src="data/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="data/css/bootstrap.min.css">
  <script type="text/javascript" src="js/clear.js"></script>

  <script src="http://code.jquery.com/jquery-latest.js"></script>

  <script>
    $document.ready(fucntion(){
      $("#timing2").load("time.php");
      setInterval(function() {
        $("#timing2").load("time.php");
      },1000);
    });
    </script>
</head>

<body>
  <?php
  $con = mysqli_connect("localhost","root","","subject");
  $id = $qno = $question = $opt1 = $opt2 = $opt3 = $opt4 = $ans = [];
  $count = 0;
  $sql2 = "select id, qno, question , opt1, opt2, opt3, opt4, ans from bio";
  $result = $con -> query($sql2);
  if($result-> num_rows > 0) {
    while($row = $result-> fetch_assoc()) { 
      $id[$count] = $row["id"];
      $qno[$count] = $row["qno"];
      $question[$count] = $row["question"];
      $opt1[$count] = $row["opt1"];
      $opt2[$count] = $row["opt2"];
      $opt3[$count] = $row["opt3"];
      $opt4[$count] = $row["opt4"];
      $ans[$count] = $row["ans"];
      $count++;
   } }
   $count = 0;
  ?>
  <div id="header">
    <h1 class="heading-name">
      Online Examination System
    </h1>
  </div>
  <!-- Login info and timing -->
  <div class="subject-info">
    <h1 class="subject">
      biology chapter 1
    </h1>
  </div>
  <div class="timing">
    <p class="ign"> Welcome : ( user name )</p>
  </div>
  <div id="timing2">
    <p class="time"> REMAINING TIME : <?php echo date('H:i:s') ?></p>
  </div>

  <!-- question paper start from here-->
  <div class="qno">
   <?php 
   function questionno($qno,$count){
    echo '<p class="number" style="color : red; font-size: 20px; padding-top : 6px;">Number : &nbsp'. $qno[$count]; 
    echo '</p>';
    echo '<p class="neg">Correct marks: +2 Negative marks: -0.5</p>'; }
    questionno($qno,$count);
    ?>
  </div>
  <div class="q">
    <div class="question">
      <?php
      // create SQL query to select question form the databse using ID of the table 
      // table - ID . quesiton , opt1 , opt2, opt3, opt4 , ans 
      // user - subject selected, quesiton id ,questio name ,  option selected 
      //
      $sql1 = "select question , opt1, opt2, opt3, opt4, ans from bio";
      $result = $con -> query($sql1);

      if($result-> num_rows > 0) {
        if($row = $result-> fetch_assoc()) {
        echo '<h1>'. $row["question"];
        echo '</h1>';
        }  }
      ?>
    </div>
    <div class="options">
      <form name="opt" action="#">
        <?php
// create SQL query to select question option from the databse with the help of ID
      function questions($opt1,$opt2,$opt3,$opt4,$count) {
        echo '<input type="radio" name="option" class="choice" value="" />'. $opt1[$count];
        echo '<br>';
        echo '<input type="radio" name="option" class="choice" value="" />'. $opt2[$count]; 
        echo '<br>';
        echo '<input type="radio" name="option" class="choice" value="" />'. $opt3[$count]; 
        echo '<br>';
        echo '<input type="radio" name="option" class="choice" value="" />'. $opt4[$count]; 
        echo '<br> <br>'; }
      questions($opt1,$opt2,$opt3,$opt4,$count);
         
?>
        <button type="button" class="btn-btn-primaryz" onclick="clearSelection('opt','option',false);">Previous</button>
        <!-- <button type="button" class="btn-btn-primaryz" onclick="<?php questions($opt1,$opt2,$opt3,$opt4,++$count); ?>">Next</button> -->
        <button type="button" class="btn-btn-primaryz" onclick="clearSelection('opt','option',false);">Next</button>
        <button type="button" class="btn-btn-primaryz" onclick="clearSelection('opt','option',false);">Clear</button>
        <button type="button" class="btn-btn-primaryz" onclick="clearSelection('opt','option',true);">FINISH</button>
      </form>
    </div>
  </div>
  <!-- footer start from here-->
  <div class="card text-center">
    <div class="card-header">
    </div>
    <div class="card-body">
      <h5 class="card-title">Contact Info</h5>
      <!--<p class="card-text">With supporting text below as a natural lead-in to additional content.</p>-->
      <a href="https://in.linkedin.com/in/dipak-bansode-213bbb152" class="btn-btn-primary">Contact Us</a>
      <a href="#" class="btn-btn-primary1">Whatsapp</a>
      <a href="https://www.youtube.com/channel/UCZj1CTt3azBgRiTIJTCInbw" class="btn-btn-primary2">Youtube</a>
      <a href="#" class="btn-btn-primary3">Admin</a>
    </div>
    <div class="card-footer text-muted">
      Made by Dipak Bansode @ 2021
    </div>
  </div>
</body>

</html>