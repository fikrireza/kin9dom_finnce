<!-- top navigation -->
<div class="top_nav">
  <div class="nav_menu">
    <nav class="" role="navigation">
      <div class="nav toggle">
        <a id="menu_toggle"><i class="fa fa-bars"></i></a>
      </div>

      <ul class="nav navbar-nav navbar-right">
        <li class="">
          <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
            <img src="{{ asset(Auth::user()->avatar != '' ? Auth::user()->avatar : 'backend/images/user.png') }}" alt="">Welcome, {{ Auth::user()->name }}
            <span class=" fa fa-angle-down"></span>
          </a>
          <ul class="dropdown-menu dropdown-usermenu pull-right">
            <li><a href="{{ route('home') }}"> Go to Website</a></li>
            <li><a href="{{ route('admin.user.edit', ['id' => Auth::id()]) }}"> Profile</a></li>
            <li><a href="{{ route('admin.logout') }}"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
          </ul>
        </li>
        @if ($getNotifInbox)
        <li role="presentation" class="dropdown">
          <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
            <i class="fa fa-envelope-o"></i>
            @if($getNotifInbox->count())<span class="badge bg-green">{{ $getNotifInbox->count() }}</span>@endif
          </a>
          <ul id="menu1" class="dropdown-menu list-unstyled msg_list" role="menu">
            @foreach ($getNotifInbox as $key)
            <li>
              <a href="{{ route('admin.inbox.view', ['id' => $key->id]) }}">
                <span>
                  <span>{{ $key->name }}</span>
                  @php
                  Carbon\Carbon::setLocale('en');
                  @endphp
                  <span class="time">{{ $key->created_at->diffForHumans() }}</span>
                </span>
                <span class="message">
                  {{ $key->messages }}
                </span>
              </a>
            </li>
            @endforeach
            <li>
              <div class="text-center">
                <a href="{{ route('admin.inbox') }}">
                  <strong>View All</strong>
                  <i class="fa fa-angle-right"></i>
                </a>
              </div>
            </li>
          </ul>
        </li>
        @endif
      </ul>


    </nav>
  </div>
</div>
<!-- /top navigation -->
