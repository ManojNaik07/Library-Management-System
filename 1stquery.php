<!DOCTYPE html>
<html lang="en">
<head>
    <title>SQL QUERY 1</title>
    <style>
            #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
            }

            #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
            }

            #customers tr:nth-child(even){background-color: #f2f2f2;}

            #customers tr:hover {background-color: #ddd;}

            #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
            }
    </style>
</head>
<body>
        <table id="customers">
                <tr>
                        <th>Card Number</th>
                        <th>Student Name</th>
                </tr>
                <?php 
                        $con = mysqli_connect('localhost', 'root', 'root') or die(mysqli_error($con));
                        mysqli_select_db($con, 'library_db')  or die(mysqli_error($con));
                        $query = "Select * from CARD";
                        
                        $result = mysqli_query($con, $query) or die(mysqli_error($con));
                        if ($result->num_rows > 0)
                        {
                            while($row = $result->fetch_assoc()) {
                                echo "<tr><td>".$row["CARD_NO"]."</td><td>".$row["stud_name"]."</td></tr>";
                            }
                        }
                        else{
                            echo "NO DATA";
                        }
                ?>
        </table>
        <br>
        <p><a href="../query.html">Click</a> to go back to query section</p>
</body>
</html>

