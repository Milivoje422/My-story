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
              
             
            <div class="col-md-6">
                <div class="col-md-10">
            
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

                
                <div class="form-group">
                    <label for="exampleInputPassword1">Country</label>
                      <form class="form-inline">                     
                          <select id="lunchBegins" class="selectpicker form-control" data-live-search="true"  data-live-search-style="begins" title="Please select country ...">
                            <?php $query = make_query("SELECT * FROM countries");  
                              foreach($query as $key => $result){ 
                              echo '<option id="'.$key.'">'.$result['country_name'].'</option>';
                              }
                            ?>
                          </select>
                      </form>
                </div> 
                    
                    
                <div class="form-group">
                      <label for="exampleInputPassword1">Password</label>
                      <input type="Text" class="form-control" value="" id="exampleInputPassword1" placeholder="Password">
                </div> 
                    
                <div class="Img-box">
                         <div class="col-md-4">
                         </div>
                         <div class="col-md-4 m-s-t">
                         <img src="assets/img/avatar.jpeg" class="img-thumbnail " id="news_image" alt="your image" style="height: 100px; width: 100px;" border-radius="5px"  name="image"/>
                         <?php //$result[''];  ?>
                         
                            <label for="image"></label></div>
                         <div class="col-md-4"></div>
                         </br>   
     
                            <div class="col-md-12 m-s-t">
                                <input type="file" id="files" name="file" />
                                <div id="progress_bar"><div class="percent">0%</div></div>
                            </div>
                     </div>
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

            var src = document.getElementById("files");
            var target = document.getElementById("news_image");
            showImage(src,target);
                                              
            var reader;
            var progress = document.querySelector('.percent');

            function abortRead() {
              reader.abort();
            }

            function errorHandler(evt) {
              switch(evt.target.error.code) {
                case evt.target.error.NOT_FOUND_ERR:
                 alert('File Not Found!');
                 break;
              case evt.target.error.NOT_READABLE_ERR:
                 alert('File is not readable');
                 break;
              case evt.target.error.ABORT_ERR:
                break; // noop
                default:
                alert('An error occurred reading this file.');
              };
            }

            function updateProgress(evt) {
                      // evt is an ProgressEvent.
              if (evt.lengthComputable) {
                    var percentLoaded = Math.round((evt.loaded / evt.total) * 100);
                      // Increase the progress bar length.
                if (percentLoaded < 100) {
                    progress.style.width = percentLoaded + '%';
                    progress.textContent = percentLoaded + '%';
                }
              }
            }

        function handleFileSelect(evt) {
              // Reset progress indicator on new file selection.
            progress.style.width = '0%';
            progress.textContent = '0%';

            reader = new FileReader();
            reader.onerror = errorHandler;
            reader.onprogress = updateProgress;
            reader.onabort = function(e) {
              alert('File read cancelled');
                };
            reader.onloadstart = function(e) {
            document.getElementById('progress_bar').className = 'loading';
                };
            reader.onload = function(e) {
              // Ensure that the progress bar displays 100% at the end.
            progress.style.width = '100%';
            progress.textContent = '100%';
            setTimeout("document.getElementById('progress_bar').className='';", 2000);
                }

              // Read in the image file as a binary string.
            reader.readAsBinaryString(evt.target.files[0]);
                }

            document.getElementById('files').addEventListener('change', handleFileSelect, false);
                                             
</script>
        </div>
    </div>
    <div class="col-md-6">
        <div class="col-md-10">
              <div class="form-group">
                <label for="exampleInputFile">File input</label>
                <input type="file" id="exampleInputFile">
                <p class="help-block">Example block-level help text here.</p>
              </div>
              <div class="checkbox">
                <label>
                    <input type="checkbox"> Check me out
                </label>
              </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </div>
    </div>
                

                
         
        </div>
      </div>
    </div>
  </div>

<?php include 'footer.php'; ?>
