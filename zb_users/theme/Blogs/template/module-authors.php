{php}$i = $zbp->modulesbyfilename['authors']->MaxLi;
if ($i == 0) $i = 5;
$dayy=$zbp->Config('Blogs')->cblzhwz_day;
$nowtime = time();
$settime = intval($dayy)*24*60*60;
$gettime = intval($nowtime-$settime);
if ($dayy == '') $gettime = 0;	
	$zzarray = $zbp->GetArticleList(array('*'),array(array('=','log_Status','0'),array('META_NAMEVALUE', 'log_Meta','Blogs_zhanzhang',1)),array('log_PostTime'=>'DESC'),array($i),'');
	$rmarray = $zbp->GetArticleList(array('*'),array(array('=','log_Status','0'),array('>','log_PostTime',$gettime)),array('log_ViewNums'=>'DESC'),array($i),'');
	$rparray = $zbp->GetArticleList(array('*'),array(array('=','log_Status','0'),array('>','log_PostTime',$gettime)),array('log_CommNums'=>'DESC'),array($i),'');
	{/php}

{if $zbp->Config('Blogs')->zzbgzh_kg=='1'}
<div id="top_post" class="right_box border_gray"><div class="right_box_content"><ul id="top_post_filter"><li id="rand_post" class="top_post_filter_active">站长推荐</li><li id="men_post" class="">热门文章</li><li id="ping_post" class="">热评文章</li><div class="clear"></div></ul>
	{foreach $zzarray as $article}
		<a class="top_post_item rand_post" href="{$article->Url}" title="{$article->Title}({$article->Time('Y-m-d')})" style="display: none;" target="_blank">{php}echo Blogs_thumbnail($article->ID,75,75,2);{/php}<div class="news-inner"><p>{$article->Title}</p><span class="views">阅读 {$article.ViewNums}</span><span class="comment">{$article.Time('Y/m/d')}</span></div><div class="clear"></div></a>
	{/foreach}
	{foreach $rmarray as $article}
		<a class="top_post_item men_post" href="{$article->Url}" title="{$article->Title}({$article->ViewNums}人阅读)" style="display: block;"  target="_blank">{php}echo Blogs_thumbnail($article->ID,75,75,2);{/php}<div class="news-inner"><p>{$article->Title}</p><span class="views">阅读 {$article.ViewNums}</span><span class="comment">{$article.Time('Y/m/d')}</span></div><div class="clear"></div></a>
	{/foreach}
	{foreach $rparray as $article}	
		<a class="top_post_item ping_post" href= "{$article->Url}" title="{$article->Title} ({$article->CommNums}条评论)" style="display: block;"  target="_blank">{php}echo Blogs_thumbnail($article->ID,75,75,2);{/php}<div class="news-inner"><p>{$article->Title}</p><span class="views">评论 {$article.CommNums}</span><span class="comment">{$article.Time('Y/m/d')}</span></div><div class="clear"></div></a>
	{/foreach}	
</div></div>
{else}
<ul id="divAuthors-1">
{foreach $authors as $author}
<li><a href="{$author->Url}">{$author->StaticName}<span class="article-nums"> ({$author->Articles})</span></a></li>
{/foreach}
<div class="clear"></div>
</ul>
{/if}
