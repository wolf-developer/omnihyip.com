@foreach ($menus as $menu)
        <li><a href="{{trans_url($menu->url)}}" >{{$menu->name}}</a></li>
    @if ($menu->hasChildren())
        @include('menu::menu.sub.footer', array('menus' => $menu->getChildren()))
    @endif
@endforeach
