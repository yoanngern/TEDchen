<!Doctype html>
<html lang="en">
    <head>
	    <meta charset="utf-8" />
	    <link rel="stylesheet" media="all" href="htdocs/css/style.css" />
            <script type='text/javascript' src='htdocs/js/jquery-2.0.2.min.js'></script>
	    <script type='text/javascript' src='htdocs/js/script.js'></script>
            <script type='text/javascript' src='htdocs/js/modernizr.js'></script>
            <title>Project 143</title>
	</head>
    <body>       
    <div id="container">
    <header id="globalheader">
        <nav id="topheader">
		    <ul id="globalnav">
                        <li id="gn-home">
                            <a {if  $topAction=='about'}class="selected"{/if} href="?action=home">Home</a>
                        </li>
                        <li id="gn-about">
                            <a {if  $topAction=='about'}class="selected"{/if} href="?action=about">About</a>
                        </li>
                        <li id="gn-events">
                            <a {if  $topAction=='events'}class="selected"{/if} href="?action=events">Events</a>
                        </li>
                        <li id="gn-videos">
                            <a {if  $topAction=='videos'}class="selected"{/if} href="?action=videos">Videos</a>
                        </li>
                        <li id="gn-partners">
                            <a {if  $topAction=='partners'}class="selected"{/if} href="?action=partners">Partners</a>
                        </li>
                        <li id="gn-press">
                            <a {if  $topAction=='press'}class="selected"{/if} href="?action=press">Press</a>
                        </li>
                        <li id="gn-contact">
                            <a {if  $topAction=='contact'}class="selected"{/if} href="?action=contact">Contact</a>
                        </li>
                        {if $userIsLogged}
                            <li id="gn-gestion">
                                <a {if  $topAction=='gestion'}class="selected"{/if} href="?action=gestion">Gestion</a>
                            </li>
                        {/if}
                     </ul>
                     <ul id="lognav">
		    {if $userIsLogged}                   
                        <li id="userinfo">
                            <a href="?action=user_infos">{$username}</a>
                        </li>
                        <li id="logout">
                            <a href="?action=logout">Logout</a>
			</li>
		    {else}
                        <li id="login">
                            <a href="?action=login">Login</a>
                        </li>
                    {/if}
                    </ul>	    
	    </nav>
	    <nav id="bottomheader">
		    <a id="logo" href="?action=home"></a>
			
                            <ul class="social">
                            <li>
                                <a href="https://twitter.com/#!/TEDxLausanne" class="twitter" title="TEDxLausanne on Twitter" target="_blank"><span>Twitter</span>  </a>
                            </li>
                            <li>
                                <a href="http://www.facebook.com/TEDxLausanne" class="facebook" title="TEDxLausanne on Facebook" target="_blank"><span>Facebook</span></a>
                            </li>
                            <li>
                                <a href="http://www.linkedin.com/groups/TEDxLausanne-3521864" class="linkedin" title="TEDxLausanne on Linkedin" target="_blank"><span>Linkedin</span></a>
                            </li>
                            <li>
                                <a href="http://www.flickr.com/photos/tedxlausanne/" class="flickr" title="TEDxLausanne on Flickr" target="_blank"><span>Flickr</span></a>
                            </li>
                            <li>
                                <a href="http://www.youtube.com/results?search_query=TEDxLausanne&oq=tedx&gs_l=youtube.1.0.35i39j0l9.11208.12163.0.13877.4.4.0.0.0.0.128.476.0j4.4.0...0.0...1ac.1.2Ndlgvm2YT4" class="youtube" title="TEDxLausanne on Youtube" target="_blank"><span>Youtube</span></a>
                            </li>
                        </ul>		              
                    
		    <!-- Display the subnav if there is -->
		    {$subnav}
	    </nav>
    </header>
    
    <section id="content" class="{$topAction} container">
    
		    <!-- Display the content of all page -->
			{$content}
			
    </section>
    
    <footer id="globalfooter">
		<p>This independent TEDx event is operated under license from TED.</p>
    </footer>   
    </div>
</body>