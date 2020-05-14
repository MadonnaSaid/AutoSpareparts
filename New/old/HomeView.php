<?php 

class Home_view{
  
function __construct()
    {}
    function htmlone()
    {

?>

 <!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Auto spare parts</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
  <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

  <!-- Custom styles for this template -->
  <link href="css/agency.min.css" rel="stylesheet">

</head>

<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#page-top">Start Work</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav text-uppercase ml-auto">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Service</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#"> Export/Import </a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Check Out</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">History module</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Add Company</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- Header -->
  <header class="masthead">
    <div class="container">
      <div class="intro-text">
        <div class="intro-lead-in"></div>
        <div class="intro-heading text-uppercase">Auto Spare parts</div>
      </div>
    </div>
  </header>

  <!-- Services -->
  <section class="page-section" id="services">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Services</h2>
        </div>
      </div>
      <div class="row text-center">
        <div class="col-md-6">
          <span class="fa-stack fa-5x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
            <i class="fas fa-truck fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Export</h4>
        </div>
        <div class="col-md-6">
          <span class="fa-stack fa-5x">
            <i class="fas fa-circle fa-stack-2x text-primary"></i>
           <i class="fas fa-truck-monster fa-stack-1x fa-inverse"></i>
          </span>
          <h4 class="service-heading">Import</h4>
        </div>
      </div>
    </div>
  </section>

  <!-- Portfolio Grid -->
  <section class="bg-light page-section" id="portfolio">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Export/Import</h2>
          <h3 class="section-subheading text-muted">Auto Spare Parts.</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" href="">
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
<form>
<?php 
}
function htmltwo($id, $name,$image, $type)
{
?>
            <img class="img-fluid" alt="" id="car" name="car"<?php echo 'src=img/portfolio/'.$image . ' ' . 'value='. $id  ?> />
          <div class="portfolio-caption">
            <h4><?php echo $name.' '. $type ;?> </h4>
            <p class="text-muted">Peress to check <?php echo $name.' ' ;?> parts</p>
          </div>
        </div>
        <div class="col-md-4 col-sm-6 portfolio-item">
          <a class="portfolio-link" data-toggle="modal" id="car" name="car" href=""/>
            <div class="portfolio-hover">
              <div class="portfolio-hover-content">
                <i class="fas fa-plus fa-3x"></i>
              </div>
            </div>
      <?php
}
function htmlthree()
{
  ?> 
</form>
        </div>
      </div>
    </div>
  </section>






  <!-- Check Out -->
  <section class="page-section" id="about">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Check Out</h2>
        </div>
      </div>
      <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
      <html xmlns="http://www.w3.org/1999/xhtml">
      
      <head>
        <meta http-equiv='Content-Type' content='text/html; charset=UTF-8' />
     
        <link rel='stylesheet' type='text/css' href='css/style.css' />
        <link rel='stylesheet' type='text/css' href='css/print.css' media="print" />
        <script type='text/javascript' src='js/jquery-1.3.2.min.js'></script>
        <script type='text/javascript' src='js/example.js'></script>
      
      </head>
      
      <body>
 <label for="company">Choose Company: </label>
        <select id="company">
        <option disabled selected>Select Option</option>
        
<?php 
}
function Company($name)
{
?>


<option value=$name><?php echo $name?></option>
   


       
			 
		   




      
</table>

     </div>
     <br>
     <br>
  
     <form>
      <?php
//hena fe moshkla enha betala3 el drop down menu metkarar 
}
function ckout($id, $compID,$CarID, $PartNumber, $PartName, $Q, $IP, $TotalPrice)
{
  ?>
    </select>
     <table id="items">
        <tr >
    <?php
  echo "ExportID:".$id."<br>". " companyID:". $compID."<br>"."carID:" .$CarID."<br>"."PartNumber :". $PartNumber."<br>"."PartNAme :". $PartName."<br>"."quantity: " .$Q."<br>"."ItemPrice :". $IP."<br>"."TotalPrice: ". $TotalPrice ;
?>
 </tr>
        <div class="clearfix"></div>

              <div class="col-lg-12 text-center">
                <div id="success"></div>


                <button id="SubmitCheckout" class="btn btn-primary btn-xl text-uppercase" name="SubmitCheckout" type="submit">Submit Checkout
				</button>
              </div>
            </div>
		</form>
      </body>
      
      </html>
     <style>
    
   * { margin: 0; padding: 0; }
   body { font: 14px/1.4 Georgia, serif; }
   #page-wrap { width: 800px; margin: 0 auto; }
   
   textarea { border: 0; font: 14px Georgia, Serif; overflow: hidden; resize: none; }
   table { border-collapse: collapse; }
   table td, table th { border: 1px solid black; padding: 5px; }
   
   #header { height: 15px; width: 100%; margin: 20px 0; background: #222; text-align: center; color: white; font: bold 15px Helvetica, Sans-Serif; text-decoration: uppercase; letter-spacing: 20px; padding: 8px 0px; }
   
   #address { width: 250px; height: 150px; float: left; }
   #customer { overflow: hidden; }
   
   #logo { text-align: right; float: right; position: relative; margin-top: 25px; border: 1px solid #fff; max-width: 540px; max-height: 100px; overflow: hidden; }
   #logo:hover, #logo.edit { border: 1px solid #000; margin-top: 0px; max-height: 125px; }
   #logoctr { display: none; }
   #logo:hover #logoctr, #logo.edit #logoctr { display: block; text-align: right; line-height: 25px; background: #eee; padding: 0 5px; }
   #logohelp { text-align: left; display: none; font-style: italic; padding: 10px 5px;}
   #logohelp input { margin-bottom: 5px; }
   .edit #logohelp { display: block; }
   .edit #save-logo, .edit #cancel-logo { display: inline; }
   .edit #image, #save-logo, #cancel-logo, .edit #change-logo, .edit #delete-logo { display: none; }
   #customer-title { font-size: 20px; font-weight: bold; float: left; }
   
   #meta { margin-top: 1px; width: 300px; float: right; }
   #meta td { text-align: right;  }
   #meta td.meta-head { text-align: left; background: #df0a0a; }
   #meta td textarea { width: 100%; height: 20px; text-align: right; }
   
   #items { clear: both; width: 100%; margin: 30px 0 0 0; border: 1px solid black; }
   #items th { background: #ffc107; }
   #items textarea { width: 80px; height: 50px; }
   #items tr.item-row td { border: 0; vertical-align: top; }
   #items td.description { width: 300px; }
   #items td.item-name { width: 175px; }
   #items td.description textarea, #items td.item-name textarea { width: 100%; }
   #items td.total-line { border-right: 0; text-align: right; }
   #items td.total-value { border-left: 0; padding: 10px; }
   #items td.total-value textarea { height: 20px; background: none; }
   #items td.balance { background: #eee; }
   #items td.blank { border: 0; }
   
   #terms { text-align: center; margin: 20px 0 0 0; }
   #terms h5 { text-transform: uppercase; font: 13px Helvetica, Sans-Serif; letter-spacing: 10px; border-bottom: 1px solid black; padding: 0 0 8px 0; margin: 0 0 8px 0; }
   #terms textarea { width: 100%; text-align: center;}
   
   textarea:hover, textarea:focus, #items td.total-value textarea:hover, #items td.total-value textarea:focus, .delete:hover { background-color:#EEFF88; }
   
   .delete-wpr { position: relative; }
   .delete { display: block; color: #000; text-decoration: none; position: absolute; background: #EEEEEE; font-weight: bold; padding: 0px 3px; border: 1px solid; top: -6px; left: -22px; font-family: Verdana; font-size: 12px; }</style>
   <style>#hiderow,
    .delete {
      display: none;
    }</style>
  </section>

 <!-- Header -->
  <section class="bg-light page-section" id="team">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">History module</h2>
          <h3 class="section-subheading text-muted">Display all Checkouts </h3>
        </div>
      </div>
      <div class="container">
        <div class="row-2">
          <div class="col-lg-3 mx-auto">
       <div class="modal-body">
      <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" name="DisplayCheckout" id="DisplayCheckout"> Display Checkouts </a>
    </div>
          </div>
        </div>
      </div>

  <!-- Add Company -->
  <section class="page-section" id="contact">
    <div class="container">
      <div class="row">
        <div class="col-lg-12 text-center">
          <h2 class="section-heading text-uppercase">Add Company</h2>
          <h3 class="section-subheading text-muted"> </h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-12">
          <form id="contactForm" name="sentMessage" action="" method="post" novalidate="novalidate">
            <div class="row">
              <div class="col-md-6">
                <div class="form-group">
                  <input class="form-control" id="name" name="CompanyName"type="text" placeholder="Company Name *" required="required" data-validation-required-message="Please enter your name.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="email" name="email" type="email" placeholder="Email *" required="required" data-validation-required-message="Please enter your email address.">
                  <p class="help-block text-danger"></p>
                </div>
                <div class="form-group">
                  <input class="form-control" id="phone" name="phoneNumber"type="tel" placeholder="Phone Number*" required="required" data-validation-required-message="Please enter your phone number.">
                  <p class="help-block text-danger"></p>
				  </div>
				  <div class="form-group">
                  <input class="form-control" id="RegisterSupplierNumber" name="RegisterSupplierNumber"type="number" placeholder="Register Supplier Number" required="required" data-validation-required-message="Please enter Register Supplier Number">
                  <p class="help-block text-danger"></p>
                </div>
				<div class="form-group">
                  <input class="form-control" id="CommercialRecord" name="CommercialRecord"type="number" placeholder="Commercial Record" required="required" data-validation-required-message="Please enter Commercial Record.">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              </div>
              <div class="clearfix"></div>
              <div class="col-lg-12 text-center">
                <div id="success"></div>
                <button id="addcompany" class="btn btn-primary btn-xl text-uppercase" type="submit" name="addcompany">Send Company Info</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer">
    <div class="container">
      <div class="row align-items-center">
        <div class="col-md-4">
          <span class="copyright">Copyright &copy; Your Website 2019</span>
        </div>
        <div class="col-md-4">
          <ul class="list-inline social-buttons">
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-twitter"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-facebook-f"></i>
              </a>
            </li>
            <li class="list-inline-item">
              <a href="#">
                <i class="fab fa-linkedin-in"></i>
              </a>
            </li>
          </ul>
        </div>
        <div class="col-md-4">
          <ul class="list-inline quicklinks">
            <li class="list-inline-item">
              <a href="#">Privacy Policy</a>
            </li>
            <li class="list-inline-item">
              <a href="#">Terms of Use</a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </footer>

  <script>  </script> 
  <!-- Modal 1 -->
  <div class="portfolio-modal modal fade" id="portfolioModal1" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
				<div class="container" style="width:700px">
             
				<h2 class="text-uppercase" name="hidden_CarName"></h2>

			<div class="col-md-4">
				<form method="post" action="index.php?action=add&id=<?php echo $row["PartNumber"]; ?>">
					<div class="products">
            
                    <img src="img/<?php echo $row["image"]; ?>" class="img-responsive" />

                    <input type="hidden" name="hidden_CarID" value="<?php echo $row["CarID"]; ?>" class="form-group col-md-3" /><br>

                    <input type="hidden" name="hidden_CarName" value="<?php echo$row["CarName"]; ?>" class="form-group col-md-3" /><br>

                    <input type="text" name="quantity" value="1" class="form-group col-md-7" /><br>

                    <input type="hidden" name="hidden_name" value="<?php echo $row["PartName"]; ?>" />

                    <input type="hidden" name="hidden_price" value="<?php echo $row["partPrice"]; ?>" />

                    <input type="submit" name="Export" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" value="Export" /><br><br>
                    <input type="submit" name="Import" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" value="Import" /><br><br>
					
                <ul class="list-group list-group-horizontal-sm">
                <li class="list-group-item">PartName: <?php echo$row["PartName"]; ?></li>
                <li class="list-group-item">PartNumber: <?php echo $row["PartNumber"]; ?></li>
                <li class="list-group-item">PartPrice: <?php echo $row["partPrice"]; ?></li>
                <li class="list-group-item">Country: <?php echo $row["partCountry"]; ?></li>
                <li class="list-group-item">PartQuantity: <?php echo $row["partQuantity"]; ?></li>
                </ul>					
                <br> 
                </div>

				</form>
			</div>
			

              </div>
             
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Modal 2 -->
  <div class="portfolio-modal modal fade" id="portfolioModal2" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
				<div class="container" style="width:700px">
                
				<h2 class="text-uppercase" name="hidden_CarName"><?php echo$row["CarName"]; ?></h2>

        <div class="col-md-4">
				<form method="post" action="index.php?action=add&id=<?php echo $row["PartNumber"]; ?>">
					<div class="products">
            
                    <img src="img/<?php echo $row["image"]; ?>" class="img-responsive" />

                    <input type="hidden" name="hidden_CarID" value="<?php echo $row["CarID"]; ?>" class="form-group col-md-3" /><br>

                    <input type="hidden" name="hidden_CarName" value="<?php echo$row["CarName"]; ?>" class="form-group col-md-3" /><br>

                    <input type="text" name="quantity" value="1" class="form-group col-md-7" /><br>

                    <input type="hidden" name="hidden_name" value="<?php echo $row["PartName"]; ?>" />

                    <input type="hidden" name="hidden_price" value="<?php echo $row["partPrice"]; ?>" />

                    <input type="submit" name="Export" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" value="Export" /><br><br>
                    <input type="submit" name="Import" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" value="Import" /><br><br>
					
                <ul class="list-group list-group-horizontal-sm">
                <li class="list-group-item">PartName: <?php echo$row["PartName"]; ?></li>
                <li class="list-group-item">PartNumber: <?php echo $row["PartNumber"]; ?></li>
                <li class="list-group-item">PartPrice: <?php echo $row["partPrice"]; ?></li>
                <li class="list-group-item">Country: <?php echo $row["partCountry"]; ?></li>
                <li class="list-group-item">PartQuantity: <?php echo $row["partQuantity"]; ?></li>
                </ul>					
                <br> 
                </div>

				</form>
			</div>
			

              </div>
             
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Modal 3 -->
  <div class="portfolio-modal modal fade" id="portfolioModal3" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="close-modal" data-dismiss="modal">
          <div class="lr">
            <div class="rl"></div>
          </div>
        </div>
        <div class="container">
          <div class="row">
            <div class="col-lg-8 mx-auto">
              <div class="modal-body">
				<div class="container" style="width:700px">
               
				<h2 class="text-uppercase" name="hidden_CarName"><?php echo$row["CarName"]; ?></h2>

        <div class="col-md-4">
				<form method="post" action="index.php?action=add&id=<?php echo $row["PartNumber"]; ?>">
					<div class="products">
            
                    <img src="img/<?php echo $row["image"]; ?>" class="img-responsive" />

                    <input type="hidden" name="hidden_CarID" value="<?php echo $row["CarID"]; ?>" class="form-group col-md-3" /><br>

                    <input type="hidden" name="hidden_CarName" value="<?php echo$row["CarName"]; ?>" class="form-group col-md-3" /><br>

                    <input type="text" name="quantity" value="1" class="form-group col-md-7" /><br>

                    <input type="hidden" name="hidden_name" value="<?php echo $row["PartName"]; ?>" />

                    <input type="hidden" name="hidden_price" value="<?php echo $row["partPrice"]; ?>" />
                    >
                    <input type="submit" name="Export" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" value="Export" /><br><br>
                    <input type="submit" name="Import" class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" value="Import" /><br><br>
					
                <ul class="list-group list-group-horizontal-sm">
                <li class="list-group-item">PartName: <?php echo$row["PartName"]; ?></li>
                <li class="list-group-item">PartNumber: <?php echo $row["PartNumber"]; ?></li>
                <li class="list-group-item">PartPrice: <?php echo $row["partPrice"]; ?></li>
                <li class="list-group-item">Country: <?php echo $row["partCountry"]; ?></li>
                <li class="list-group-item">PartQuantity: <?php echo $row["partQuantity"]; ?></li>
                </ul>					
                <br> 
                </div>

				</form>
			</div>
		
              </div>
             
                <button class="btn btn-primary" data-dismiss="modal" type="button">
                  <i class="fas fa-times"></i>
                  Close Project</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Contact form JavaScript -->
  <script src="js/jqBootstrapValidation.js"></script>
  <script src="js/contact_me.js"></script>
  <script src="js/portfolio.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/agency.min.js"></script>

</body>
</html>




<?php

  }

}
?>


