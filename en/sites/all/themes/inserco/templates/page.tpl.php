<div id="wrapper" align="center">
<div id="main" align="center">  
<!--header starting here-->
		<?php ?>       
		<header id="header">
            <div class="header_block" align="center">
            	<?php if ($logo): ?>
                    <div id="logo">
                        <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="logo">
                        <img src="<?php print $logo; ?>" alt="<?php print t('Home'); ?>" /></a>
                    </div>
            	<?php endif; ?>
            	
            	<div id="site-name">
                <a href="<?php print $front_page; ?>" title="<?php print t('Home'); ?>" rel="home" id="site-name">
            	<?php print $site_name ?></a>
            	</div>
            	
            	<?php if ($site_slogan): ?>
					<div id="site-slogan"><?php print $site_slogan ?></div>
				<?php endif ?>
            	
                <?php if($page['header_right_block']): ?>
                     <div id="header_right">
                     	<?php print render($page['header_right_block']); ?>
                     </div>
                <?php endif; ?>     
            </div>	
      	</header>
<!--header ends here-->
<!--navigation starting here-->      
        <nav id="top-menu">
        	<?php if($page['main_menu_block']): ?>
                <div id="menutab">
                    <?php print render($page['main_menu_block']); ?>
                </div>
            <?php endif; ?>    
        </nav>
        
<!--navigation ends here-->

        <?php if ($messages): ?>
        	<div id="messages">
	   			<div class="section clearfix">
           			<?php print $messages; ?>
       			</div>
	        </div> <!-- /.section, /#messages -->
        <?php endif; ?>


<!--Container starting here-->    
		<div id="container">
            <article id="article">
				
				<?php print render($title_prefix); ?>
	  <?php if ($tabs): ?>
        <div class="tabs">
          <?php print render($tabs); ?>
        </div>
      <?php endif; ?>
      
      <?php print render($title_suffix); ?>
      
      <?php print render($page['help']); ?>
      <?php if ($action_links): ?>
        <ul class="action-links">
          <?php print render($action_links); ?>
        </ul>
      <?php endif; ?>

<?php if ($breadcrumb): ?>
      				<div id="breadcrumb"><?php print $breadcrumb; ?></div>
    			<?php endif; ?>
    			
    			<?php if ($title): ?>
        			<h1 class="title" id="page-title">
          				<?php print $title; ?>
        			</h1>
      			<?php endif; ?>
			<!--content starting here-->           
            <?php if($page['content']): ?>
            
                <div id="content_leftpanel">
					
             <?php print render($page['content']); ?>
                </div>
             <?php endif; ?>
             
             <?php if($page['content_right']): ?>
  			 <div id="home_rightpanel">
   				<?php print render($page['content_right']); ?>
   			 </div>
			<?php endif; ?>	
             
  
<!--content ending here-->
            </article>
		</div>

<!--Container ends here-->
		<div class="content_bottom" align="center">
			<?php if($page['country_list_block']): ?>
                <div class="country_list">
                    <?php print render($page['country_list_block']); ?>
                </div>
            <?php endif; ?>    
        </div>
   
<!--Footer starting here-->   
		<div class="footer" align="center">
        <?php if($page['footer_block']): ?>
            <div class="footer_section">
            	<?php print render($page['footer_block']); ?>
        	</div>
        <?php endif; ?>
        <div id="counter" align='center'><img src='http://www.hit-counts.com/counter.php?t=MTI5MzI0Nw==' border='0' alt='Free Hit Counter'></div>
        </div>
<!--footer ends here-->   		

</div>
</div>
