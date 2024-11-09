<?php 
    $cn = mysqli_connect("localhost","root","","company2");

    if (isset($_POST['submit'])) 
    {   
            $emp_id = $_POST['emp_id'];    
            $emp_no= $_POST['emp_no']; 
            $empname = $_POST['emp_name'];             
    
            $q = mysqli_query($cn, "update employees set emp_no='$emp_no', emp_name='$empname' where emp_id='$emp_id'");
            session_start();
            $_SESSION['message']="Update Data Succesfully....";
           
            header("Location: index.php");     
    } 

    if (isset($_GET['emp_id']))             
    {    
        $emp_id = $_GET['emp_id'];   
        $q = mysqli_query($cn,"select * from employees where emp_id = '$emp_id'");

        while ($r=mysqli_fetch_assoc($q)) 
        { 
            $emp_id = $r['emp_id'];  
            $emp_no = $r['emp_no'];     
            $emp_name = $r['emp_name'];                                                   
?>       
      
<form action="" method="post">        
                             
     <input type="hidden" name="emp_id" value="<?php echo $emp_id; ?>">
        <br>Employee Number:<br>          
        <input type="text" name="emp_no" value="<?php echo $emp_no; ?>"> 

        <br>Employee name:<br>          
            <input type="text" name="emp_name" value="<?php echo $emp_name; ?>">        
                 
        <br><br>            
        <input type="submit" value="submit" name="submit">                                                                                                        
</form>        
                                                        
</body>      
                                                        
</html>                                                     
 <?php 
 
}
}?> 

