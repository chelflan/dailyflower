{template:header}
	<div id="content" class="site-content">	
	<div class="clear"></div>
		<section id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
<div id="post_list_box" class="border_gray">
{foreach $articles as $keyd=>$article}
{template:post-multi}
{/foreach}			
</div>		
</main><!-- .site-main -->
{template:pagebar}	
	</section><!-- .content-area -->
{if ($zbp->Config('Blogs')->cebianlanbj !== '3') }<div id="sidebar" class="widget-area">	{template:sidebar}	</div>{/if}
<div class="clear"></div>
</div>
{template:footer}