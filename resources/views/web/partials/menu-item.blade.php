@if ($item['submenu'] == [])
    <li>
        <a href="{{ url($item['name']) }}" class="nav-link dropdown-item">{{ $item['name'] }}</a>
    </li>
@else
    <li class="dropdown">
        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">{{ $item['name']}}<span class="caret"></span></a>
        <ul class="dropdown-menu sub-menu">
            @foreach ($item['submenu'] as $submenu)
                @if ($submenu['submenu'] == [])
                    <li><a href="{{ url('menu', ['id' => $submenu['id'], 'slug' => $submenu['slug']])}}" class="nav-link dropdown-item">{{ $submenu['name']}}</a></li>
                @else
                    @include('web.partials.menu-item', ['item' => $submenu])
                @endif
                
            @endforeach
        </ul>
    </li>
@endif