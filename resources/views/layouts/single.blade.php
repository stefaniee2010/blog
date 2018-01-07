<!DOCTYPE html>
<html lang="en">

  <head>
    
    <!-- Meta Tag -->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <!-- SEO -->
    <meta name="description" content="150 words">
    <meta name="author" content="uipasta">
    <meta name="url" content="http://www.yourdomainname.com">
    <meta name="copyright" content="company name">
    <meta name="robots" content="index,follow">
    
    
    <title>DevBlog - Personal Blog Template</title>
    
    <!-- Favicon -->
    <link rel="shortcut icon" href="app/images/favicon/favicon.ico">
    <link rel="apple-touch-icon" sizes="144x144" type="image/x-icon" href="app/images/favicon/apple-touch-icon.png">
    
    <!-- All CSS Plugins -->
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/plugin.css') }}">
    
    <!-- Main CSS Stylesheet -->
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/style.css') }}">
    
    <!-- Google Web Fonts  -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:400,300,500,600,700">
    
    <!-- Syntax Highlighter  -->
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/syntax/shCore.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('app/css/syntax/shThemeDefault.css') }}">
    
    
    <!-- HTML5 shiv and Respond.js support IE8 or Older for HTML5 elements and media queries -->
    <!--[if lt IE 9]>
	   <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	   <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    

  </head>

 <body>

	
     
	 <!-- Preloader Start -->
     <div class="preloader">
	   <div class="rounder"></div>
      </div>
      <!-- Preloader End -->
      
      
    
    
    <div id="main">
        <div class="container">
            <div class="row">
            	
               
                 
                 <!-- About Me (Left Sidebar) Start -->
                 <div class="col-md-3">
                   <div class="about-fixed">
                    
                     <div class="my-pic">
                        <img src="images/pic/my-pic.png" alt="">
                        <a href="javascript:void(0)" class="collapsed" data-target="#menu" data-toggle="collapse"><i class="icon-menu menu"></i></a>
                         <div id="menu" class="collapse">
                           <ul class="menu-link">
                               <li><a href="about.html">About</a></li>
                               <li><a href="work.html">Work</a></li>
                               <li><a href="contact.html">Contact</a></li>
                            </ul>
                         </div>
                        </div>
                      
                      
                      
                      <div class="my-detail">
                    	
                        <div class="white-spacing">
                            <h1>Alex Parker</h1>
                            <span>Web Developer</span>
                        </div> 
                       
                       <ul class="social-icon">
                         <li><a href="#" target="_blank" class="facebook"><i class="fa fa-facebook"></i></a></li>
                         <li><a href="#" target="_blank" class="twitter"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="#" target="_blank" class="linkedin"><i class="fa fa-linkedin"></i></a></li>
                         <li><a href="#" target="_blank" class="github"><i class="fa fa-github"></i></a></li>
                        </ul>

                    </div>
                  </div>
                </div>
                <!-- About Me (Left Sidebar) End -->
                
                
                
                
                 
                 <!-- Blog Post (Right Sidebar) Start -->
                 <div class="col-md-9">
                    <div class="col-md-12 page-body">
                    	<div class="row">
                    		
                            
                            @yield('header')
                            
                            
                            <div class="col-md-12 content-page">
                              @yield('content')
                              
                                     <!-- Post Comment (Disqus) Start -->
                                  <div id="comment" class="comment">
                                    <h3>Discuss about post</h3>
                                     
                                     
                                     <!-- Disqus Code Start  (Please Note: Disqus will not be load on local, You have to upload it on server.)-->
                                     <div id="disqus_thread"></div>

							          <script>
					
					/**
*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
/*
var disqus_config = function () {
this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
};
*/
(function() { // DON'T EDIT BELOW THIS LINE
var d = document, s = d.createElement('script');
s.src = 'https://reading-addict-1.disqus.com/embed.js';
s.setAttribute('data-timestamp', +new Date());
(d.head || d.body).appendChild(s);
})();
</script>
<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
              <!-- Disqus Code End -->
              
                                   </div>
                                   <!-- Post Comment (Disqus) End -->
                                  
                                   

                                </div>    
                             </div>
                              
                         </div>
                         
                        
                        
                        <!-- Subscribe Form Start -->
                        <div class="col-md-8 col-md-offset-2">
                           <form id="mc-form" method="post" action="http://uipasta.us14.list-manage.com/subscribe/post?u=854825d502cdc101233c08a21&amp;id=86e84d44b7">
								
						  <div class="subscribe-form margin-top-20">
							 <input id="mc-email" type="email" placeholder="Email Address" class="text-input">
							  <button class="submit-btn" type="submit">Submit</button>
								</div>
                                <p>Subscribe to my weekly newsletter</p>
								<label for="mc-email" class="mc-label"></label>
							  </form>
                             
                           </div>
                           <!-- Subscribe Form End -->
                           
                           
                         </div>
                     
                     
                       
                       <!-- Footer Start -->
                       <div class="col-md-12 page-body margin-top-50 footer">
                          <footer>
                          <ul class="menu-link">
                               <li><a href="index.html">Home</a></li>
                               <li><a href="about.html">About</a></li>
                               <li><a href="work.html">Work</a></li>
                               <li><a href="contact.html">Contact</a></li>
                            </ul>
                            
                          <p>© Copyright 2016 DevBlog. All rights reserved</p>
						  
						  
						  <!-- UiPasta Credit Start -->
                          <div class="uipasta-credit">Design By <a href="http://www.uipasta.com" target="_blank">UiPasta</a></div>
                          <!-- UiPasta Credit End -->
						  
                           
                         </footer>
                       </div>
                       <!-- Footer End -->
                     
                     
                  </div>
                  <!-- Blog Post (Right Sidebar) End -->
                
            </div>
         </div>
      </div>
    
    
    
     
     <!-- Endpage Box (Popup When Scroll Down) Start -->
     <div id="scroll-down-popup" class="endpage-box">
       <h4>Read Also</h4>
       <a href="#">How to make your company website based on bootstrap framework...</a>
      </div>
      <!-- Endpage Box (Popup When Scroll Down) End -->
      
    
    
    
    <!-- Back to Top Start -->
    <a href="#" class="scroll-to-top"><i class="fa fa-long-arrow-up"></i></a>
    <!-- Back to Top End -->
    
    
    <!-- All Javascript Plugins  -->
    <script type="text/javascript" src="{{ asset('app/js/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('app/js/plugin.js') }}"></script>
    
    <!-- Main Javascript File  -->
    <script type="text/javascript" src="{{ asset('app/js/scripts.js') }}"></script>
    
    <!-- Syntax Highlighter Javascript File  -->
    <script type="text/javascript" src="{{ asset('app/js/syntax/shCore.js') }}"></script>
    <script type="text/javascript" src="{{ asset('app/js/syntax/shBrushCss.js') }}"></script>
    <script type="text/javascript" src="{{ asset('app/js/syntax/shBrushJScript.js') }}"></script>
    <script type="text/javascript" src="{{ asset('app/js/syntax/shBrushPerl.js') }}"></script>
    <script type="text/javascript" src="{{ asset('app/js/syntax/shBrushPhp.js') }}"></script>
    <script type="text/javascript" src="{{ asset('app/js/syntax/shBrushPlain.js') }}"></script>
    <script type="text/javascript" src="{{ asset('app/js/syntax/shBrushPython.js') }}"></script>
    <script type="text/javascript" src="{{ asset('app/js/syntax/shBrushRuby.js') }}"></script>
    <script type="text/javascript" src="{{ asset('app/js/syntax/shBrushSql.js') }}"></script>
    <script type="text/javascript" src="{{ asset('app/js/syntax/shBrushVb.js') }}"></script>
    <script type="text/javascript" src="{{ asset('app/js/syntax/shBrushXml.js') }}"></script>
    
	<!-- Syntax Highlighter Call Function -->
	<script type="text/javascript">
		SyntaxHighlighter.config.clipboardSwf = 'app/js/syntax/clipboard.swf';
		SyntaxHighlighter.all();
	</script>

    
   </body>
 </html>
