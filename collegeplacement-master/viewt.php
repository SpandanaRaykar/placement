<?php
include("config/db_connect.php");
include("templates/header.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <style>
        .div-img{  
    display:flex;
    padding-top:5%;
    padding-left:5%;
}
img{
    transition: transform .2s;
    width:70px;
    height:70px;
}
img:hover{
    transform:scale(2);
}
  </style>
</head>
<body>
<font face='Nunito Sans'>;

<section class="intro">
  <div class="bg-image h-100" style="background-color: #f5f7fa;">
    <div class="mask d-flex align-items-center h-100">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-12">
            <div class="card">
              <div class="card-body p-0">
                <div class="table-responsive table-scroll" data-mdb-perfect-scrollbar="true" style="position: relative; height: 700px">
                  <table class="table table-striped mb-0">
                  
    <div class="div-img">              
    <a href="a_app.php"><img src="images/back.png"></a>
    </div>


<head>
                        <title>Student Search</title>
                    </head>
                    <body>
                        <div class="container">
<!--                             <h2>Search Students</h2> -->
                            <form method="POST" action="">
<!--                                 <label for="student_id">Search by Student ID:</label> -->
                                <input type="text" id="coursename" name="coursename" placeholder="Enter Course Name ">
                                <button type="submit">Search</button>
                            </form>
                        </div>

                    
    <?php echo $deleteMsg??''; ?>
      <table class="table table-bordered" border="2">
       <thead>
        <tr bgcolor="#D3D3D3">
         <th>S.N</th>
         <th> TID</th>
         <th> Course Name </th>
         <th>Start-date</th>
         <th>Link </th>
       </tr>   
    </thead>
    <tbody>

<?php
                            $conn = mysqli_connect("localhost", "root", "", "placement");

                            // Check if the form is submitted
                            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                                $coursename = $_POST['coursename'];
                               // $branch = $_POST['branch'];

                                if (!empty($coursename)) {
                                    $query = "SELECT * FROM training WHERE coursename = '$coursename'";
                                // } elseif (!empty($branch)) {
                                //     $query = "SELECT * FROM student WHERE branch = '$branch'";
                                } else {
                                    $query = "SELECT * FROM training";
                                }
                            } else {
                                $query = "SELECT * FROM training";
                            }

                            $result = mysqli_query($conn, $query);
                            $sn = 1;

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_row($result)) {
                                    echo "<tr>";
                                    echo "<td>".$sn."</td>";
                                    $sn++;
                                    for ($i = 0; $i < count($row); $i++) {
                                        echo "<td>".$row[$i]."</td>";
                                    }
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='12' style='text-align:center;'>Not Found</td></tr>";
                            }
                            ?>
                            </tbody>
                        </table>
                    </body>
                </html>
                </font>
            </div>
        </div>
    </div>
</section>

</body>
</html>

                    
      
<!--     <?php
     // $conn = mysqli_connect("localhost", "root", "", "placement");
     // $query="select * from training"; 
     // $r=mysqli_query($conn,$query);
     // $sn=1;
     // while($row=mysqli_fetch_row($r)) 
     // {
     //      echo "<tr>";  echo "<td>";
     //      echo $sn; echo "</td>";
     //      $sn++;

     //     echo "<td>";
     //     echo $row[0]; echo "</td>";
       
     //     echo "<td>";
     //     echo $row[1]; echo "</td>";

     //     echo "<td>";
     //     echo $row[2]; echo "</td>";

     //     echo "<td>";
     //     echo $row[3]; echo "</td>";

    // }
 ?>
</tr>

</table>
    </font>
</body>
</html>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
</body>
</html> -->
