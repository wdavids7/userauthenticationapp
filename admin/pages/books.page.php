<?php
session_start();

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

?> 
    
<?php
include '../components/connection.php';
include '../components/navbar.php';
?> 

</br>
    <h2 class="text-center pt-3">List of Books</h2>
</br>
    <form class="col-6 d-flex pe-2" role="search" method="post" name="form1">
        <input class="form-control me-2" type="search" name="search" placeholder="Search" aria-label="Search" required>
        <button class="btn btn-outline-primary me-2" type="submit" name="submit">Search</button>
        <button class="btn btn-outline-primary" type="submit" name="submit">Clear</button>
    </form>
    </br>
</br>

    <?php
        if(isset($_POST['submit']))
        {
            $q=mysqli_query($dbh,"SELECT * from books where name like '%$_POST[search]%' ");

            if(mysqli_num_rows($q)==0)
            {
                echo "Sorry! No book found. Try searching again.";
            }
            else
            {
                echo "<table class='table table-md table-bordered table-hover'>";
                echo "<tr class='table-primary'>";
                //TABLE HEADER
                echo "<th>"; echo "ID"; echo "</th>";
                echo "<th>"; echo "Book Title"; echo "</th>";
                echo "<th>"; echo "Authors Name"; echo "</th>";
                echo "<th>"; echo "Edition"; echo "</th>";
                echo "<th>"; echo "Status"; echo "</th>";
                echo "<th>"; echo "Genre"; echo "</th>";
                echo "<th>"; echo "Quantity"; echo "</th>";
                echo "<th>"; echo "Department"; echo "</th>";

                echo "</tr>";

                while($row=mysqli_fetch_assoc($q))
                {    
                    echo "<tr>";
                    echo "<td>"; echo $row['bid']; echo "</td>";
                    echo "<td>"; echo $row['name']; "</td>";
                    echo "<td>"; echo $row['authors']; "</td>";
                    echo "<td>"; echo $row['edition']; "</td>";
                    echo "<td>"; echo $row['status']; "</td>";
                    echo "<td>"; echo $row['genre']; "</td>";
                    echo "<td>"; echo $row['quantity']; "</td>";
                    echo "<td>"; echo $row['department']; "</td>";

                    echo "</tr>";
                }
        echo "</table>";
            }
        }
        //IF THE BUTTON IS NOT PRESSED
        else
        {
            $result=mysqli_query($dbh,"SELECT * FROM `books` ORDER BY `books`.`name`ASC;");

            echo "<table class='table table-bordered table-hover'>";
            echo "<tr class='table-primary'>";
            //TABLE HEADER
            echo "<th>"; echo "ID"; echo "</th>";
            echo "<th>"; echo "Book Title"; echo "</th>";
            echo "<th>"; echo "Authors Name"; echo "</th>";
            echo "<th>"; echo "Edition"; echo "</th>";
            echo "<th>"; echo "Status"; echo "</th>";
            echo "<th>"; echo "Genre"; echo "</th>";
            echo "<th>"; echo "Quantity"; echo "</th>";
            echo "<th>"; echo "Department"; echo "</th>";

            echo "</tr>";

            while($row=mysqli_fetch_assoc($result))
            {    
                echo "<tr>";
                echo "<td>"; echo $row['bid']; echo "</td>";
                echo "<td>"; echo $row['name']; "</td>";
                echo "<td>"; echo $row['authors']; "</td>";
                echo "<td>"; echo $row['edition']; "</td>";
                echo "<td>"; echo $row['status']; "</td>";
                echo "<td>"; echo $row['genre']; "</td>";
                echo "<td>"; echo $row['quantity']; "</td>";
                echo "<td>"; echo $row['department']; "</td>";

                echo "</tr>";
            }
        echo "</table>";
        }
    ?>


</body>
</html>  
   
<?php
include '../components/footer.php';
?>



