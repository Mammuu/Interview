<?php include 'connection.php'; ?>
<table border ="1px" cellpadding= "10px" cellspacing="0">

<tr>
    <th>StudentName</th>
    <th>BookName</th>
    <th>StartDate</th>
    <th>EndDate</th>
    <th>   
    <input type="submit" name= "save_btn"
         value= "save"> 
      <button type="button" class="cancel">Cancel</button></th>
  </tr>

  <?php
     $query="SELECT *  FROM mydb";
     $data=mysqli_query($con,$query);
     $result=mysqli_num_rows($data);
     if($result) {
        
        while($row=mysqli_fetch_array($data)) {
            ?>
        
        <tr>
            <td><?php echo $row ['studentname']; ?>
            </td>
            <td><?php echo $row ['bookname']; ?>
            </td>
            <td><?php echo $row ['startdate']; ?>
            </td>
            <td><?php echo $row ['enddate']; ?>
            </td>
            <td>
          </tr>
            <?php
        }
    }
    else
    {
        ?>
        <tr>
      <td>No Record Found</td>
    </tr>
    <?php

    }
    ?>

         
    
     