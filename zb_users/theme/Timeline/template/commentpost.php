<div class="post" id="divCommentPost">
	<div class="posttop"><a rel="nofollow" id="cancel-reply" href="#divCommentPost" style="display:none;"><small>取消回复</small></a></div>
	<form id="frmSumbit" target="_self" method="post" action="{$article.CommentPostUrl}" >
	<input type="hidden" name="inpId" id="inpId" value="{$article.ID}" />
	<input type="hidden" name="inpRevID" id="inpRevID" value="0" />
{if $user.ID>0}
	<input type="hidden" name="inpName" id="inpName" value="{$user.Name}" />
	<input type="hidden" name="inpEmail" id="inpEmail" value="{$user.Email}" />
	<input type="hidden" name="inpHomePage" id="inpHomePage" value="{$user.HomePage}" />
{else}
	<p><i class="fa fa-user-secret fa-fw"></i><input type="text" name="inpName" id="inpName" class="text" value="{$user.Name}" size="22" tabindex="1" placeholder="名称(*)" /> <label for="inpName"></label></p>
	<p><i class="fa fa-envelope-o fa-fw"></i><input type="text" name="inpEmail" id="inpEmail" class="text" value="{$user.Email}" size="22" tabindex="2" placeholder="邮箱" /> <label for="inpEmail"></label></p>
	<p><i class="fa fa-link fa-fw"></i><input type="text" name="inpHomePage" id="inpHomePage" class="text" value="{$user.HomePage}" size="22" tabindex="3" placeholder="网址" /> <label for="inpHomePage"></label></p>
{if $option['ZC_COMMENT_VERIFY_ENABLE']}
	<p class="vcode"><input type="text" name="inpVerify" id="inpVerify" class="text" value="" size="10" tabindex="4" placeholder="验证码(*)" /> <label for="inpVerify"></label>
	<img style="cursor:pointer;" src="{$article.ValidCodeUrl}" title="点击刷新" onclick="javascript:this.src='{$article.ValidCodeUrl}&amp;tm='+Math.random();"/>
	</p>
{/if}

{/if}
	<textarea name="txaArticle" id="txaArticle" class="text" cols="50" rows="4" placeholder="如果只看不说，江湖并不知道你来过……" tabindex="5"></textarea>
	<div class="cpost"><input name="sumbit" type="submit" tabindex="6" value="提交" onclick="return zbp.comment.post()" class="button" /><span class="keytip">支持Ctrl+Enter提交</span></div>
	</form>
</div>