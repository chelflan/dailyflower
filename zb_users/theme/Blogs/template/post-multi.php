<article id="post-{$article.ID}" class="archive-list {php} $postds=$keyd;if($postds % 2 ==0){echo 'shuangshu';}{/php}">
		<div class="post-date-ribbon"><div class="corner"></div>{$article->Time('Y年m月d日')}</div>
		{if $zbp->Config('Blogs')->wenzhanglbytpbj == '4'}
		<header class="entry-header">
			<h2 class="entry-title"><a href="{$article.Url}" title="{$article.Title}">{$article.Title}</a></h2>		
		</header>
		<figure class="thumbnail">		
			{php}echo Blogs_thumbnail($article->ID,768,220,1);{/php}				
		</figure>	
		{else}
		<figure class="thumbnail">
			{if $zbp->Config('Blogs')->wenzhanglbytpbj == '3'}		
				{php}echo Blogs_thumbnail($article->ID,768,220,1);{/php}	
			{else}
				{php}echo Blogs_thumbnail($article->ID,270,180,1);{/php}
			{/if}
		</figure>	
		<header class="entry-header">
			<h2 class="entry-title"><a href="{$article.Url}" title="{$article.Title}">{$article.Title}</a></h2>		
		</header>
		{/if}


		
		<div class="entry-content">
			<div class="archive-content">
			{php}
			if (($zbp->Config('Blogs')->cebianlanbj == '3' && $zbp->Config('Blogs')->wenzhanglbytpbj == '4') || ($zbp->Config('Blogs')->cebianlanbj == '3' && $zbp->Config('Blogs')->wenzhanglbytpbj == '3')) {
				$intro= trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),80)).'...';
			}elseif($zbp->Config('Blogs')->cebianlanbj == '3'){
				$intro= trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),160)).'...';	
			}else{
				$intro= trim(SubStrUTF8(TransferHTML($article->Content,'[nohtml]'),80)).'...';
			}				
			{/php}
			{$intro}
			</div>
			<div class="entry-meta">
				<span class="post_cat"><i class="fas fa-folder" aria-hidden="true"></i>&nbsp;<a href="{$article.Category.Url}" target="_blank" rel="category tag">{$article.Category.Name}</a></span>
				<span class="views"><i class="fas fa-users" aria-hidden="true"></i>&nbsp;{$article.ViewNums} 人阅读</span>
				<span class="comment sllpl"><i class="fas fa-comment" aria-hidden="true"></i>&nbsp;{$article.CommNums} 条评论</span>		
			</div>
			<div class="readMore"><a href="{$article.Url}" rel="nofollow">阅读全文</a></div>
			<div class="clear"></div>
		</div><!-- .entry-content -->
	</article><!-- #post -->