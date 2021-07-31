


<?php  $title = "Receptionist-Login";
include('header.php');
include('../Database/function.php');
include('../Database/connection.php');

$msg='';


if(isset($_POST['submit'])){
   $email = get_safe_value($con,$_POST['email']);
   $pass = get_safe_value($con,$_POST['password']);
   
  //  if($password==""){
  //    header("Location:update_password.php");
  //  }
  
  
   
   
   $sql = "select * from `add_receptionist` where email = '$email'";
   
   $res = mysqli_query($con,$sql);
   $data = mysqli_fetch_assoc($res);
    
   
   if ( false===$res ) {
      printf("error: %s\n", mysqli_error($con));
      die();
    }
    if(password_verify($pass, $data['password'])) {
  $count = mysqli_num_rows($res);
   if($count>0){
    
    
      $_SESSION['RECEP_LOGIN']='yes'; 
      $_SESSION['RECEP_name']=$data['name'];
      $_SESSION['RECEP_email']=$data['email'];
      $_SESSION["id"] = $data['id'];
    
			
			if(!empty($_POST["checkbox"])) {
				setcookie ("email",$email,time()+ (10 * 365 * 24 * 60 * 60));
        setcookie ("password",$password,time()+ (10 * 365 * 24 * 60 * 60));
			} else {
				if(isset($_COOKIE["email"])) {
					setcookie ("email","");
				}
        if(isset($_COOKIE["password"])) {
					setcookie ("password","");
				}
    }


header('location:/Minor/Receptionist/billing.php');

   }}else{
   
      $msg = "Plese enter correct login details";
   }
  }

?>
<body>
    

  <header>
    <style>
      #intro {
        background-image: url(./img/background.jpg);
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
              <form class="bg-white rounded shadow-5-strong p-5" method="POST" action="index.php">
                <!-- Email input -->
                    <h2>STAFF LOGIN</h2>
                <div class="form-outline mb-4">
                  <input type="email" id="form1Example1" name="email" class="form-control" required />
                  <label class="form-label" for="form1Example1">Email</label>
                </div>

                <!-- Password input -->
                <div class="form-outline mb-4">
                  <input type="password" id="form1Example2" name="password" class="form-control" />
                  <label class="form-label" for="form1Example2">Password</label>
                </div>

                <!-- 2 column grid layout for inline styling -->
                <div class="row mb-4">
                  <div class="col d-flex justify-content-center">
                    <!-- Checkbox -->
                    <div class="form-check">
                    <input class="form-check-input" type="hidden" value="0" name="checkbox" id="form1Example3"  />
                      <input class="form-check-input" type="checkbox" value="1" name="checkbox" id="form1Example3"  />
                       
                      <label class="form-check-label" for="form1Example3">
                        Remember me
                      </label>
                      <p style="color:red;"> <?php echo $msg ?></p>
                    </div>
                   
                  </div>

                  
                </div>

                <!-- Submit button -->
                <button type="submit" name="submit" class="btn btn-primary btn-block">Submit</button>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <?php include('./footer.php'); ?>
