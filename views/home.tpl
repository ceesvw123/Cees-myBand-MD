{* Smarty *}
<section>
{foreach from=$data item=newsitem}

    <article>
        <h1>{$newsitem.title}</h1>
        <content>{$newsitem.content}</content>
    </article>
{/foreach}

</section>