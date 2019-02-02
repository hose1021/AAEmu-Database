@extends('layout.main')

@section('title') Items | AAWeb @stop

@section('content')
    <main role="main">
        <div class="container">
            <div class="row" style="margin: 0">
                <table id="example" class="display" style="width:100%">
                    <thead>
                    <tr>
                        <th>Item ID</th>
                        <th>Icon</th>
                        <th>Название</th>
                        <th>Name</th>
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
                        defaultContent: "<i>error</i>",
                    },
                    {
                        data: 'ru',
                        'defaultContent': "<i>error</i>"
                    },
                    {
                        data: 'en_us',
                        'defaultContent': "<i>error</i>"
                    }
                ],
                columnDefs: [{
                    targets: 1,
                    render: function (data, type, row) {
                        if (data !== null) {
                            return '<img src="/img/icons/' + data.slice(0, -4) + '.png" />';
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
