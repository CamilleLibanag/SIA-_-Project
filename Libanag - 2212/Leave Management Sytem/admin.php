<?php
session_start();
if (!isset($_SESSION['email']) || $_SESSION['Account_type'] !== '1') {
    header("Location: login.php");
    exit();
}
?> 

<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1">
        <title>dashboard</title>
	   
        <link rel="stylesheet" href="bootstrap.min.css">
	   
        <link rel="stylesheet" href="custom.css">
		
		
		
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'> 
	    <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600&display=swap" rel="stylesheet">
	
	
	
      <link href="https://fonts.googleapis.com/css2?family=Material+Icons"rel="stylesheet">

      </head>
      <style>
        .body,html{
          background-color: #a9a9a9;
        }
      .logout {
        background-color: #333;
  margin-left: 790px;
  margin-bottom: 10px;
  color: white;
}


.logout a {
    
    color: white; 
    text-decoration: none;
}

#sidebar {

    background-color:#555555 ; /* Sidebar background color */


}
#sidebar .sidebar-header {
    background-color: #242124; /* Background color of the header */
    color: #fff; /* Text color of the header */
    padding: 20px; /* Padding around the header */
    text-align: center;
}
.top-navbar {
    background-color:#36454f; /* Background color of the top navigation bar */
    color: #fff; /* Text color of the top navigation bar */

}

.xp-menubar {
    background-color: #080808; /* Background color of the menu bar */
    color: #fff; /* Text color of the menu bar */
  
}
.list-unstyled.components li a:hover {
    background-color: #f0f0f0; /* Background color on hover */
    color: black; /* Text color on hover */
}
  </style>
  <body>
  
<div class="wrapper">


 
		
	
        <nav id="sidebar">
            <div class="sidebar-header">
                <h3><span>ADMIN</span></h3>
            </div>
            <ul class="list-unstyled components">
		
		

                        <li>
                            <a href="kamil.php">Module 1</a>
                        </li>
                        <li>
                            <a href=".php">Module 2</a>
                        </li>
                        <li>
                            <a href=".php">Module 3</a>
                        </li>
                        
              
                
                
                
               
			   
			     
		
               
            </ul>

           
        </nav>
		
		
		
		

		
		<div id="content">
		   
		 
		   
		   <div class="top-navbar">
		      <div class="xp-topbar">

               
                <div class="row"> 
                    
                    <div class="col-2 col-md-1 col-lg-1 order-2 order-md-1 align-self-center">
                        <div class="xp-menubar">
                               <span class="material-icons text-white">signal_cellular_alt
							   </span>
                         </div>
                    </div> 
                   
                   <div class="col-10 col-md-6 col-lg-8 order-1 order-md-3">
                         <div class="xp-profilebar text-right">
							 <nav class="navbar p-0">
                        <ul class="nav navbar-nav flex-row ml-auto">   
                            <li class="dropdown nav-item active">
                                <a href="#" class="nav-link" data-toggle="dropdown">
                                  
                               
							

								</a>
                          
							
                        </div>
                    </div>
                

                </div> 
               

            </div>
		     <div class="xp-breadcrumbbar text-center">
                <h4 class="page-title">Leave Management System</h4>  
             
                <button class="logout"><a href="login.php"><span>Logout</span></a></button>
             
         
                   
            </div>
			
		   </div>
		   
		   
		  
		   
		 
           <div class="main-content">
			
     
     
   
     
      </div>
     
          
          
      
      
    
</div>

<div id="addEmployeeModal" class="modal fade">
  
  </div>
				
		   
			  </div>
			 
			 
			 
			 
			 
		</div>
		
	
</div>
</div>










  
    
   <script src="js/jquery-3.3.1.slim.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.min.js"></script>
   <script src="js/jquery-3.3.1.min.js"></script>
  
  
  <script type="text/javascript">
        
		$(document).ready(function(){
		  $(".xp-menubar").on('click',function(){
		    $('#sidebar').toggleClass('active');
			$('#content').toggleClass('active');
		  });
		  
		   $(".xp-menubar,.body-overlay").on('click',function(){
		     $('#sidebar,.body-overlay').toggleClass('show-nav');
		   });
		  
		});
		
</script>
  
  



  </body>
  
  </html>




