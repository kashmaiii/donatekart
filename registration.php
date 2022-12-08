
<html>
    
    <body align="center">
       <div class="card">
       <h3> DONOR REGISTRATION </h3><br>
        <form method="post">
        <label>Email id:</label>
        <input type="text"  placeholder="enter email id" name="name" id="name"  required>
        <br>
        <br>
        <label>Password:</label>
        <input type="password" placeholder="enter password" name="pass" id="password" required>
        <br><br>
        <input type="submit" value="Submit"><br><br>
        </form>

</div>
        </body>
        <?php
        if(isset($_POST['name']) and isset($_POST['pass'])){
            $servername = "localhost";
            $username = "root";
            $password = "";
            $database="donor";
            
            $conn = mysqli_connect($servername, $username, $password,$database);
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $name=$_POST['name'];
                $password=$_POST['pass'];
                $result="INSERT INTO DON_VALUE('$name','$password')";
              }
            }
        ?>
</html>
