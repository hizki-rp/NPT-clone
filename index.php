<?php
include "database.php";

 
$number = 1;
// getting questions from table
$query = "select * from `questions` where question_number = $number";

$result = $mysqli->query($query) or die(mysqli->error.__LINE__);

$question = $result->fetch_assoc();
//getting choices from table
$query = "select * from `choices` where question_number = $number";

$choices = $mysqli->query($query) or die(mysqli->error.__LINE__);


?>
<!DOCTYPE html>
 <html lang="en">
  <head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>National Product Testing clone</title>
    <link rel="stylesheet" href="./css/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
<body> 

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark lg-12 sm-4 justify-content-center align-items-center pt-4 pb-4">
     <a class="navbar-brand" href="#" >
       <h2>National Product Testing Clone</h2>
     </a>

    </nav>

   <div class="progress mb-">
      <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </header>
   
<main>

    <div class="row">
      <div class="col-6 mx-auto">   

        <div class="card align-items-center";>
          <span style="font-size:large;" class="pt-4">
            <?php echo $question['text']; ?>
          </span>
            <div class="card-body">
                 <input type="hidden" name="ocs_p488348_1101680" value="No">
                     <div class=" mb-4">
                         <?php 
                          while($row = $choices->fetch_assoc()) :?>
                          <li class="pb-4" style="list-style:none;">
                            <button type="button" class="btn btn-primary" style="height: 2.5rem; width:8rem;"><?php echo $row['text'] , "\n"; ?></button>
                          </li>
                         <?php endwhile;?>
  
                      </div>
   
               </div>

        </div>
      </div>
        

  <div id="565995" class="ad-placement-item" data-creative_id="1101870" data-tracking_id="DCCC550C41D711EE82B862BDC67C7D5DD0ACF02B" data-click_url="https://clk.flexdirectpath.com/c/c=1101870/s=291705/p=692/m=DCCC550C41D711EE82B862BDC67C7D5DD0ACF02B/" style="display: none;">
    <span>Whats the model of your car?</span>
      <div class="survey-answers">
              <input type="hidden" name="ocs_p488348_1101870">
              <input type="text">
              <button type="button">Done</button>
              
              
      </div>

      <div id="634129" class="ad-placement-item" data-creative_id="1838521" data-tracking_id="DCCCB34441D711EE82B862BDC67C7D5DD0AC1663" data-click_url="https://clk.flexdirectpath.com/c/c=1838521/s=291705/p=692/m=DCCCB34441D711EE82B862BDC67C7D5DD0AC1663/" style="display: none;">
       <span>Did you employ 5 or more W2 employees for 2020 and 2021? (1099s Do not count)</span>
         <div class="survey-answers">
              <input type="hidden" name="ocs_p488348_1838521">
              <div>Yes - 5 or more employees</div>
              <div>No - 4 or less employees</div>
   
          </div>


</main>

  <footer class="d-flex flex-wrap justify-content-between lg-12 sm-4 align-items-center py-3 my-4 border-top  bg-dark">
    <div class="col-md-4 ">
     
      
    </div>

    
  </footer>

   
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>