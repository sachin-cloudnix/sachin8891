<!doctype html>
	<html>
	<head>
		<title>PHP Advance</title>
		 <meta name="viewport" content="width=device-width, initial-scale=1">
         <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
         <style>
         .topbar{
         	height: 100px;
            text-align: center;
            padding: 10px;
         }
         .gridbar{
         	height: 100%;
         }
         .grid-col-bar{
         	height: 500px;
         	background-color: lightgray;
         }
         .grid-col-bar-col{
         	height: 50px;
         }
         .grid-sec-col{
               height: 150px;
               grid-column-gap: 60px;
         }
         .grid-sec-coln{
               height: 150px;
               grid-column-gap: 30px;
         }
         .footer{
         	position: fixed;
         	bottom: 0;
            height: 70px;
            background-color: darkorange;
            text-align: center;
         }
         @media(max-width: 768px) and (min-width: 376px){
            .hide1{
            	display: none;
            }
            .sty{
            	height: 1000px;
            }
            .st{
            	margin: 5px;
            	align-items: center;
            }
         }
         @media(max-width: 375px){
         	.hide2{
         		display: none;
         	}
         	.sty1{
         		height: 100px;
         	}
         	.sty2{
         		margin-left: 0px;
         		margin-right: 21px;
                float:right;
         	}
         	.algn{
         		margin: 5px;
         		height: 100px
         		grid-column-gap: 100px;
         	
         	}
         }
     </style>
    </head>
    <body>
    	<div class="container-fluid bg-primary topbar"><h1>WELCOME <?php echo get_name(); ?>!</h1></div>
        <div class="container-fluid gridbar">
        	<div class="row">
        		<div class="col-md-3 col-sm-12 grid-col-bar sty sty1"><h3>FRIENDS -<br><br><h5><b><?php echo get_friends_name();?></b></h5></h3>
        		</div>
        		<div ><h4>POSTs -<br><br><h5><i><?php echo get_post();?></i></h5></h4>
        		</div>
        	</div>
        </div>
        <div class="container-fluid footer"><h3><b></b><?php echo $status;?></h3></div>		
    </body>
    </html>