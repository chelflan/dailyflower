<aside id="{$module.HtmlID}" class="widget widget_{$module.FileName}">{if (!$module.IsHideTitle)&&($module.Name)}<h3 class="widget-title"><span class="cat">{$module.Name}</span></h3>{/if}
{if ($module.Type=='div')}
<div class="textwidget" id="{$module.HtmlID}-1">{$module.Content}<div class="clear"></div></div>
{/if}
{if $module.Type=='ul'}
{if ($module.FileName=='previous')||($module.FileName=='comments')||($module.FileName=='tags')||($module.FileName=='authors')}
{$module.Content}
{else}
<ul id="{$module.HtmlID}-1">{$module.Content}<div class="clear"></div></ul>
{/if}{/if}
<div class="clear"></div>
</aside>