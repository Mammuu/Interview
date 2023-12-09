<?php include 'connection.php'; ?>
<table border ="1px" cellpadding= "10px" cellspacing="0">

<tr>
      <th>Name</th>
      <th>Author</th>
      <th>Publication</th>
      <th>Year</th>
    <th>   
    <input type="submit" name= "save_btn"
         value= "save"> 
      <button type="button" class="cancel">Cancel</button></th>
</tr>
<?php
     $query="SELECT *  FROM book";
     $data=mysqli_query($con,$query);
     $result=mysqli_num_rows($data);
     if($result) {
        
        while($row=mysqli_fetch_array($data)) {
            ?>
        
        <tr>

        <tr>
            <td><?php echo $row ['name']; ?>
            </td>
            <td><?php echo $row ['author']; ?>
            </td>
            <td><?php echo $row ['publication']; ?>
            </td>
            <td><?php echo $row ['year']; ?>
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
