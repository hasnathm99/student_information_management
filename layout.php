<!DOCTYPE html>
<html>
<head>
	
	<!-- <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/layout_page.style.css">
    <!-- <script src="js/jquery.min.js"></script> -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <link rel="icon" href="images/fav.jpg" type="image/x-icon"/>
    <link rel="stylesheet" type="text/css" href="css/all.css">
    <style type="text/css">
    <style type="text/css">
        
        h3{
            font-family: "calibri", Garamond, 'Comic Sans MS';
            /*text-decoration: underline;*/
        }
        #stock{
            height: 60%;
            padding-top: 5%
        }
        #onequip{
            height: 40%;
            padding-top: 5%
        }
        #btn{
            padding-top: 20%
        }
        
        select{
            width: 30%;
            height: 30px;
            border-radius: 3px;

        }
        #ancor{
            color: black;
            text-decoration: none;

        }
        .navbar{
            background-color: black;
            padding: 1% 0; /*top-bottom 1%, left-rifght 0*/
            font-size: 1.1em /*1em=16px*/
        }
        .navbar-brand {
            min-height: 40px;
            padding: 0 10px 5px; /*o-top,15-right,5-bottom*/

        }
        .navbar-inverse .navbar-nav li a{
            overflow: hidden;
        } 
        .navbar-inverse .navbar-nav li a:hover{
            color:   grey;
            
        }
        #main{
            padding-top: 8%;
            
            margin-left: 5%
        }
        label{
            font-size: 1.2em
        }
        select{
            width: 50%;
        }
        td{
            width: 8%;
            padding-left: 1%   
        }
        .drop2nd li a{
            padding: 10px
        }
    </style>
</head>
<body>
	<!--navbar-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container-fluid">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand"><img src="ut.jpg" width="200" height="55"></a>
                <button class="navbar-toggle" data-toggle="collapse" data-target="#navbar-collapse-main">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>

            <div class="collapse navbar-collapse" id="navbar-collapse-main">

                <ul class="nav navbar-nav navbar-left">
                	<li><a href="view_info.php"><i class="fas fa-sign-out-alt" style="padding-right: 5px;padding-left: 15px "></i>Student Info</a></li>
                    <li class="dropdown" ><a class="dropdown-toggle" data-toggle="dropdown" href="#" >Expense <span class="caret"></span></a>
				        <ul class="drop2nd dropdown-menu">
						    <li class="dropdown-submenu">
						        <a class="test" href="#">Monthly <span class="caret"></span></a>
						        <ul class="dropdown-menu">
						           <li><a tabindex="-1" href="add_monthly_expense.php">Add </a></li>
						           <li><a tabindex="-1" href="view_monthly_expense.php">View </a></li>
						        </ul>
						    </li>
						    <li class="dropdown-submenu">
						        <a class="test" href="#">Daily <span class="caret"></span></a>
						        <ul class="dropdown-menu">
						           <li><a tabindex="-1" href="add_daily_expense.php">Add </a></li>
						           <li><a tabindex="-1" href="view_daily_expense.php">View</a></li>

						        </ul>
						    </li>
                            <li class="dropdown-submenu">
                                <a class="test" href="#">Instructor<span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                   <li><a tabindex="-1" href="add_instructor_bill.php">Add </a></li>
                                   <li><a tabindex="-1" href="view_instructor_bill.php">View</a></li>

                                </ul>
                            </li>

						</ul>
						
				    </li>
				    <li class="dropdown" ><a class="dropdown-toggle" data-toggle="dropdown" href="#" >Office <span class="caret"></span></a>
				        <ul class="drop2nd dropdown-menu">
						    <li><a href="income.php"><i class="fas fa-sign-out-alt" ></i>Income</a></li>
						    <li class="dropdown-submenu">
						        <a class="test" href="#">View <span class="caret"></span></a>
						        <ul class="dropdown-menu">
						           <li ><a tabindex="-1" href="view_board_reg.php">Board Registration </a></li>
						           <li ><a tabindex="-1" href="view_exam_fee.php">Examination Fees</a></li>
                                   <li ><a tabindex="-1" href="view_other_campus_fee.php">Other Campus Fees</a></li>
                                   <li ><a tabindex="-1" href="view_affiliation.php">Afiliation Fees</a></li>
						        </ul>
						    </li>

						</ul>
						
				    </li>
				    
                </ul>
                <ul class="nav navbar-nav navbar-right">   
                    <li><a href="logout.php"><i class="fas fa-sign-out-alt" style="padding-right: 5px;padding-left: 15px "></i>Logout</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <!--navbar end-->

    <script>
$(document).ready(function(){
  $('.dropdown-submenu a.test').on("click", function(e){
    $(this).next('ul').toggle();
    e.stopPropagation();
    e.preventDefault();
  });
});
</script>
</body>
</html>