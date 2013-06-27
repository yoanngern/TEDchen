<?php /* Smarty version Smarty-3.1.13, created on 2013-06-27 14:47:10
         compiled from "includes/templates/main.tpl" */ ?>
<?php /*%%SmartyHeaderCode:101092274351cc276bc9e918-12248993%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ec946d59eacd523e3bd54b805b0ac5f6ca723753' => 
    array (
      0 => 'includes/templates/main.tpl',
      1 => 1372337224,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '101092274351cc276bc9e918-12248993',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.13',
  'unifunc' => 'content_51cc276bd0b415_78863994',
  'variables' => 
  array (
    'topAction' => 0,
    'userIsLogged' => 0,
    'username' => 0,
    'subnav' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_51cc276bd0b415_78863994')) {function content_51cc276bd0b415_78863994($_smarty_tpl) {?><!Doctype html>
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
                            <a <?php if ($_smarty_tpl->tpl_vars['topAction']->value=='about'){?>class="selected"<?php }?> href="?action=home">Home</a>
                        </li>
                        <li id="gn-about">
                            <a <?php if ($_smarty_tpl->tpl_vars['topAction']->value=='about'){?>class="selected"<?php }?> href="?action=about">About</a>
                        </li>
                        <li id="gn-events">
                            <a <?php if ($_smarty_tpl->tpl_vars['topAction']->value=='events'){?>class="selected"<?php }?> href="?action=events">Events</a>
                        </li>
                        <li id="gn-videos">
                            <a <?php if ($_smarty_tpl->tpl_vars['topAction']->value=='videos'){?>class="selected"<?php }?> href="?action=videos">Videos</a>
                        </li>
                        <li id="gn-partners">
                            <a <?php if ($_smarty_tpl->tpl_vars['topAction']->value=='partners'){?>class="selected"<?php }?> href="?action=partners">Partners</a>
                        </li>
                        <li id="gn-press">
                            <a <?php if ($_smarty_tpl->tpl_vars['topAction']->value=='press'){?>class="selected"<?php }?> href="?action=press">Press</a>
                        </li>
                        <li id="gn-contact">
                            <a <?php if ($_smarty_tpl->tpl_vars['topAction']->value=='contact'){?>class="selected"<?php }?> href="?action=contact">Contact</a>
                        </li>
                        <?php if ($_smarty_tpl->tpl_vars['userIsLogged']->value){?>
                            <li id="gn-gestion">
                                <a <?php if ($_smarty_tpl->tpl_vars['topAction']->value=='gestion'){?>class="selected"<?php }?> href="?action=gestion">Gestion</a>
                            </li>
                        <?php }?>
                     </ul>
                     <ul id="lognav">
		    <?php if ($_smarty_tpl->tpl_vars['userIsLogged']->value){?>                   
                        <li id="userinfo">
                            <a href="?action=user_infos"><?php echo $_smarty_tpl->tpl_vars['username']->value;?>
</a>
                        </li>
                        <li id="logout">
                            <a href="?action=logout">Logout</a>
			</li>
		    <?php }else{ ?>
                        <li id="login">
                            <a href="?action=login">Login</a>
                        </li>
                    <?php }?>
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
		    <?php echo $_smarty_tpl->tpl_vars['subnav']->value;?>

	    </nav>
    </header>
    
    <section id="content" class="<?php echo $_smarty_tpl->tpl_vars['topAction']->value;?>
 container">
    
		    <!-- Display the content of all page -->
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

			
    </section>
    
    <footer id="globalfooter">
		<p>This independent TEDx event is operated under license from TED.</p>
    </footer>   
    </div>
</body><?php }} ?>