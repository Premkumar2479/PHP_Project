<?php
   include "header1.php";
   include "connection.php";


//logic to deal the register form
if($_SERVER["REQUEST_METHOD"]=="POST"){

    if(isset($_POST['name']) & 
    isset($_POST['email']) & 
    isset($_POST['password'])){
        $name =$_POST['name'];
        $email=$_POST['email'];
        $password=$_POST['password'];

      $sql = "Insert into users(name,email,pass)values('$name', '$email','$password')"; 

        $result = mysqli_query($con,$sql);
        $success = true;
        if(isset($success))
            echo"<script>alert('Registered');</script>";
    }
    

    if(isset($_POST['email_cu']) & isset($_POST['msg']))
        {$email_cu=$_POST['email_cu'];
        $msg=$_POST['msg'];
        $name =null;
        $email=null;
        $password=null;
        $sql = "Insert into contact_us(email,msg)values('$email_cu','$msg')"; 
        $result = mysqli_query($con,$sql);
        $success1 = true;
        if(isset($success1))
        echo"<script>alert('We will see your message!!');</script>";
    }
    
  
    
    
}







   ?>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

<body>


      <div  class="px-3 py-2 text-bg-dark border-bottom">
         <div class="container">
            <div class="d-flex flex-wrap align-items-center justify-content-center justify-content-lg-start">
               <a href="/" class="d-flex align-items-center my-2 my-lg-0 me-lg-auto text-white text-decoration-none">
                  <svg class="bi me-2" width="40" height="32" role="img" aria-label="Bootstrap">
                     <use xlink:href="#bootstrap"></use>
                  </svg>
               </a>
               <ul class="nav col-12 col-lg-auto my-2 justify-content-center my-md-0 text-small">
                  <li>
                     <a href="#" class="nav-link text-secondary">
                        <svg class="bi d-block mx-auto mb-1" width="24" height="24" aria-hidden="true">
                           <use xlink:href="#home"></use>
                        </svg>
                        Home
                     </a>
                  </li>
                  <li>
                     <a href="#" class="nav-link text-white">
                        <svg class="bi d-block mx-auto mb-1" width="24" height="24" aria-hidden="true">
                           <use xlink:href="#speedometer2"></use>
                        </svg>
                        Dashboard
                     </a>
                  </li>
                  <li>
                     <a href="#" class="nav-link text-white">
                        <svg class="bi d-block mx-auto mb-1" width="24" height="24" aria-hidden="true">
                           <use xlink:href="#table"></use>
                        </svg>
                        Orders
                     </a>
                  </li>
                  <li>
                     <a href="#" class="nav-link text-white">
                        <svg class="bi d-block mx-auto mb-1" width="24" height="24" aria-hidden="true">
                           <use xlink:href="#grid"></use>
                        </svg>
                        Products
                     </a>
                  </li>
                  <li>
                     <a href="#" class="nav-link text-white">
                        <svg class="bi d-block mx-auto mb-1" width="24" height="24" aria-hidden="true">
                           <use xlink:href="#people-circle"></use>
                        </svg>
                        Customers
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
      <div class="px-3 py-2 border-bottom mb-3">
         <div class="container d-flex flex-wrap justify-content-center">
            <form class="col-12 col-lg-auto mb-2 mb-lg-0 me-lg-auto" role="search"> <input type="search" class="form-control" placeholder="Search..." aria-label="Search"> </form>
            <div class="text-end"> <button type="button" class="btn btn-light text-dark me-2">Login</button>
               <button id="register" type="button" class="btn btn-light text-dark me-2">Register</button>
               <button id="contact_us" type="button" class="btn btn-light text-dark me-2">Contact Us</button>
            </div>
         </div>
      </div>

<script>
$(document).ready(function () {
    $("reg_form").css("display", "block");
    $("#cu_form").css("display", "none");

    $("#contact_us").click(function () {
        $("#cu_form").css("display", "block");  
        $("#reg_form").css("display", "none");  
    });
    $("#register").click(function () {
        $("#cu_form").css("display", "none");  
        $("#reg_form").css("display", "block");  
    });
});


</script>

</body>

<?php require"Registerform1.php";
?>