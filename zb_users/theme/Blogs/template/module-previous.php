<div class="new_cat" id="new_cat"><ul>
{php}$i = $zbp->modulesbyfilename['previous']->MaxLi;if ($i == 0) $i = 6;{/php}
{foreach getlist($i) as $article}
<li class="clr"><a href="{$article->Url}"  title="{$article->Title}" target="_blank"><div class="time"><span class="r">{$article->Time('d')}</span>/<span class="y">{$article->Time('m月')}</span></div><div class="title">{$article->Title}</div></a></li>
{/foreach}
</ul></div>