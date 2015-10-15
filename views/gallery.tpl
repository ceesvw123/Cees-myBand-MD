
<h1 style="text-align: center; ">Artworks</h1>
<hr class="style5" width="50%" style="margin-bottom: 35px">
<div class="image-zoom-container">
<section id="photos">
    {foreach from=$data item=result}
    <div class="zoom-container">

    <img src="{$result.image}">

    </div>
    {/foreach}
</section>
</div>