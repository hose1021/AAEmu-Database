@extends('layout.main')

@section('title') Items | AAWeb @stop

@section('content')
    <main role="main">
        <div class="container">
            <div class="row" style="margin: 0">
                <nav class="navbar navbar-expand-lg navbar-light bg-light" style="width: 100%;">
                    <div class="collapse navbar-collapse">
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" tabindex="-1" href="#">
                                    Weapons
                                </a>
                                <ul class="dropdown-menu">
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" tabindex="-1" href="#">
                                            1H Weapon
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" id="69">Dagger</a></li>
                                            <li><a class="dropdown-item" id="70">Sword</a></li>
                                            <li><a class="dropdown-item" id="72">Katana</a></li>
                                            <li><a class="dropdown-item" id="73">Axe</a></li>
                                            <li><a class="dropdown-item" id="74">Club</a></li>
                                            <li><a class="dropdown-item" id="75">Scepter</a></li>
                                            <li><a class="dropdown-item" id="76">Shortspear</a></li>
                                        </ul>
                                    </li>
                                    <li class="dropdown-submenu">
                                        <a class="dropdown-item" tabindex="-1" href="#">
                                            2H Weapon
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item" tabindex="-1" id="127">Greatsword</a></li>
                                            <li><a class="dropdown-item" id="128">Nodachi</a></li>
                                            <li><a class="dropdown-item" id="129">Greataxe</a></li>
                                            <li><a class="dropdown-item" id="130">Greatclub</a></li>
                                            <li><a class="dropdown-item" id="131">Staff</a></li>
                                            <li><a class="dropdown-item" id="132">Longspear</a></li>
                                        </ul>
                                    </li>
                                    {{--<li class="dropdown-submenu">--}}
                                        {{--<a class="dropdown-item" tabindex="-1" href="#">--}}
                                            {{--Instruments--}}
                                        {{--</a>--}}
                                        {{--<ul class="dropdown-menu">--}}
                                            {{--<li><a class="dropdown-item" tabindex="-1" href="#">Lute</a></li>--}}
                                            {{--<li><a class="dropdown-item" href="#">Flute</a></li>--}}
                                            {{--<li><a class="dropdown-item" href="#">Drum</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li><a class="dropdown-item" href="#">Bow</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item dropdown">--}}
                                {{--<a class="nav-link dropdown-toggle" tabindex="-1" href="#">--}}
                                    {{--Armor--}}
                                {{--</a>--}}
                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li class="dropdown-submenu">--}}
                                        {{--<a class="dropdown-item" tabindex="-1" href="#">--}}
                                            {{--Cloth--}}
                                        {{--</a>--}}
                                        {{--<ul class="dropdown-menu">--}}
                                            {{--<li><a class="dropdown-item" tabindex="-1" href="#">Head</a></li>--}}
                                            {{--<li><a class="dropdown-item" href="#">Chest</a></li>--}}
                                            {{--<li><a class="dropdown-item" href="#">Waist</a></li>--}}
                                            {{--<li><a class="dropdown-item" href="#">Wrists</a></li>--}}
                                            {{--<li><a class="dropdown-item" href="#">Hands</a></li>--}}
                                            {{--<li><a class="dropdown-item" href="#">Legs</a></li>--}}
                                            {{--<li><a class="dropdown-item" href="#">Feet</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="dropdown-submenu">--}}
                                        {{--<a class="dropdown-item" tabindex="-1" href="#">--}}
                                            {{--Leather--}}
                                        {{--</a>--}}
                                        {{--<ul class="dropdown-menu">--}}
                                            {{--<li><a class="dropdown-item" tabindex="-1" href="#">Head</a></li>--}}
                                            {{--<li><a class="dropdown-item" href="#">Chest</a></li>--}}
                                            {{--<li><a class="dropdown-item" href="#">Waist</a></li>--}}
                                            {{--<li><a class="dropdown-item" href="#">Wrists</a></li>--}}
                                            {{--<li><a class="dropdown-item" href="#">Hands</a></li>--}}
                                            {{--<li><a class="dropdown-item" href="#">Legs</a></li>--}}
                                            {{--<li><a class="dropdown-item" href="#">Feet</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li class="dropdown-submenu">--}}
                                        {{--<a class="dropdown-item" tabindex="-1" href="#">--}}
                                            {{--Plate--}}
                                        {{--</a>--}}
                                        {{--<ul class="dropdown-menu">--}}
                                            {{--<li><a class="dropdown-item" tabindex="-1" href="#">Head</a></li>--}}
                                            {{--<li><a class="dropdown-item" href="#">Chest</a></li>--}}
                                            {{--<li><a class="dropdown-item" href="#">Waist</a></li>--}}
                                            {{--<li><a class="dropdown-item" href="#">Wrists</a></li>--}}
                                            {{--<li><a class="dropdown-item" href="#">Hands</a></li>--}}
                                            {{--<li><a class="dropdown-item" href="#">Legs</a></li>--}}
                                            {{--<li><a class="dropdown-item" href="#">Feet</a></li>--}}
                                        {{--</ul>--}}
                                    {{--</li>--}}
                                    {{--<li><a class="dropdown-item" href="#">Cloak</a></li>--}}
                                    {{--<li><a class="dropdown-item" href="#">Shield</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                            {{--<li class="nav-item dropdown">--}}
                                {{--<a class="nav-link dropdown-toggle" tabindex="-1" href="#">--}}
                                    {{--Accessories--}}
                                {{--</a>--}}
                                {{--<ul class="dropdown-menu">--}}
                                    {{--<li><a class="dropdown-item" tabindex="-1" href="#">Earrings</a></li>--}}
                                    {{--<li><a class="dropdown-item" href="#">Necklace</a></li>--}}
                                    {{--<li><a class="dropdown-item" href="#">Ring</a></li>--}}
                                {{--</ul>--}}
                            {{--</li>--}}
                        </ul>
                    </div>
                </nav>
                <table id="example" class="display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Item ID</th>
                        <th>Icon</th>
                        <th>Название</th>
                        <th>Name</th>
                        <th>Item lvl</th>
                        <th>Price</th>
                        <th>Honor</th>
                    </tr>
                    </thead>
                    <tbody>

                    </tbody>
                </table>
            </div>
        </div>
    </main>
@stop

@section('javascripts')
    <script type="text/javascript">
        var oO =
            {
                connect: function (oElem, sEvType, fn, bCapture) {
                    return document.addEventListener ?
                        oElem.addEventListener(sEvType, fn, bCapture) :
                        oElem.attachEvent ?
                            oElem.attachEvent('on' + sEvType, fn) :
                            false;
                },

                cancelClick: function (e) {
                    if (e && e.stopPropagation && e.preventDefault) {
                        e.stopPropagation();
                        e.preventDefault();
                    } else if (e && window.event) {
                        window.event.cancelBubble = true;
                        window.event.returnValue = false;
                    }

                    return false;
                },

                quelId: function (e) {

                    e = e || window.event;
                    var el = e.target || e.srcElement;
                    if (el.nodeType === 3) el = el.parentNode;
                    if (el.id) {

                        var link = "items/category/" + el.id;
                        getItemsByCategory(link);
                        //return el.id;
                        // Empèche l'action normale du lien
                        if (el.nodeName.toLowerCase() === 'a') oO.cancelClick(e);
                    }
                }
            };
        oO.connect(document, 'click', oO.quelId, false);

        function getItemsByCategory(link) {
            $('#example').DataTable({
                "destroy": true,
                "ajax": {
                    url: link,
                    type: "POST",
                    dataSrc: 'data',
                },
                columns: [
                    {
                        data: 'id',
                        'defaultContent': "<i>error</i>"
                    },
                    {
                        data: 'filename',
                        defaultContent: "<img src='/img/empty.png\' />",
                    },
                    {
                        data: 'ru',
                        'defaultContent': "<i>error</i>"
                    },
                    {
                        data: 'en_us',
                        'defaultContent': "<i>error</i>"
                    },
                    {
                        data:'level',
                        'defaultContent': "<i>error</i>"
                    },
                    {
                        data:'price',
                        'defaultContent': "<i>error</i>"
                    },
                    {
                        data:'honor_price',
                        'defaultContent': "<i>error</i>"
                    }
                ],
                columnDefs: [{
                    targets: 1,
                    render: function (data, type, row) {
                        if (data !== null) {
                            return '<img src="{{ asset('img/') }}' + data.slice(0, -4) + '.png" />';
                        } else
                            return null;
                    }
                }]
            });
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
        getItemsByCategory("/items/all");
    </script>
@endsection
