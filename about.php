<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"         integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<title></title>
</head>

<style>

@import url('https://fonts.googleapis.com/css?family=Montserrat:100, 300');
    
   body{
        
        background-color: #f5f4ff;
        background: -moz-linear-gradient(top, #f5f4ff 0%, #e9e8ff 0%, #8ec7ce 100%);
        background: -webkit-linear-gradient(top, #f5f4ff 0%,#e9e8ff 0%,#8ec7ce 100%);
        background: linear-gradient(to bottom, #f5f4ff 0%,#e9e8ff 0%,#8ec7ce 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f5f4ff', endColorstr='#8ec7ce',GradientType=0 );
    }
    
    .mt-wrapper{
        padding: 40px;
    }
    
    .mt-wrapper a{
        
        text-decoration: none;
        color: gray; 
    }
    
    .mt-wrapper a:hover{
        text-decoration: none;
        color: lightcoral; 
    }
    
    .mn-wrapper ul a{
        text-decoration: none;
        color: gray;
    }
    
    .mn-wrapper ul a:hover{
        text-decoration: none;
        color: lightcoral;
    }
    
    .main-nav{
        
    }
    
    .mn-wrapper{
        flex-direction: row;
        flex-wrap: wrap;
        justify-content: space-between;
    }
    
    .mn-wrapper{
		text-align: center;
	}
	
	.mn-wrapper ul, li{
		list-style: none;
		display: inline-flex;
        padding: 0px 70px 35px;
	}
	
	.mt-wrapper h1{
		font-family: Montserrat;
		font-size: 5rem;
		text-align: center;
		margin: 10px 0px;
	}
    
    .main-body-wrapper{
        padding: 10px;
        margin: 0 auto;
    }
    
    .mb-content{
        padding: 10px;
        background: #eee;
        max-width: 100%;
        width: 500px;
        margin: 35px;
        box-shadow: 2px 2px 2px grey;
    }
	
	.main-body-wrapper img {
		width: 100%;
		max-width: 1200px;
		margin: 0px auto;
	}
	
    .mbw-title{
        text-align: center;
        font-weight: 200;
    }
    
    .mbw-title a{
        text-decoration: none;
        color: gray;
    }
    
    .mbw-title a h4{
        font-weight: 300;
        font-size: 2rem;
    }
    
    .mbw-title a:hover{
        text-decoration: none;
        color: lightblue;
    }
    
    .resume-wrapper, .about-wrapper{
        text-align: center;
        font-family: Montserrat;
        font-size: 2rem;
        padding: 150px 0px 250px;
    }
    
    .about-wrapper a{
        text-decoration: none;
    }
    
    .resume-wrapper a{
        text-decoration: none;
    }
    
    .resume-wrapper a p:hover{
        color:lightcoral;
    }
    
    .about-wrapper a p:hover{
        color:lightcoral;
    }
	
    .container.mf-wrapper p {
        text-align: center;
        color: gray;
}
    
</style>	
	
	

<body>
	<div class="container-fluid main-title">
		<div class="container mt-wrapper">
            <a href="index.php"><h1>RILEY HEIN</h1></a>
		</div><!--mt-wrapper-->
	</div><!--main-title-->
	<div class="container-fluid main-nav">
		<div  class="container mn-wrapper">
			<ul>
				<a href="index.php"><li>Home</li></a>
				<a href="#"><li>Portfolio</li></a>
				<a href="#"><li>About</li></a>
				<a href="#"><li>Contact</li></a>
			</ul>
		</div><!--mn-wrapper-->
	</div><!--main-nav-->
	<div class="container-fluid main-body">
        <div class="container main-body-wrapper">
            
            <div class="col-md-12 main-img">
                <img src="http://d1marr3m5x4iac.cloudfront.net/images/edpborder500/I0-001/001/019/757-1.jpeg_/ice-cube-57.jpeg">
            </div><!--main-img-->

	   </div><!--main-body-wrapper-->
    </div><!--main-body-->
    
    
    <div class="container-fluid info-body">
        <div class="container info-body-wrapper">
            <div class="col-md-6 col-sm-12 col-xs-12 resume-wrapper">
                <a href="#"><p>Resume</p></a>
            </div>
    
            <div class="col-md-6 col-sm-12 col-xs-12 about-wrapper">
                <a href="#"><p>About Riley</p></a>
            </div>
        </div><!--info-body-wrapper-->
    </div><!--info-body-->
    
    
	<div class="container-fluid main-footer">
		<div class="container mf-wrapper">
			<p>All rights reserved.  Content &copy; <?php echo date('Y'); ?> Riley Hein </p>
		</div><!--mf-wrapper-->
	</div><!--main-footer-->
    
</body>
</html>