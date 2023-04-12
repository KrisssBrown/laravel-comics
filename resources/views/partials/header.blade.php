<style>
    .container {
    margin: 0 auto;
    display: flex;
    justify-content: space-between;
}

a {

    height: 100%;
    display: flex;
    align-items: center;

    &:hover {
        border-bottom: 3px solid #0282F9;
        color: #0282F9;
    }
}



.nav-bar {
    display: flex;
    align-items: center;
    gap: 15px;

    li {
        font-size: 13px;
        height: 100%;
        // display: flex;
        // align-items: center;
    }
}

.logo {
    width: 60px;
    padding: 15px 0;
}
</style>


<div class="main-container container">
    <img src="/dc-logo.png" class="logo">

    <ul class="nav-bar">
        <li>
            <a href="#">Characters</a>
        </li>
        <li>
            <a href="#">Comics</a>
        </li>
        <li>
            <a href="#">Movies</a>
        </li>
        <li>
            <a href="#">TV</a>
        </li>
        <li>
            <a href="#">Games</a>
        </li>
        <li>
            <a href="#">Collectibles</a>
        </li>
        <li>
            <a href="#">Videos</a>
        </li>
        <li>
            <a href="#">Fans</a>
        </li>
        <li>
            <a href="#">News</a>
        </li>
        <li>
            <a href="#">Shop</a>
        </li>
    </ul>
</div>
