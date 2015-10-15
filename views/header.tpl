<header>
    <nav>
        <ul class="input-list style-4 clearfix">
            <li><a href="?page=damien" id="red">Damien Hirst</a></li>
            <li {if $page eq 'news'}class="active2" {/if}><a class="atag" href="?page=news">News</a></li>
            <li {if $page eq 'gallery'}class="active2" {/if}><a class="atag" href="?page=gallery">Gallery</a></li>
            <li {if $page eq 'agenda'}class="active2" {/if}><a class="atag" href="?page=agenda">Agenda</a></li>
            <form method="post" action="?page=search" id="search">
                <input type="text" name="searchText" onkeyup="showResult(this.value)" autofocus autocomplete="off">
                <input type="image" name="searchButton" src="img/search.svg" width="22" alt="Search" id="hove">
                <div id="livesearch"></div>
            </form>
        </ul>
    </nav>
</header>