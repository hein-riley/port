<!doctype html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"         integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<title></title>
</head>

<style>

@import url('https://fonts.googleapis.com/css?family=Montserrat:100');
    
   body{
        
        background-color: #f5f4ff;
        background: -moz-linear-gradient(top, #f5f4ff 0%, #e9e8ff 0%, #8ec7ce 100%);
        background: -webkit-linear-gradient(top, #f5f4ff 0%,#e9e8ff 0%,#8ec7ce 100%);
        background: linear-gradient(to bottom, #f5f4ff 0%,#e9e8ff 0%,#8ec7ce 100%);
        filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#f5f4ff', endColorstr='#8ec7ce',GradientType=0 );
    }
    
    .main-nav{
        
    }
    
    .mn-wrapper{
        flex-direction: row;
        flex-wrap: nowrap;
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
        background: #eee;
        max-width: 100%;
        width: 300px;
        margin: 0 auto;
        box-shadow: 2px 2px 2px grey;
    }
	
	.main-body-wrapper img {
		width: 100%;
		max-width: 1200px;
		margin: 0px auto;
	}
	
    .mbw-title{
        text-align: center;
    }
	
</style>	
	
	

<body>
	<div class="container-fluid main-title">
		<div class="container mt-wrapper">
			<h1>RILEY HEIN</h1>
		</div><!--mt-wrapper-->
	</div><!--main-title-->
	<div class="container-fluid main-nav">
		<div  class="container mn-wrapper">
			<ul>
				<li>Home</li>
				<li>Portfolio</li>
				<li>About</li>
				<li>Contact</li>
			</ul>
		</div><!--mn-wrapper-->
	</div><!--main-nav-->
	<div class="container-fluid main-body">
		<a href="#"><div class="container main-body-wrapper">
			<img src="https://rizepoint.com/wp-content/themes/tribunal/assets/img/logo/logo.png">
		</div><!--main-body-wrapper-->
        <div class="mbw-title">
            <h4>Rizepoint.com</h4>
        </div><!--mbw-title-->
        </a>
	</div><!--main-body-->
	<div class="container-fluid main-footer">
		<div class="container mf-wrapper">
			<p>Footstuff</p>
		</div><!--mf-wrapper-->
	</div><!--main-footer-->
</body>
</html>