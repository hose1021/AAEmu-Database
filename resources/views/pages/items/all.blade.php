@extends('layout.main')

@section('title') Items | AAWeb @stop

@section('content')
    <main role="main">
        <div class="container container-bottom">
            <div class="row" style="margin: 0">
                <table id="items-table" class="display" style="width:100%">
                    <thead>
                    <tr class="table-secondary">
                        <th>ID</th>
                        <th>Icon</th>
                        <th>Название</th>
                        <th>Name</th>
                        <th>Item lvl</th>
                        <th>Price</th>
                        <th>Honor</th>
                    </tr>
                    </thead>
                </table>
            </div>
        </div>
    </main>
@stop

@section('javascripts')
    <script type="text/javascript">
        $(function() {
            $('#items-table').DataTable({
                ajax: {url:"{!! asset('db/items.json') !!}",dataSrc:""},
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'filename', name: 'filename' },
                    { data: 'ru', name: 'ru' },
                    { data: 'en_us', name: 'en_us' },
                    { data: 'level', name: 'level' },
                    { data: 'price', name: 'price' },
                    { data: 'honor_price', name: 'honor_price' },
                ],
                columnDefs: [{
                    targets: 1,
                    render: function (data, type, row) {
                        if (data !== null) {
                            return '<img src="{{ asset('img/icons') }}/' + data.slice(0, -4) + '.png" />';
                        } else
                            return null;
                    }
                }]
            });
        });
    </script>
@endsection