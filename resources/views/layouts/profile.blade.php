<div class="menu-item px-5">
    <div class="mb-5">
        <div class="d-grid">
            <ul class="nav nav-tabs flex-nowrap text-nowrap row">
              
                <li class="nav-item col-2" style="width: 10%;">
                    <a class="nav-link btn btn-color-gray-600 btn-active-color-primary rounded-bottom-0" href="{{ route('logout') }}" onclick="event.preventDefault();  document.getElementById('logout-form').submit();">
                        <i class="" data-feather="power"></i> <small>Logout</small> </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</div>