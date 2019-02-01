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
                    <td>{{$npc['ru']}}</td>
                    <td>{{$npc['level']}}</td>
                    <td>{{$npc['npc_grade_id']}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection

@section('javascripts')
<script>
    timeago().render(document.querySelectorAll('.timeago'), 'en')
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endsection
