@extends('layout.main')

@section('title', 'Npcs all | AAWeb')

@section('content')
    <div class="row" style="margin: 0">
        <table id="example" class="display" style="width:100%">
            <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Level</th>
                <th>Grade</th>
            </tr>
            </thead>
            <tbody>
            @foreach($npcs as $npc)
                <tr>
                    <td>{{ $npc['id'] }}</td>
                    <td>{{$npc['en_us']}}</td>
                    <td>{{$npc['level']}}</td>
                    <td>{{$npc['npc_grade_id']}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('javascripts')
<<<<<<< HEAD:resources/views/pages/npcs/all.blade.php
<script>
    timeago().render(document.querySelectorAll('.timeago'), 'en')
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
=======
    <script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
    </script>
>>>>>>> af35c058d2472c69c1d3a2304b59f40d525b8129:resources/views/npcs/all.blade.php
@endsection
