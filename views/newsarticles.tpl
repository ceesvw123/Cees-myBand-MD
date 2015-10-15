{* Smarty *}
<section>
    <h1>News</h1>
    <hr class="style5">
    {foreach from=$data item=result}
        <article style="margin-bottom: 25px;">
            <h1 id="red2">{$result.title}</h1>
            <h4 class="date">{$result.date_created}</h4>
            <p>{$result.content}</p>
            <img class="img" src="{$result.image}" height="200">
            <hr class="style5">
        </article>
    {/foreach}
</section>
{include file="pagination_news.tpl"}