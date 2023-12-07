<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Book and Class Information Forms</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: space-around;
      flex-wrap: wrap; /* Allow items to wrap to the next line */
    }
    .form-container {
      max-width: 400px;
      margin: 10px; 
      padding: 20px;
      border: 2px solid #ccc;
      border-radius: 10px;
    }
    .form-group {
      margin-bottom: 16px;
      display: flex;
      align-items: center;
    }
    .form-group label {
      flex: 1;
      margin-right: 10px;
    }
    .form-group input,
    .form-group select {
      flex: 2;
      padding: 8px;
      box-sizing: border-box;
    }
    button {
      background-color: #4caf50;
      color: white;
      padding: 10px 15px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button.cancel {
      background-color: #f44336;
    }

    table {
      border-collapse: collapse;
      width: 100%;
      margin: 10px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
    }

    th {
      background-color: #f2f2f2;
    }

    button.delete {
      background-color: #f44336;
      color: white;
    }
  </style>
</head>
<body>

  <div class="form-container">
    <form action="db.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required>
      </div>
  
      <div class="form-group">
        <label for="class">Class:</label>
        <input type="text" id="class" name="class" required>
      </div>
  
      <div class="form-group">
        <label for="photos">Photos:</label>
        <input type="file" id="photos" name="photos" accept="image/*" required>
      </div>
  
      <div class="form-group">
        <label for="videos">Videos:</label>
        <input type="file" id="videos" name="videos" accept="video/*" required>
      </div>
  
      <hr>
  
      <button type="submit">save</button>
      <button type="button" class="cancel">Cancel</button>
    </form>
  </div>

  <div class="form-container">
    <form action="db2.php" method="post" enctype="multipart/form-data">
      <div class="form-group">
        <label for="Name"> name:</label>
        <input type="text" id="name" name="name" required>
      </div>
  
      <div class="form-group">
        <label for="author">author:</label>
        <input type="text" id="author" name="author" required>
      </div>
  
      <div class="form-group">
        <label for="publication">Publication:</label>
        <input type="text" id="publication" name="publication" required>
      </div>
  
      <div class="form-group">
        <label for="year">Year:</label>
        <input type="text" id="year" name="year" required>
      </div>
  
      <hr>
  
      <button type="submit">save</button>
      <button type="button" class="cancel">Cancel</button>
    </form>
  </div>



<table>
  <tr>
    <th>Name</th>
    <th>Class</th>
    <th>Photo</th>
    <th>Video</th>
    <!-- <th>Action</th> -->
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
    <td>
      <button>Edit</button>
      <button class="delete">Delete</button>
    </td>
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
 
  </tr>
  <tr>
    <td></td>
    <td></td>
    <td></td>
    <td></td>
   
  </tr>
</table>

<table>
    <tr>
      <th>Name</th>
      <th>Author</th>
      <th>Publication</th>
      <th>Year</th>
      <!-- <th>Action</th> -->
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td>
        <button>Edit</button>
        <button class="delete">Delete</button>
      </td>
    </tr>
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
     
    <tr>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    
    </tr>
  </table>

</div>

</div>

</body>
</html>