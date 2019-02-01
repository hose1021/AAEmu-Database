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
                    @foreach($items as $item)
                    <tr>
                        <td>{{ $item['id'] }}</td>
                        <td><img src="../icons/<?=substr_replace($item['filename'], '', -4)?>.png" alt=""></td>
                        <td>{{ $item['ru'] }}</td>
                        <td>{{ $item['en_us']}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</main>
@stop
@section('javascripts')
<script>
    $(document).ready(function() {
        $('#example').DataTable();
    });
</script>
@endsection