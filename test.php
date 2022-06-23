<?php include 'dbcon.php'; ?>
 
<!DOCTYPE html>
<html lang="en">
<head> 
    <link rel="stylesheet" href=
"https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container" style="margin-top:30px">
        <div class="row" >
            <div class="col-lg-6 col-md-6 col-12" style="border: 1px solid #88888869">
            <p style="text-align: center; font-size: 1.5rem; font-weight: bold;">Gửi bài dự thi</p>
                <form method="post" enctype="multipart/form-data">
                    <?php
                      
                        if (isset($_POST['submit']))
                        {
                      
                          $name = $_POST['name'];    
                          $sodienthoai = $_POST['sodienthoai'];                  
 
                          if (isset($_FILES['pdf_file']['name']))
                          {  
                            $accept = ["jpg", "png", "gif", "webp"];
                      
                            $file_name = $_FILES['pdf_file']['name'];
                            $file_tmp = $_FILES['pdf_file']['tmp_name'];
                             
                      
                            move_uploaded_file($file_tmp,"./pdf/".$file_name);
                     
                            $insertquery =
                            "INSERT INTO datafile(username,sdt, filename) VALUES('$name','$sodienthoai','$file_name')";
                             
                      
                            $iquery = mysqli_query($con, $insertquery);     
 
                                if ($iquery)
                               {                            
                    ?>                                             
                                  <div class=
                                "alert alert-success alert-dismissible fade show text-center">
                                    
                                    <strong>Bài dự thi đã được gửi đi thành công!</strong> 
                                  </div>
                                <?php
                                }
                                else
                                {
                                ?>
                                  <div class=
                                "alert alert-danger alert-dismissible fade show text-center">
                                    <a class="close" data-dismiss="alert" aria-label="close">
                                      ×
                                    </a>
                                    <strong>Failed!</strong> Try Again!
                                  </div>
                                <?php
                                }
                            }
                            else
                            {
                              ?>
                                <div class=
                                "alert alert-danger alert-dismissible fade show text-center">
                                  <a class="close" data-dismiss="alert" aria-label="close">
                                    
                                  </a>
                                  <strong>Failed!</strong> File must be uploaded in PDF format!
                                </div>
                              <?php
                            }// end if
                        }// end if
                    ?>
                     
                    <div class="form-input py-2">
                        <div class="form-group">
                     
                            <input type="text" class="form-control"
                                   placeholder="Họ và tên" name="name">
                        </div>   
                        <div class="form-group">
                        
                            <input type="number" class="form-control"
                                   placeholder="Số điện thoại" name="sodienthoai">
                        </div>                                 
                        <div class="form-group">
                          
                            <input type="file" name="pdf_file"
                                   class="form-control" accept=" .png, .jpg, .jpeg" multiple />
                        </div>
                        <div class="form-group" style="text-align: center">
                            <input type="submit"
                                  class="btnRegister" name="submit" value="Gửi">
                        </div>
                    </div>
                </form>
            </div>           
             
            
        </div>
    </div>
</body>
</html>