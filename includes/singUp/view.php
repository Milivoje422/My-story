<?  /* design Page  */ ?>
<?php 
include 'includes/singUp/header.php';
require_once 'functions/signUp_fun.php'; ?>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
    <div class="empty_space"></div>
    <div class="form-group">
        <div class="row" id="title_status">
            <center><h2 class="wow bounceIn" data-wow-delay="0.2s">SingUp</h2></center>
        </div>     
    </div>
    <div class="row">
        <div class="container">
            <div class="singUp_box" id="singUp">
                <div class="col-lg-12 col-sm-12 col-mg-12">
                  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="form-horizontal" >
                    <div class="form-group wow fadeIn" data-wow-delay="0.1s">
                      <label for="inputName" class="col-sm-2 control-label">UserName:</label>
                      <div class="col-sm-10">
                       <input type="text" class="form-control" value="" name="username" id="inputEmail3" placeholder="UserName">
                      </div>
                    </div>
                      <div class="form-group wow fadeIn" data-wow-delay="0.3s">
                      <label for="inputName" class="col-sm-2 control-label">Name:</label>
                      <div class="col-sm-10">
                       <input type="text" class="form-control" value="" name="name" id="inputEmail3" placeholder="Name">
                      </div>
                    </div>
                    <div class="form-group wow fadeIn" data-wow-delay="0.5s">
                      <label for="inputLastname" class="col-sm-2 control-label">Lastname:</label>
                      <div class="col-sm-10">
                        <input type="text" class="form-control" value="" name="lastname" id="inputPassword3" placeholder="Lastname">
                      </div>
                    </div>
                    <div class="form-group wow fadeIn" data-wow-delay="0.7s">
                      <label for="inputEmail" class="col-sm-2 control-label">Email:</label>
                      <div class="col-sm-10">
                        <input type="email" class="form-control" value="" name="email" id="inputPassword3" placeholder="Email">
                      </div>
                    </div>
                      <div class="form-group wow fadeIn" data-wow-delay="0.9s">
                      <label for="inputPassword3" class="col-sm-2 control-label">Password:</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" value="" name="pass" id="inputPassword3" placeholder="Password">
                      </div>
                    </div>
                      <div class="form-group wow fadeIn" data-wow-delay="1.1s">
                      <label for="inputPassword3" class="col-sm-2 control-label">Confirm password:</label>
                      <div class="col-sm-10">
                        <input type="password" class="form-control" value="" name="conf-pass" id="inputPassword3" placeholder="Confirm password">
                      </div>
                    </div>
                    <div class="form-group wow bounceIn" data-wow-delay="1.3s">
                      <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" name="signUp_submit" class="btn btn-default">Sign in</button>
                      </div>
                    </div>
                  </form>
                </div>
            </div>
        </div>
    </div>
</body> 

<?php include 'footer.php' ?> 