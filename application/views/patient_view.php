<!doctype html>
<html>
  
  <head>
    <title>index</title>
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
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="brand" href="#">My Health Timeline</a>
          <div class="navbar-content">
            <ul class="nav  pull-right">
              <li class="active">
                <a href="#">Summary</a> 
              </li>
              <li>
                <a href="../timeline/<?php echo $uid;?>">Timeline</a> 
              </li>
            </ul>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <div class="page-header">
        <h1><?php echo $demographics->firstName.' '.$demographics->middleName.' '.$demographics->lastName;?></h1>
      </div>
      <div class="alert alert-info hidden-phone">
        <a class="close" data-dismiss="alert"></a><?php echo $address->street.','.$address->city.','.$address->state.','.$address->country.' '.$address->zipCode;?></div>
      <p class="lead"><?php echo $demographics->gender.' '.$demographics->age.' years old. Blood type:'.$demographics->bloodType;?></p>
      <div class="row">
        <div class="span4">
          <div class="well">
            <h4><?php echo(count($allergies));?> allegies</h4>
            <p>
            	<ul><?php for($i=0;$i<count($allergies);$i++){
            		echo '<li>'.$allergies[$i]->substance->name.'</li>';
           		 };?> 
           		</ul>
        	</p>
          </div>
          <div class="well">
             <h4><?php echo(count($problems));?> problems</h4>
            <p>
            	<ul><?php for($i=0;$i<count($problems);$i++){
            		echo '<li>'.$problems[$i]->problem->name.'</li>';
           		 };?> 
           		</ul>
        	</p>
          </div>
        </div>
        <div class="span4">
          <div class="well">
            <h4><?php echo(count($immunizations));?> Immunizations</h4>
            <p>
            	<ul><?php for($i=0;$i<count($immunizations);$i++){
            		echo '<li>'.$immunizations[$i]->product->name.'</li>';
           		 };?> 
           		</ul>
           	</p>
          </div>
          <div class="well">
            <h4><?php echo(count($procedures));?> precedures</h4>
            <p>
            	<ul><?php for($i=0;$i<count($procedures);$i++){
            		echo '<li>'.$procedures[$i]->procedure->name.'</li>';
           		 };?> 
           		<ul>
           	</p>
          </div>
        </div>
        <div class="span4">
          <div class="well">
             <h4><?php echo(count($medications));?> medications</h4>
             <p>
             	<ul><?php for($i=0;$i<count($medications);$i++){
            		echo '<li>'.$medications[$i]->product->name.'</li>';
           		 };?>
           		</ul>
           	</p>
          </div>
          <div class="well">
            <h4><?php echo(count($encounters));?> encounters</h4>
            <p><?php for($i=0;$i<count($encounters);$i++){
            		echo '<li>'.$encounters[$i]->activity->name.'</li>';
           		 };?>
           	</p>
          </div>
        </div>
      </div>
      <p class="text-info lead">Coyrights</p>
    </div>
  </body>

</html>