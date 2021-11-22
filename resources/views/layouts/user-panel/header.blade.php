<div class="d-flex align-items-center mt-5">
    <div class="d-flex flex-column">
        <a href="#" class="font-weight-bold font-size-h5 text-dark-75 text-hover-primary">
            {{ Auth::user()->name }}
        </a>
        <div class="text-muted mt-1">
            {{ Auth::user()->roles->pluck('name')->implode(' ') }}
        </div>
        <div class="navi mt-2">
            <a href="#" class="navi-item">
                <span class="navi-link p-0 pb-2">
                    <span class="navi-icon mr-1">
                        <span class="svg-icon svg-icon-lg svg-icon-primary">
                            <i class="fa fa-envelope" aria-hidden="true"></i>
                        </span>
                    </span>
                    <span class="navi-text text-muted text-hover-primary">
                        {{ Auth::user()->email }}
                    </span>
                </span>
            </a>
            <a href="{{ route('logout') }}" class="btn btn-sm btn-light-primary font-weight-bolder py-2 px-5"
                onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        </div>
    </div>
</div>
