@extends('layout.main')

@section('title', 'Npcs all | AAWeb')

@section('content')
    <main role="main">
        <div class="container container-bottom">
            <div class="row" style="margin: 0">
                <table id="npcs-table" class="display" style="width:100%">
                    <thead>
                    <tr class="table-secondary">
                        <th>ID</th>
                        <th>Название</th>
                        <th>Name</th>
                        <th>Level</th>
                        <th>Grade ID</th>
                        <th>Trader</th>
                        <th>Honor points</th>
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
            $('#npcs-table').DataTable({
                ajax: {url:"{!! asset('db/npcs.json') !!}",dataSrc:""},
                columns: [
                    { data: 'id', name: 'id' },
                    { data: 'ru', name: 'ru' },
                    { data: 'en_us', name: 'en_us' },
                    { data: 'level', name: 'level' },
                    { data: 'npc_grade_id', name: 'npc_grade_id' },
                    { data: 'trader', name: 'trader' },
                    { data: 'honor_point', name: 'honor_point' },
                ],
            });
        });
    </script>
@endsection
