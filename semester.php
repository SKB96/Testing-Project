<?php include "inc/database.php"; ?><!--include database source-->
<?php include "inc/head.php"; ?><!--include head source-->
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.9/angular.min.js"></script>
<!--page body start-->
<div class="">
  <div class="w3-row">
    <div class="w3-col m1 w3-hide-small"><p><br></p></div>
    <div class="w3-col m2 w3-container w3-padding">
      <form action="/search" method="GET">
        <input type="text" id="search_text" class="w3-input w3-border w3-round" placeholder="Search subject">
      </form>
      <br>
      <p class="rfont w3-small w3-margin-top"><b>CATAGORIES</b></p>
      <?php
      $sqlBatch="SELECT * from batch order by n asc";
      $resultBatch=mysqli_query($con,$sqlBatch);
      while($rowBatch = $resultBatch->fetch_assoc()){
      ?>
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
        <input type="text" name="batchName" value="<?php echo $rowBatch['session']; ?>" style="display: none;">
        <p class="rfont w3-small w3-bar w3-text-black"><b><button class="w3-btn" name="academicbatch">CSE <?php echo $rowBatch['session']; ?> Batch</button></b></p>
      </form>
      <?php
        }
      ?>
    </div>
    <div class="w3-col m8 w3-container w3-padding">
      <div class="w3-border w3-padding-large">
        <p class="rfont" style="text-transform: uppercase; "><b>CSE / <?php echo $_SESSION['academicbatch']; ?> session</b></p>
        <hr>
        <div class="w3-row">
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input type="text" name="session" value="1st Year 1st Semester" style="display:none;"/>
            <input type="text" name="sessionvalue" value="1" style="display:none;"/>
            <button class="w3-button w3-hover-white rfont w3-small w3-hover-text-black w3-text-gray" name="semestersession"><b>1<sup>st</sup> Year 1<sup>st</sup> Semester</b></button><br>
          </form>
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input type="text" name="session" value="1st Year 2nd Semester" style="display:none;"/>
            <input type="text" name="sessionvalue" value="2" style="display:none;"/>
            <button class="w3-button w3-hover-white rfont w3-small w3-hover-text-black w3-text-gray" name="semestersession"><b>1<sup>st</sup> Year 2<sup>nd</sup> Semester</b></button><br>
          </form>
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input type="text" name="session" value="2nd Year 1st Semester" style="display:none;"/>
            <input type="text" name="sessionvalue" value="3" style="display:none;"/>
            <button class="w3-button w3-hover-white rfont w3-small w3-hover-text-black w3-text-gray" name="semestersession"><b>2<sup>nd</sup> Year 1<sup>st</sup> Semester</b></button><br>
          </form>
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input type="text" name="session" value="2nd Year 2nd Semester" style="display:none;"/>
            <input type="text" name="sessionvalue" value="4" style="display:none;"/>
            <button class="w3-button w3-hover-white rfont w3-small w3-hover-text-black w3-text-gray" name="semestersession"><b>2<sup>nd</sup> Year 2<sup>nd</sup> Semester</b></button><br>
          </form>
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input type="text" name="session" value="3rd Year 1st Semester" style="display:none;"/>
            <input type="text" name="sessionvalue" value="5" style="display:none;"/>
            <button class="w3-button w3-hover-white rfont w3-small w3-hover-text-black w3-text-gray" name="semestersession"><b>3<sup>rd</sup> Year 1<sup>st</sup> Semester</b></button><br>
          </form>
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input type="text" name="session" value="3rd Year 2nd Semester" style="display:none;"/>
            <input type="text" name="sessionvalue" value="6" style="display:none;"/>
            <button class="w3-button w3-hover-white rfont w3-small w3-hover-text-black w3-text-gray" name="semestersession"><b>3<sup>rd</sup> Year 2<sup>nd</sup> Semester</b></button><br>
          </form>
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input type="text" name="session" value="4th Year 1st Semester" style="display:none;"/>
            <input type="text" name="sessionvalue" value="7" style="display:none;"/>
            <button class="w3-button w3-hover-white rfont w3-small w3-hover-text-black w3-text-gray" name="semestersession"><b>4<sup>th</sup> Year 1<sup>st</sup> Semester</b></button><br>
          </form>
          <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>" method="post">
            <input type="text" name="session" value="4th Year 2nd Semester" style="display:none;"/>
            <input type="text" name="sessionvalue" value="8" style="display:none;"/>
            <button class="w3-button w3-hover-white rfont w3-small w3-hover-text-black w3-text-gray" name="semestersession"><b>4<sup>th</sup> Year 2<sup>nd</sup> Semester</b></button><br>
          </form>
          <br>
        </div>
      </div>
    </div>
    <div class="w3-col m1 w3-hide-small"><p><br></p></div>
  </div>
  <br>
</div>
<!--page body end-->
<?php include "inc/footer.php"; ?><!--include head source-->
