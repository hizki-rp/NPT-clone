<?php
include "database.php";
$number = 1;
$n = $number;

session_start();

if(isset($_POST["1"]))
{
  display1();
}
else if(isset($_POST["2"]))
{
  display2();
}
else if(isset($_POST["3"]))
{
  display3();
}
else if(isset($_POST["4"]))
{
  display4();
}
else if(isset($_POST["5"]))
{
  display5();
}
else{
  display1();
}





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
<body style="opacity: 0.955;"> 

  <header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark lg-12 sm-4 justify-content-center align-items-center pt-4 pb-4"">
     <a class="navbar-brand" href="#" >
       <h2>National Product Testing Clone</h2>
     </a>

    </nav>

   <div class="progress mb-">
      <div class="progress-bar w-75" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
    </div>
  </header>
   
<main>

    
           <?php function display1()
           {
            global $number, $mysqli;

            $query = "select * from `questions` where question_number = $number";

            $result = $mysqli->query($query) or die(mysqli->error.__LINE__);
            
            $question = $result->fetch_assoc();
            //getting choices from table
            $query = "select * from `choices` where question_number = $number";
            
            $choices = $mysqli->query($query) or die(mysqli->error.__LINE__);
            
                        

            ?>
            <div class="row">
          <div class="col-6 mx-auto">   
        

        <div class="card align-items-center" style="border:none";>
          <span style="font-size:large;" class="pt-4">
          
          <form action="" method="post">
            
            <strong> <?php echo $number; echo $question['text']; ?> </strong>
          </span>
            <div class="card-body">

                     <div class=" mb-4">
                     <input type="hidden" name="counter" value="<?php echo $number; ?>" />
                    <?php while($row = $choices->fetch_assoc()): ?>   
                      
                          <input type="button" name="button" class="btn btn-primary button" value=<?php echo $row['text']; ?> style="margin-bottom:20px;" ><br>
                          <?php endwhile; ?>   
                         
                          <input type="submit" name="2" value="2" />

                         </form>
                    <?php }
                    ?>

<?php function display2()
           {
            global $number, $mysqli;

            $number += 1;

            $query = "select * from `questions` where question_number = 2";

            $result = $mysqli->query($query) or die(mysqli->error.__LINE__);
            
            $question = $result->fetch_assoc();
            //getting choices from table
            $query = "select * from `choices` where question_number = 2";
            
            $choices = $mysqli->query($query) or die(mysqli->error.__LINE__);
            
                        

            ?>
            <div class="row">
          <div class="col-6 mx-auto">   
        

        <div class="card align-items-center" style="border:none";>
          <span style="font-size:large;" class="pt-4">
          
          <form action="" method="post">
            
            <strong> <?php echo 2; echo $question['text']; ?> </strong>
          </span>
            <div class="card-body">

                     <div class=" mb-4">
                     <input type="hidden" name="counter" value="<?php echo 2; ?>" />
                    <?php while($row = $choices->fetch_assoc()): ?>   
                      
                          <input type="button" name="button" class="btn btn-primary button" value=<?php echo $row['text']; ?> style="margin-bottom:20px;" ><br>
                          <?php endwhile; ?>   
                         
                          <input type="submit" name="3" value="3" />

                         </form>
                    <?php }
                    ?>



<?php function display3()
           {
            global $number, $mysqli;
             
            

            $query = "select * from `questions` where question_number = 3";

            $result = $mysqli->query($query) or die(mysqli->error.__LINE__);
            
            $question = $result->fetch_assoc();
            //getting choices from table
            $query = "select * from `choices` where question_number = 3";
            
            $choices = $mysqli->query($query) or die(mysqli->error.__LINE__);
            
                        

            ?>
            <div class="row">
          <div class="col-6 mx-auto">   
        

        <div class="card align-items-center" style="border:none";>
          <span style="font-size:large;" class="pt-4">
          
          <form action="" method="post">
            
            <strong> <?php echo 3; echo $question['text']; ?> </strong>
          </span>
            <div class="card-body">

                     <div class=" mb-4">
                     <input type="hidden" name="counter" value="<?php echo 3; ?>" />
                    <?php while($row = $choices->fetch_assoc()): ?>   
                      
                          <input type="button" name="button" class="btn btn-primary button" value=<?php echo $row['text']; ?> style="margin-bottom:20px;" ><br>
                          <?php endwhile; ?>   
                         
                          <input type="submit" name="4" value="4" />

                         </form>
                    <?php }
                    ?>

                    
<?php function display4()
           {
            global $number, $mysqli;
             
            

            $query = "select * from `questions` where question_number = 4";

            $result = $mysqli->query($query) or die(mysqli->error.__LINE__);
            
            $question = $result->fetch_assoc();
            //getting choices from table
            $query = "select * from `choices` where question_number = 4";
            
            $choices = $mysqli->query($query) or die(mysqli->error.__LINE__);
            
                        

            ?>
            <div class="row">
          <div class="col-6 mx-auto">   
        

        <div class="card align-items-center" style="border:none";>
          <span style="font-size:large;" class="pt-4">
          
          <form action="" method="post">
            
            <strong> <?php echo 3; echo $question['text']; ?> </strong>
          </span>
            <div class="card-body">

                     <div class=" mb-4">
                     <input type="hidden" name="counter" value="<?php echo 3; ?>" />
                    <?php while($row = $choices->fetch_assoc()): ?>   
                      
                          <input type="button" name="button" class="btn btn-primary button" value=<?php echo $row['text']; ?> style="margin-bottom:20px;" ><br>
                          <?php endwhile; ?>   
                         
                          <input type="submit" name="5" value="5" />

                         </form>
                    <?php }
                    ?>

<?php function display4()
           {
            global $number, $mysqli;
             
            

            $query = "select * from `questions` where question_number = 4";

            $result = $mysqli->query($query) or die(mysqli->error.__LINE__);
            
            $question = $result->fetch_assoc();
            //getting choices from table
            $query = "select * from `choices` where question_number = 4";
            
            $choices = $mysqli->query($query) or die(mysqli->error.__LINE__);
            
                        

            ?>
            <div class="row">
          <div class="col-6 mx-auto">   
        

        <div class="card align-items-center" style="border:none";>
          <span style="font-size:large;" class="pt-4">
          
          <form action="" method="post">
            
            <strong> <?php echo 3; echo $question['text']; ?> </strong>
          </span>
            <div class="card-body">

                     <div class=" mb-4">
                     <input type="hidden" name="counter" value="<?php echo 3; ?>" />
                    <?php while($row = $choices->fetch_assoc()): ?>   
                      
                          <input type="button" name="button" class="btn btn-primary button" value=<?php echo $row['text']; ?> style="margin-bottom:20px;" ><br>
                          <?php endwhile; ?>   
                         
                          <input type="submit" name="5" value="5" />

                         </form>
                    <?php }
                    ?>
                   
                      </div>
   
             
              </li>



</main>

  <footer class="d-flex flex-wrap justify-content-between lg-12 sm-4 align-items-center py-3 my-4 border-top  bg-dark">
    <div class="col-md-4 ">
     
      
    </div>

   
   
  </footer>




   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>


