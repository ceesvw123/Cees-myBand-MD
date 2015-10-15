{* Smarty *}
<section>
    <h1>Exhibitions</h1>
    <hr class="style5">
    {foreach from=$data item=result}
        <article style="margin-bottom: 25px;">
            <h1 id="red2">{$result.title}</h1>
            <h4 class="date">{$result.dates}</h4>
            <p>{$result.location}</p>
            <a class="atag" href="http://{$result.website}"><p>{$result.website}</p></a>
            <hr class="style5">
        </article>
    {/foreach}
</section>
{include file="pagination_exhibition.tpl"}
