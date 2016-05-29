<?php include 'header.php'; ?>
  
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Profile</h1>
                        <h1 class="page-subhead-line">Edit your profile. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
              
             
            <div class="col-md-4">
                
            
                <div class="form-group">
                      <label for="exampleInputEmail1">Username</label>
                      <input type="text" class="form-control" value="" id="exampleInputEmail1" placeholder="Username">
                </div>
                <div class="form-group">
                      <label for="exampleInputEmail1">Name</label>
                      <input type="text" class="form-control" value="" id="exampleInputPassword1" placeholder="Name">
                </div>
                <div class="form-group">
                      <label for="exampleInputEmail1">Lastname</label>
                      <input type="text" class="form-control" value="" id="exampleInputPassword1" placeholder="Lastname">
                </div>
                <div class="form-group">
                      <label for="exampleInputEmail1">Email</label>
                      <input type="email" class="form-control" value="" id="exampleInputPassword1" placeholder="Email">
                </div>
                <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="Text" class="form-control" value="" id="exampleInputPassword1" placeholder="Password">
                </div>                
            </div>

                <div class="col-md-4">                    
                     <div class="form-group">
                         <img src="assets/img/avatar.jpeg" class="img-thumbnail " id="news_image" alt="your image" style="height: 100px; width: 100px;" border-radius="5px"  name="image"/>
                            <label for="image">Select image</label>
                            <input type="file" class="form_control" name="image" id="src">
                                <script type="text/javascript">
                                        function showImage(src,target) {
                                                var fr=new FileReader();
                                                // when image is loaded, set the src of the image where you want to display it
                                                fr.onload = function(e) { target.src = this.result; };
                                                src.addEventListener("change",function() {
                                                  // fill fr with image data    
                                                  fr.readAsDataURL(src.files[0]);
                                                });
                                              }

                                              var src = document.getElementById("src");
                                              var target = document.getElementById("news_image");
                                              showImage(src,target);
                            
                                </script>
                     </div>
                    
<!--                        <div class="form-group">
                      <label for="exampleInputFile">File input</label>
                      <input type="file" id="exampleInputFile">
                      <p class="help-block">Example block-level help text here.</p>
                    </div>-->
<!--                    <div class="checkbox">
                      <label>
                        <input type="checkbox"> Check me out
                      </label>
                    </div>-->
                    <!--<button type="submit" class="btn btn-default">Submit</button>-->
                        
                </div>

                
                
<!--            <div class="row">
                <div class="col-md-6">
                     Kitchen Sink 
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Kitchen Sink
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                      End  Kitchen Sink 
                </div>
                <div class="col-md-6">
                        Basic Table  
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Basic Table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                       End  Basic Table  
                </div>
            </div>
                 /. ROW  
            <div class="row">
                <div class="col-md-6">
                          Striped Rows Table  
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Striped Rows Table
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                      End  Striped Rows Table  
                </div>-->
<!--                <div class="col-md-6">
                        Bordered Table  
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Bordered Table
                        </div>
                         /.panel-heading 
                        <div class="panel-body">
                            <div class="table-responsive table-bordered">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>First Name</th>
                                            <th>Last Name</th>
                                            <th>Username</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>1</td>
                                            <td>Mark</td>
                                            <td>Otto</td>
                                            <td>@mdo</td>
                                        </tr>
                                        <tr>
                                            <td>2</td>
                                            <td>Jacob</td>
                                            <td>Thornton</td>
                                            <td>@fat</td>
                                        </tr>
                                        <tr>
                                            <td>3</td>
                                            <td>Larry</td>
                                            <td>the Bird</td>
                                            <td>@twitter</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                       End  Bordered Table  
                </div>-->
            </div>
                <!-- /. ROW  -->

                <!-- /. ROW  -->

            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>

<?php include 'footer.php'; ?>
