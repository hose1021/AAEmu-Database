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
        $(document).ready(function(){
            $('#example').DataTable({
                "ajax": {
                    url: "{{route('post_all_items')}}",
                    type: "POST",
                    dataSrc : 'data',
                },
                columns: [
                    {
                        data: 'id',
                        'defaultContent' : "<i>error</i>"
                    },
                    {
                        data: 'filename',
                        defaultContent : "<i>error</i>",
                    },
                    {
                        data: 'ru',
                        'defaultContent' : "<i>error</i>"
                    },
                    {
                        data: 'en_us',
                        'defaultContent' : "<i>error</i>"
                    }
                ],
                columnDefs: [ {
                    targets: 1,
                    render: function ( data, type, row ) {
                        if(data !== null){
                            return '<img src="/img/icons/'+data.slice(0, -4)+'.png" />';
                        }
                        else
                            return null;
                    }
                } ]
            });





        });
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });
    </script>
@endsection
