<nav>
    <ul>
        <li>
            <a href="{{ route('home.index') }}">Home page</a>
        </li>
        <li>
            <a href="{{ route('portfolio.index') }}">Portfolio</a>
        </li>
        <li>
            <a href="{{ route('gallery.index') }}">Gallery</a>
        </li>
        <li>
            <a href="{{ route('blog.index') }}">Blog</a>
        </li>
        <li>
            <a href="{{ route('prodotti.index') }}">Prodotti</a>
        </li>
        <li>
            <a href="{{ route('contatti.index') }}">Contatti</a>
        </li>
        <li>
            <a href="/login">Accedi</a>
        </li>
        <li>
            <a href="/register">Registrati</a>
        </li>
        @if (auth()->check())
            <li>
                <form action="/logout" method="post">
                    @csrf
                    <button type="submit" class="btn btn-primary">Logout</button>
                </form>
            </li>
        @endif
    </ul>
</nav>