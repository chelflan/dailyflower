{if $socialcomment}
{$socialcomment}
{else}
{php}
    if ($option['ZC_COMMENT_REVERSE_ORDER']=='1') {
        $where = array(array('=', 'comm_LogID', $article->ID),array('=', 'comm_RootID','0'),array('=', 'comm_IsChecking', 0));
        $_comments = $zbp->GetCommentList('*',$where,null,null,null);
        $commentsRootSum = count($_comments)+1;
    } else {
        $commentsRootSum = 0;
    }
{/php}
<div id="commentszbplk" class="commentszbp-area">
{template:commentpost}
</div>
<label id="AjaxCommentBegin"></label>
{if $article.CommNums>0}
<div id="commentszbplb" class="commentszbp-area">
<h3 id="pinglunliebiao"><i class="fas fa-comments"></i>&nbsp;评论列表</h3>
<ol class="commentzpb-list">
{foreach $comments as $key => $comment}
{$commentRootFloor=abs($comment.FloorID-$commentsRootSum)}
{template:comment}
{/foreach}
</ol>
</div>
{template:pagebar}
<label id="AjaxCommentEnd"></label>
	{else}
	<div id="commentszbpmy" class="commentszbp-area">
		<h3 id="meiyoupinglun">还没有留言，还不快点抢沙发？</h3>
	</div>
	{/if}	
{/if}