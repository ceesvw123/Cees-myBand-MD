<ul class="pagination">
    {if $page_nr != 1}
        <li><a href="?page=news&page_nr={$page_nr-1}"><</a></li>
    {/if}

    {for $i=1 to $total_pages}
        <li {if $page_nr eq $i} id="active"{/if}><a class="pagination" href="?page=news&page_nr={$i}">{$i}</a></li>
    {/for}

    {if $page_nr != $total_pages}
        <li><a href="?page=news&page_nr={$page_nr+1}">></a></li>
    {/if}
</ul>