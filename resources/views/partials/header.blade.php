<nav>
    <div class="navbarcustom">
        <a class="{{ Request::route()->getName() === 'comics.index' ? 'active' : '' }}" href=" {{ route('comics.index') }} ">COMICS</a>

        <a class="{{ Request::route()->getName() === 'shop' ? 'active' : '' }}" href=" {{ url('/shop') }} ">SHOP</a>

        <a class="{{ Request::route()->getName() === 'home' ? 'active' : '' }}"
            href="{{ url('/') }}">HOME</a>

        <a class="{{ Request::route()->getName() === 'who' ? 'active' : '' }}" href=" {{ url('/who') }} ">WHO WE ARE</a>

        <a class="{{ Request::route()->getName() === 'support' ? 'active' : '' }}" href=" {{ url('/support') }} ">SUPPORT</a>
    </div>

</nav>