<section>
    {foreach from=$searchResult item=result}
        <article id="articlelist">
            <h1 id="red2">{$result.title}</h1>
            <h4 class="date">{$result.date_created}</h4>
            <p>{$result.content}</p>
            <img src="{$result.image}" height="200">
            <hr class="style5">
        </article>

    {/foreach}
</section>