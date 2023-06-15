<!-- Header -->
<div class="header">
    <div class="inner_header">
        <!-- Logo -->
        <a href="{{ route( 'home' ) }}" class="logoSite">
            <img class="icon_logo" src="{{ Vite::asset('resources/_imgs/dc-logo.png') }}" alt="logo dc">
        </a>
        <!-- Nav -->
        <ul class="nav">
            <li class="listItem">
                <a class="linkPage" href="/characters">Characters</a>
            </li>
            <li class="listItem currentPage">
                <a class="linkPage" href="{{ route( 'comics.index' ) }}">Comics</a>
            </li>
            <li class="listItem">
                <a class="linkPage" href="/movies">Movies</a>
            </li>
            <li class="listItem">
                <a class="linkPage" href="/tv">Tv</a>
            </li>
            <li class="listItem">
                <a class="linkPage" href="/games">Games</a>
            </li>
            <li class="listItem">
                <a class="linkPage" href="/collectibles">Collectibles</a>
            </li>
            <li class="listItem">
                <a class="linkPage" href="/videos">Videos</a>
            </li>
            <li class="listItem">
                <a class="linkPage" href="/fans">Fans</a>
            </li>
            <li class="listItem">
                <a class="linkPage" href="/news">News</a>
            </li>
            <li class="listItem">
                <a class="linkPage" href="/shop">Shop</a>
            </li>
        </ul>
    </div>
</div>