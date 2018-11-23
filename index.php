<!DOCTYPE html>
<html>
 <head>
  <title>PHP Filesystem with Ajax JQuery</title>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>

  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
  <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="assets/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
  <link rel="stylesheet" type="text/css" href="assets/plugins/cubeportfolio/css/cubeportfolio.min.css">
  <link href="assets/css/nivo-lightbox.css" rel="stylesheet" />
  <link href="assets/css/nivo-lightbox-theme/default/default.css" rel="stylesheet" type="text/css" />
  <link href="assets/css/owl.carousel.css" rel="stylesheet" media="screen" />
    <link href="assets/css/owl.theme.css" rel="stylesheet" media="screen" />
  <link href="assets/css/animate.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet">

  <!-- boxed bg -->
  <link id="bodybg" href="assets/bodybg/bg1.css" rel="stylesheet" type="text/css" />
  <!-- template skin -->
  <link id="t-colors" href="assets/color/default.css" rel="stylesheet">
  

 </head>
 <body>
<div id="wrapper">
  
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
    <div class="top-area">
      <div class="container">
        <div class="row">
          <div class="col-sm-6 col-md-6">
          <p class="bold text-left">PUSDATIN </p>
          </div>
          <div class="col-sm-6 col-md-6">
          <p class="bold text-right">BPN Kab.Bogor</p>
          </div>
        </div>
      </div>
    </div>
        <div class="container navigation">
    
            <div class="navbar-header page-scroll">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand" href="index.html">
                    <img src="img/bpnlogo.png" alt="" width="80" height="50" /> 
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
        <ul class="nav navbar-nav">
        <li class="active"><a href="#intro">Home</a></li>
        
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="badge custom-badge red pull-right">Extra</span>Bank Data <b class="caret"></b></a>
          <ul class="dropdown-menu">
          <li><a href="#service">Laporan Harian</a></li>
          <li><a href="#doctor">PTSL</a></li>
          <li><a href="#facilities">Zona Intregritas</a></li>
          <li><a href="#pricing">Pengadaan</a></li>
          </ul>
        </li>
        </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

  

  <!-- Section: intro -->
    <section id="intro" class="intro">
    <div class="intro-content">
      <div class="container">
        <div class="row">
          <div class="col-lg-6">
          <div class="wow fadeInDown" data-wow-offset="0" data-wow-delay="0.1s">
          <h2 class="h-ultra">BPN (Badan Pertahanan Nasional) </h2>
          </div>
          <div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.1s">
          <h4 class="h-light">Mengembangkan dan menyelenggarakan politik dan kebijakan pertanahan untuk:</h4>
          </div>
            <div class="well well-trans">
            <div class="wow fadeInRight" data-wow-delay="0.1s">

            <ul class="lead-list">
              <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Peningkatan kesejahteraan rakyat</strong><br /> penciptaan sumber-sumber baru kemakmuran rakyat</span></li>
              <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>peningkatan tatanan kehidupan bersama</strong><br />tatanan kehidupan bersama yang lebih berkeadilan</span></li>
              <li><span class="fa fa-check fa-2x icon-success"></span> <span class="list"><strong>Perwujudan tatanan kehidupan bersama</strong><br />tatanan kehidupan bersama yang harmonis </span></li>
            </ul>

            </div>
            </div>


          </div>
          <div class="col-lg-6">
            <div class="form-wrapper">
            <div class="wow fadeInRight" data-wow-duration="2s" data-wow-delay="0.2s">
            
              <div class="panel panel-skin">
              <div class="panel-heading">
                  <h3 class="panel-title"><span class="fa fa-pencil-square-o"></span> Make an appoinment <small>(It's free!)</small></h3>
                  </div>
                  <div class="panel-body">
                  <form role="form" class="lead">
                    <div class="row">
                      <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label>First Name</label>
                          <input type="text" name="first_name" id="first_name" class="form-control input-md">
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label>Last Name</label>
                          <input type="text" name="last_name" id="last_name" class="form-control input-md">
                        </div>
                      </div>
                    </div>

                    <div class="row">
                      <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label>Email</label>
                          <input type="email" name="email" id="email" class="form-control input-md">
                        </div>
                      </div>
                      <div class="col-xs-6 col-sm-6 col-md-6">
                        <div class="form-group">
                          <label>Phone number</label>
                          <input type="text" name="phone" id="phone" class="form-control input-md">
                        </div>
                      </div>
                    </div>
                    
                    <input type="submit" value="Submit" class="btn btn-skin btn-block btn-lg">
                    
                    <p class="lead-footer">* We'll contact you by phone & email later</p>
                  
                  </form>
                </div>
              </div>        
            
            </div>
            </div>
          </div>          
        </div>    
      </div>
    </div>    
    </section>
  
  <!-- /Section: intro -->

  <!-- Section: boxes -->
 
  <!-- /Section: boxes -->
  
  
  <section id="callaction" class="home-section paddingtop-40">  
           <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="callaction bg-gray">
              <div class="row">
                <div class="col-md-8">
                  <div class="wow fadeInUp" data-wow-delay="0.1s">
                  <div class="cta-text">
                  <h3>In an emergency? Need help now?</h3>
                  <p>Lorem ipsum dolor sit amet consectetur adipiscing elit uisque interdum ante eget faucibus. </p>
                  </div>
                  </div>
                </div>
                <div class="col-md-4">
                  <div class="wow lightSpeedIn" data-wow-delay="0.1s">
                    <div class="cta-btn">
                    <a href="#" class="btn btn-skin btn-lg">Book an appoinment</a>  
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
            </div>
  </section>  
  
<div class="container">
   <h2 align="center">Upload File mu disini</a></h2>
   <br />
   <div align="right">
    <button type="button" name="create_folder" id="create_folder" class="btn btn-success">Create</button>
   </div>
   <br />
   <div class="table-responsive" id="folder_table">
    
   </div>
  </div>
<div id="folderModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title"><span id="change_title">Create Folder</span></h4>
   </div>
   <div class="modal-body">
    <p>Enter Folder Name
    <input type="text" name="folder_name" id="folder_name" class="form-control" /></p>
    <br />
    <input type="hidden" name="action" id="action" />
    <input type="hidden" name="old_name" id="old_name" />
    <input type="button" name="folder_button" id="folder_button" class="btn btn-info" value="Create" />
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
<div id="uploadModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">Upload File</h4>
   </div>
   <div class="modal-body">
    <form method="post" id="upload_form" enctype='multipart/form-data'>
     <p>Select Image
     <input type="file" name="upload_file" /></p>
     <br />
     <input type="hidden" name="hidden_folder_name" id="hidden_folder_name" />
     <input type="submit" name="upload_button" class="btn btn-info" value="Upload" />
    </form>
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>

<div id="filelistModal" class="modal fade" role="dialog">
 <div class="modal-dialog">
  <div class="modal-content">
   <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal">&times;</button>
    <h4 class="modal-title">File List</h4>
   </div>
   <div class="modal-body" id="file_list">
    
   </div>
   <div class="modal-footer">
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
   </div>
  </div>
 </div>
</div>
</body>
</html>
<script>
$(document).ready(function(){
 
 load_folder_list();
 
 function load_folder_list()
 {
  var action = "fetch";
  $.ajax({
   url:"action.php",
   method:"POST",
   data:{action:action},
   success:function(data)
   {
    $('#folder_table').html(data);
   }
  });
 }
 
 $(document).on('click', '#create_folder', function(){
  $('#action').val("create");
  $('#folder_name').val('');
  $('#folder_button').val('Create');
  $('#folderModal').modal('show');
  $('#old_name').val('');
  $('#change_title').text("Create Folder");
 });
 
 $(document).on('click', '#folder_button', function(){
  var folder_name = $('#folder_name').val();
  var old_name = $('#old_name').val();
  var action = $('#action').val();
  if(folder_name != '')
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{folder_name:folder_name, old_name:old_name, action:action},
    success:function(data)
    {
     $('#folderModal').modal('hide');
     load_folder_list();
     alert(data);
    }
   });
  }
  else
  {
   alert("Enter Folder Name");
  }
 });
 
 $(document).on("click", ".update", function(){
  var folder_name = $(this).data("name");
  $('#old_name').val(folder_name);
  $('#folder_name').val(folder_name);
  $('#action').val("change");
  $('#folderModal').modal("show");
  $('#folder_button').val('Update');
  $('#change_title').text("Change Folder Name");
 });
 
 $(document).on("click", ".delete", function(){
  var folder_name = $(this).data("name");
  var action = "delete";
  if(confirm("Are you sure you want to remove it?"))
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{folder_name:folder_name, action:action},
    success:function(data)
    {
     load_folder_list();
     alert(data);
    }
   });
  }
 });
 
 $(document).on('click', '.upload', function(){
  var folder_name = $(this).data("name");
  $('#hidden_folder_name').val(folder_name);
  $('#uploadModal').modal('show');
 });
 
 $('#upload_form').on('submit', function(){
  $.ajax({
   url:"upload.php",
   method:"POST",
   data: new FormData(this),
   contentType: false,
   cache: false,
   processData:false,
   success: function(data)
   { 
    load_folder_list();
    alert(data);
   }
  });
 });
 
 $(document).on('click', '.view_files', function(){
  var folder_name = $(this).data("name");
  var action = "fetch_files";
  $.ajax({
   url:"action.php",
   method:"POST",
   data:{action:action, folder_name:folder_name},
   success:function(data)
   {
    $('#file_list').html(data);
    $('#filelistModal').modal('show');
   }
  });
 });
 
 $(document).on('click', '.remove_file', function(){
  var path = $(this).attr("id");
  var action = "remove_file";
  if(confirm("Are you sure you want to remove this file?"))
  {
   $.ajax({
    url:"action.php",
    method:"POST",
    data:{path:path, action:action},
    success:function(data)
    {
     alert(data);
     $('#filelistModal').modal('hide');
     load_folder_list();
    }
   });
  }
 });

$(document).on('blur', '.change_file_name', function(){
  var folder_name = $(this).data("folder_name");
  var old_file_name = $(this).data("file_name");
  var new_file_name = $(this).text();
  var action = "change_file_name";
  $.ajax({
   url:"action.php",
   method:"POST",
   data:{folder_name:folder_name, old_file_name:old_file_name, new_file_name:new_file_name, action:action},
   success:function(data)
   {
    alert(data);
   }
  });
 });
 
});
</script>
