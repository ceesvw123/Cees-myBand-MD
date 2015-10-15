<div id="captioned-gallery">
    <figure class="slider">
        <figure>
            <img src="http://i.huffpost.com/gen/1803948/images/o-DAMIEN-HIRST-MAMMOTH-facebook.jpg" alt>
            <figcaption>Damien Hirst's Wooly Mammoth Skeleton</figcaption>
        </figure>
        <figure>
            <img src="http://i.huffpost.com/gen/2023784/images/o-DAMIEN-HIRST-THE-PHYSICAL-IMPOSSIBILITY-facebook.jpg" alt>
            <figcaption>Primal Fear and the Legacy of Damien Hirst</figcaption>
        </figure>
        <figure>
            <img src="http://i.huffpost.com/gen/1388768/images/o-DAMIEN-HIRST-CHILDRENS-BOOK-facebook.jpg" alt>
            <figcaption>Damien Hirst's diamond skull</figcaption>
        </figure>
        <figure>
            <img src="http://breakstreet.ru/wp-content/uploads/2013/11/o-DAMIEN-HIRST-facebook.jpg" alt>
            <figcaption>Artist Damien Hirst's Zebra</figcaption>
        </figure>
        <figure>
            <img src="http://i.huffpost.com/gen/1803948/images/o-DAMIEN-HIRST-MAMMOTH-facebook.jpg" alt>
            <figcaption>Hobbiton, New Zealand</figcaption>
        </figure>
    </figure>
</div>


<section>
    <h1 id="red2">Latest Artworks</h1>

    <div class="image-zoom-container">
        <section id="photos2">
            {foreach from=$data2 item=result}
                <div class="zoom-container">
                    <img height="" src="{$result.image}">
                </div>
            {/foreach}
        </section>
    </div>
</section>
<hr class="style5" style="margin-bottom: 35px">
<section>
    <h1 id="red2">Latest News</h1>

    {foreach from=$data1 item=result}
        <article style="margin-bottom: 25px;">
            <h1 id="red2">{$result.title}</h1>
            <h4 class="date2">{$result.date_created}</h4>
            <img class="img" src="{$result.image}" height="200">
            <p>{$result.content}</p>
        </article>
    {/foreach}
</section>
<hr class="style5" style="margin-bottom: 35px">



<section style="margin-bottom: 200px">
    <h1 id="red2">Latest Exhibitions</h1>

    {foreach from=$data3 item=result}
        <article style="margin-bottom: 25px;">
            <h1 id="red2">{$result.title}</h1>
            <h4 class="date2">{$result.dates}</h4>
            <p>{$result.location}</p>
            <a class="atag" href="http://{$result.website}"><p>{$result.website}</p></a>
        </article>
    {/foreach}
</section>