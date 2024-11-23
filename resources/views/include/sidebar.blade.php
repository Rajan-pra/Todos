<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="{{ route('home') }}">
            <img src="{{asset('assets/images/todo.png')}}" class="header-brand-img desktop-lgo" alt="To Do">
            <img src="{{asset('assets/images/img1.jpeg')}}" class="header-brand-img mobile-logo"
                alt="To Do">
        </a>
    </div>
    <ul class="side-menu app-sidebar3">
        <li class="side-item side-item-category">Main</li>
        <li class="slide">
            <a class="side-menu__item" href="{{ route('home') }}">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24"
                    height="24" viewBox="0 0 24 24">
                    <path
                        d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z" />
                </svg>
                <span class="side-menu__label">Dashboard</span></a>
        </li>

        

        <li class="slide">
            <a class="side-menu__item" href="{{route('todos')}}">
                <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" width="24"
                    height="24" viewBox="0 0 24 24">
                    <path
                        d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z" />
                </svg>
                <span class="side-menu__label">To Do List</span></a>
        </li>
        
    </ul>
    
</aside>