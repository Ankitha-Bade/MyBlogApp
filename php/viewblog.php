<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>View Blogs</title>
    <style>
    body{
    
    text-align: center;
      }
    
      table {
        font-family: arial, sans-serif;
        border-collapse: collapse;
        width: 100%;
      }
       
      td, th {
        border: 1px solid #dddddd;
        text-align: left;
        padding: 8px;
        font-size: 18px;
        height: 50px;
      }
       
      tr:nth-child(even) {
        background-color: #dddddd;
        font-size: 20px;
      }
    
      button{
        width: 200px;
        height: 50px;
        border-radius: 20px;
        font-size: 25px;
        background-color: pink;
      }
      </style>
</head>
<body>
    <h1>Blog Details</h1>
    <table>
        <tr>
            <td>S.No</td>
            <td>Title</td>
            <td>Description</td>
        </tr>
        <?php
        $con = mysqli_connect('localhost','root','','myblog');
        $record = mysqli_query($con, "SELECT * FROM blogdata");
        while($data = mysqli_fetch_array($record)){
        ?>
        <tr>
            <td><?php echo $data['id']?></td>
            <td><?php echo $data['title']?></td>
            <td><?php echo $data['description']?></td>
        </tr>
        <?php
        }
        ?>
    </table>
    <form action="../blog.html">
    <button>Go Back</button>
</form>
</body>
</html>