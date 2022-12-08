<html>
    
    <body align="center">
       <div class="card">
       <h3> DONOR REGISTRATION </h3><br>
        <form method="post">
        <label>Email id:</label>
        <input type="email"  placeholder="enter email id" name="name" id="name"  required>
        <br>
        <br>
        <label>Password:</label>
        <input type="password" placeholder="enter password" name="pass" id="password" required>
        <br><br>
        <input type="submit" value="Submit" name="submit"><br><br>
        </form>

</div>
        </body>
        <?php
        if(isset($_POST['name']) && isset($_POST['pass'])){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database="donor";
            
            $conn = mysqli_connect($servername, $username, $password,$database);
            if ($conn){
            if (isset($_POST['submit'])) {
                $name=$_POST['name'];
                $password=$_POST['pass'];
                $result="INSERT INTO don_info(EMAIL_ID,PASSWORD1) VALUES('$name','$password')";
                $q=mysqli_query($conn,$result);
                echo $q;
              }
            }
            else{
                echo "no";
            
            }
        }
        ?>
</html>
