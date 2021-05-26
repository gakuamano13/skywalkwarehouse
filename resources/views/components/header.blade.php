<nav class="navbar navbar-light bg-light">
    <div class="container d-flex flex-row justify-content-between">
            <div class="col-6">
                <a class="navbar-brand" href="{{ route('product.index') }}">{{ config('app.name', 'Laravel') }}</a>
            </div>
            <div class="col-6">
                <ul class="d-flex flex-row justify-content-end navbar-nav mr-5 mt-2">
                    <!-- Authentication Links -->
                    @guest
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{ route('auth.register.index') }}"><label>新規登録</label></a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{ route('auth.login.index') }}"><label>ログイン</label></a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{ route('login') }}"><i class="far fa-heart"></i></a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="nav-link" href="{{ route('login') }}"><i class="fas fa-shopping-cart"></i></a>
                    </li>
                    @else
                    <li class="nav-item mr-5">
                        {{-- <a class="nav-link" href="{{ route('mypage') }}"> --}}
                            <i class="fas fa-user mr-1"></i>
                            <label>マイページ</label>
                        </a>
                    </li>
                    <li class="nav-item mr-5">
                        {{-- <a class="nav-link" href="{{ route('mypage.favorite') }}"> --}}
                            <i class="far fa-heart"></i>
                        </a>
                    </li>
                    <li class="nav-item mr-5">
                        <a class="fas fa-shopping-cart" href="{{ route('cart.index') }}"></a>
                    </li>
                    @endguest
                </ul>
            </div>
        </div>


    </div>
</nav>
