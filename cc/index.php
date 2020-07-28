<?php
   require_once('header.php');
   require_once('dbconnect.php');
    ?>
<header class="header bg-info" style="overflow:hidden">
   <div class="container">
      <h1 class="float-left">PHP Practice</h1>
      <a style="float:right" class="btn btn-warning mt-2" href="log_out.php">Log_out</a>
   </div>
</header>
<div class="container pt-5">
   <form action="" method="">
      <div class="form-group">
         <label for="country">COUNTRY</label>
         <select class="form-control" id="country" name="country">
            <option>select a country</option>
            <?php
               $query = "SELECT * FROM countries";
               $result = mysqli_query($connect_db, $query);
               while($countries = mysqli_fetch_assoc($result)){
                 echo "<option value=".$countries['id'].">".$countries['name']."</option>";
               }
            ?>
         </select>
      </div>
      <div class="form-group">
         <label for="city">CITY</label>
         <select class="form-control" id="city" name="city">
            <option value="">select a city</option>

         </select>
      </div>

      <div class="form-group">
         <label for="zip_code">ZIP CODE</label>
         <select class="form-control" id="zip_code" name="zip_code">
            <option value="">select a zip code</option>

         </select>
      </div>
   </form>
</div>

<?php require_once('footer.php');  ?>
