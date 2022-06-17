<nav class="navbar navbar-expand-md navbar-light bg-light">
    <div class="container">
        <a href="{{ route('home') }}" class="navbar-brand">
            {{ config('app.name') }}
        </a>

        <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbar-collapse" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbar-collapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a href="{{ route('home') }}" class="nav-link {{ active_link('home') }}" aria-current="page">
                        Главная
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('program') }}" class="nav-link {{ active_link('program') }}" aria-current="page">
                        Программа
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('contacts') }}" class="nav-link {{ active_link('contacts') }}" aria-current="page">
                        Контакты
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('sponsor') }}" class="nav-link {{ active_link('sponsor') }}" aria-current="page">
                        Спонсоры
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('thesis') }}" class="nav-link {{ active_link('thesis') }}" aria-current="page">
                        Тезисы
                    </a>
                </li>
            </ul>

            <ul class="navbar-nav ms-auto mb-2 mb-md-0">
                <?php if (Auth::check()) : ?>
                    <li class="nav-item">
                        <a href="{{ route('logout') }}" class="nav-link" aria-current="page">
                            {{ __('Выход') }} (<?= Auth::user()->name ?>)
                        </a>
                    </li>
                <?php else : ?>
                    <li class="nav-item">
                        <a href="{{ route('register') }}" class="nav-link {{ active_link('register') }}" aria-current="page">
                            {{ __('Регистрация') }}
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="{{ route('login') }}" class="nav-link {{ active_link('login') }}" aria-current="page">
                            {{ __('Вход') }}
                        </a>
                    </li>
                <?php endif; ?>
            </ul>
        </div>
    </div>
</nav>
