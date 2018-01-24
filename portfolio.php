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
    
/*
  portfolio  
*/

    .port-title h1 {
        text-align: center;
        padding-bottom: 80px;
        font-family: montserrat;
}
    
    .cont-col1{
        padding-bottom: 100px;
    }
    
    .cont-col1 p{
        font-size: 2rem;
    }
    
    .cont-col2 img {
    vertical-align: center;
    width: 100%;
    padding-bottom: 100px;
}
    
/*
   Portfolio  
*/
    
    .stats p {
    font-size: 2rem;
    background: lightcoral;
    padding: 50px;
    text-align: center;
    box-shadow: 3px 3px 3px grey;
    color: white;
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
        <div class="col-md-12 col-sm-12 col-xs-12 port-title">
                <h1>Rizepoint Case Study</h1>
            </div><!--port-title-->
        
        <div class="container main-body-wrapper">
            
             <div class="mb-wrapper">
                <div class="col-md-3 col-sm-6 col-xs-12 stats">
                    <p>User bounce rate decreased by 22% over 2016</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 stats">
                    <p>Organic search traffic increased 35% in 2017</p> 
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 stats">
                    <p>Page views increased 24% year over year</p>
                </div>
                <div class="col-md-3 col-sm-6 col-xs-12 stats">
                    <p>19% of sales driven by website leads in 2017</p>
                </div>
            </div><!--mb-wrapper-->


            <section class="section1">
                <div class="col-md-12 col-sm-12 col-xs-12 cont-col1">
                       <h2>Setup:</h2>
                    <p>
                        Rizepoint is a corporate compliance software company. Their products are used across many industries to manage brand, keep products within regulated parameters and maintain internal QA standards.
                        <br><br>
                        In February I was brought onto the marketing team to help with a total site redesign and build.
                        <br><br>
                        Key to the redesign was that the website would operate as a salesman to potential clients. Every part of the site was considered, studied and tested to maximize user engagement, retention and action.
 
                    </p>
                </div><!--cont-col1-->

                <div class="col-md-6 col-sm-12 col-xs-12 cont-col1">

                       <h2>Navigation:</h2>
                    <p>
                        Studies of the analytics and interviews showed that the main navigation was not performing as intended.
                        <br><br>
                        Menus were reassigned to three key categories that targeted different user types: Clients, potential clients and information. 
                        <br><br>
                        The solutions tab was renamed to industries, this was in an effort to attract new clients within those verticals. Users unique fields were to be front and center across the whole site. The industries tab makes it very clear where our market values were strongest.

                    </p>
                </div><!--cont-col1-->
            
            <div class="cont">
                <div class="col-md-6 col-sm-12 col-xs-12 cont-col2">
                    <img src="img/oldmenu4.png">
                </div><!--cont-col2-->
            </div><!--content-wrapper-->
            <div class="cont">
                <div class="col-md-6 col-sm-12 col-xs-12 cont-col2">
                    <img src="img/oldmenu3.png">
                </div><!--cont-col2-->
            </div><!--content-wrapper-->
        </section>
            
            
            
        <section class="section2">  
            <div class="col-md-6 col-sm-12 col-xs-12 cont-col1">

                    <p>
                        Under the original solutions tab was information about Rizepoint’s products. User research showed that they were confused by both the naming and separate nature of the products. To alleviate that concern a single page was built to display and explain the features and differences between the product. In the navigation each section was linked via anchor tabs.
                        <br><br>
                        Resources was add to give current and potential users access to wide breadth of case studies, awards and news about the company and the product.
                        <br><br>
                        The company tab was carried over from the initial design, but cleaned up to give those looking for more about Rizepoint a healthy dose of information on the team, executives, and careers.
                        <br><br>
                        A common complaint amongst users and clients was a lack of pricing on the site. A tab was provided so that information could be easily accessed from anywhere on the site.


                    </p>
                </div><!--cont-col1-->
            
            <div class="cont">
                    <div class="col-md-6 col-sm-12 col-xs-12 cont-col2">
                        <img src="img/newnav1.png">
                    </div><!--cont-col2-->
                </div><!--content-wrapper-->
            
                <div class="cont">
                    <div class="col-md-6 col-sm-12 col-xs-12 cont-col2">
                        <img src="img/newnav2.png">
                    </div><!--cont-col2-->
                </div><!--content-wrapper-->
        </section>
            
        <section class="section3">  
            <div class="col-md-6 col-sm-12 col-xs-12 cont-col1">

                        <h2>Style:</h2>
                    <p>
                        The original site was confusing to users. Information was clustered too tightly. Content wasn’t connected with any specific goal, it was just there to fill the page. Barely anyone was getting past the fold.
                        <br><br>
                        The redesign focused on a bold color scheme, a minimal layout and more interactivity. Every piece of content designed was to serve the greater goal of informing users with information they wanted.
                        <br><br>
                        New color combinations and gradients were created to beautify the site and work as a sort of soft rebrand.
                        <br><br>
                        Visual queues were developed to direct users to content that was most important. We utilized video, modals, user personas and visual psychology to improve user engagement promote longer sessions.

                    </p>
                </div><!--cont-col1-->
            
            <div class="cont">
                    <div class="col-md-6 col-sm-12 col-xs-12 cont-col2">
                        <img src="img/newsite1.png">
                    </div><!--cont-col2-->
                </div><!--content-wrapper-->
            
                <div class="cont">
                    <div class="col-md-12 col-sm-12 col-xs-12 cont-col2">
                        <img src="img/newsite12.png">
                    </div><!--cont-col2-->
                </div><!--content-wrapper-->
                <div class="cont">
                    <div class="col-md-6 col-sm-12 col-xs-12 cont-col2">
                        <img src="img/newsite10.png">
                    </div><!--cont-col2-->
                </div><!--content-wrapper-->
                <div class="cont">
                    <div class="col-md-6 col-sm-12 col-xs-12 cont-col2">
                        <img src="img/newsite11.png">
                    </div><!--cont-col2-->
                </div><!--content-wrapper-->
                <div class="cont">
                    <div class="col-md-12 col-sm-12 col-xs-12 cont-col2">
                        <img src="img/newsite19.png">
                    </div><!--cont-col2-->
                </div><!--content-wrapper-->
            
        </section>
            
            
            
            
	   </div><!--main-body-wrapper-->
    </div><!--main-body-->
    
    
    
    
    
	<div class="container-fluid main-footer">
		<div class="container mf-wrapper">
			<p>All rights reserved.  Content &copy; <?php echo date('Y'); ?> Riley Hein </p>
		</div><!--mf-wrapper-->
	</div><!--main-footer-->
    
</body>
</html>