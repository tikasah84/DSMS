
<?php  $title = "ADMIN-Login";
include('header.php');
include('../Database/function.php');
include('../Database/connection.php');

$msg='';


if(isset($_POST['submit'])){
   $username = get_safe_value($con,$_POST['username']);
   $password = get_safe_value($con,$_POST['password']);
  
   
   
   $sql = "select * from `alogin` where username = '$username' and password = '$password' ";
   $res = mysqli_query($con,$sql);
   $data = mysqli_fetch_assoc($res);
  
   
   if ( false===$res ) {
      printf("error: %s\n", mysqli_error($con));
      die();
    }
    else {
     
  }
   $count = mysqli_num_rows($res);
   if($count>0){
    
      $_SESSION['ADMIN_LOGIN']='yes'; 
      $_SESSION['ADMIN_username']=$data['username'];
      $_SESSION["id"] = $data['id'];
    
			
			if(!empty($_POST["checkbox"])) {
				setcookie ("username",$username,time()+ (10 * 365 * 24 * 60 * 60));
        setcookie ("password",$password,time()+ (10 * 365 * 24 * 60 * 60));
			} else {
				if(isset($_COOKIE["username"])) {
					setcookie ("username","");
				}
        if(isset($_COOKIE["password"])) {
					setcookie ("password","");
				}
    }
  
header('location:/Minor/Admin/dashbord.php');

   }else{
       $msg = "Plese enter correct login details";
     
   }
  }

?>
<body>
    

  <header>
    <style>
      #intro {
        background-image: url(https://mdbootstrap.com/img/new/fluid/city/008.jpg);
        height: 109vh;
      }

      /* Height for devices larger than 576px */
      @media (min-width: 992px) {
        #intro {
          margin-top: -58.59px;
        }
      }

      .navbar .nav-link {
        color: #fff !important;
      }
    </style>

    <!-- Navbar -->
    

    <!-- Background image -->
    <div id="intro" class="bg-image shadow-2-strong">
      <div class="mask d-flex align-items-center h-100" style="background-color: rgba(0, 0, 0, 0.8);">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-xl-5 col-md-8">
              <form class="bg-white rounded shadow-5-strong p-5" method="post" action="login_admin.php">
                <!-- Email input -->
                    <h2>ADMIN LOGIN</h2>
                <div class="form-outline mb-4">
                  <input type="username" name="username" class="form-control" required />
                  <label class="form-label" for="form1Example1">Username</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" name="password" class="form-control" required />
                  <label class="form-label" for="form1Example2">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                    <input class="form-check-input" type="hidden" name="checkbox" value="0" id="form1Example3"  />
                      <input class="form-check-input" type="checkbox" name="checkbox" value="1" id="form1Example3"  />
                      <label class="form-check-label" for="form1Example3">
                        Remember me
                        
                      </label>
                    </div>
                   
                  </div>

                 
                </div>
                <p style="color:red;"></p>
                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>

  <?php

  if($msg!=''){
    ?>
      
    <script>
    toastr.error('<?php echo $msg ?>'); </script>
        <?php
    
    
  
  }
  
  include('footer.php'); ?>
