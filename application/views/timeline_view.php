<!doctype html>
<html>
  
  <head>
    <title>timeline</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="text/html; charset=UTF-8" http-equiv="Content-Type">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap.css">
    <link rel="stylesheet" href="<?php echo base_url();?>assets/css/bootstrap-responsive.css">
    <script src="<?php echo base_url();?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url();?>assets/js/bootstrap.min.js"></script>
    <style type="text/css">
    	.page-header{
    		margin-top:50px;
    	}
    </style>
  </head>

  <body>
    <div class="navbar">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="../summary/<?php echo $uid;?>">Health Record</a>
          <div class="navbar-content">
            <ul class="nav">
              <li class="active">
                <a href="#">History</a> 
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span3">
          <ul class="nav  nav-pills nav-stacked">
            <li class="active">
              <a href="#">1998</a> 
            </li>
            <li>
              <a href="#">1996</a> 
            </li>
          </ul>
        </div>
        <div class="span9">
          <div class="hero-unit">
            <h1>Immunizations</h1>
            <div class="row">
              <?php for($i=0;$i<count($immunizations);$i++){
                $date=strval($immunizations[$i]->date->value);
                echo '<div class="well">';
                echo '<span class="badge">'.substr($date,0,4).'.'.substr($date,4,2).'.'.substr($date,6,2).'</span>';
                echo '<h3>'.$allergies[$i]->substance->name.'</h3>';
                echo '<p>'.$allergies[$i]->severity->name.'</p>';
                echo '<p>'.$allergies[$i]->reaction->name.'</p>';
                echo '</div>';
               }
              ?>
            </div>
          </div>
          <div class="row-fluid"></div>
        </div>
      </div>
    </div>
  </body>

</html>