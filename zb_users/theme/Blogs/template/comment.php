<div class="msg" id="cmt{$comment.ID}">
<div id="anchor-cmt{$comment.ID}"><div id="comment-cmt{$comment.ID}"></div></div>
	<li class="comment even thread-even depth-{$comment.Level}" id="comment-{$comment.ID}">
	<div id="div-comment-{$comment.ID}" class="comment-body">
	{php}
	$avatar = md5(strtolower($comment->Author->Email));
	$zmavatar=Blogs_tt_touxiang_generate_first_letter_uri($comment->Author->StaticName);
{/php}
	<img alt='{$comment.Author.StaticName}' src="https://cn.gravatar.com/avatar/{$avatar}&amp;r=X&amp;s=50?d=404" onerror='javascript:this.src="{$zmavatar}";this.onerror=null;' class='avatar avatar-50 photo' height='50' width='50' />
	<div class="comment-author">
	<strong><span class="duzhe"><a href="{$comment.Author.HomePage}" rel="external nofollow" target="_blank" class="url">{$comment.Author.StaticName}</a></span></strong>
{if $comment.ParentID!=0}
{php}
$newc=$zbp->GetCommentByID($comment->ParentID);
$atid=$newc->ID;
$atname=$newc->Name;
$atid=$newc->AuthorID;
if ($atid>0){$atname=$zbp->members[$atid]->StaticName;}
{/php}
	<span class="reply_tz">{$comment.Time()}<a rel="nofollow" class="comment-reply-link" href="#comment" onclick="zbp.comment.reply('{$comment.ID}')" aria-label="回复给{$comment.Author.StaticName}">&nbsp;<i class="fas fa-reply"></i>&nbsp;回复</a></span><br> </div> <p><a class="at" href="#comment-{$comment.ID}">@{$atname}</a>{php}echo Blogs_biaoqing($comment->Content){/php}</p>
{else}
{php}
if ($commentRootFloor==1){$louchenghao="&nbsp;<span class='pinglunqs plshafa'>沙发</span>";}
elseif ($commentRootFloor==2){$louchenghao="&nbsp;<span class='pinglunqs plbandeng'>板凳</span>";} 
elseif ($commentRootFloor==3){$louchenghao="&nbsp;<span class='pinglunqs pldiban'>地板</span>";}
else{$louchenghao="<span class='floor'>&nbsp;{$commentRootFloor}楼</span>";}              
{/php}
	<span class="revertcomment"><a rel="nofollow" class="comment-reply-link" href="#comment" onclick="zbp.comment.reply('{$comment.ID}')" aria-label="回复给{$comment.Author.StaticName}">&nbsp;@回复</a></span><br> <span class="comment-meta commentmetadata"> <span class="comment-aux"> <span class="xiaoshi">发表于</span>{$comment.Time()}{$louchenghao}</span></span> </div><p>{php}echo Blogs_biaoqing($comment->Content){/php}</p>
	{/if}
	</div>
<ul class="children"> 
{foreach $comment.Comments as $comment}
{template:comment}
{/foreach}
</ul>
</li>
</div>