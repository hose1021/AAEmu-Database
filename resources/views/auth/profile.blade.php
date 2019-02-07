@extends('layout.main')

@section('title')
{{Auth::user()->username}} | AAweb
@endsection

@section('content')
<div class="container container-bottom">
    <div class="row justify-content-center">
        @for ($k = 0; $k < count($owner); $k++)
        <div class="col-md-12" style="margin-bottom: 3%;">
            <div class="card">
                <div class="card d-flex justify-content-between">
                    <div class="card-header">
                        Equipment {{$owner[$k]['name']}}
                        {{-- <span class="badge badge-secondary badge-pill">{{ $user_info[0]['money']}}</span> --}}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                        @for($i=0;$i<count($user_info);$i++)
                        @if( array_key_exists("picture",$user_info[$i]) && $user_info[$i]['slot_type'] == 'Equipment' && $user_info[$i]['owner'] == $owner[$k]['id'])
                        <div class="poster">
                            <img class="items" src="{{ asset('img/') }}{{ $user_info[$i]['picture'] }}">
                            <div class="bottom-right">@if($user_info[$i]['count']>1){{ $user_info[$i]['count'] }}@endif</div>
                            <div class="descr">
                                <h6>{{ $user_info[$i]['name_ru'] }}</h6>
                                <h6>{{ $user_info[$i]['name_en'] }}</h6>
                                {{ $user_info[$i]['description'] }}
                                Количество: {{ $user_info[$i]['count'] }}
                            </div>
                        </div>
                        @endif
                        @endfor
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="col-md-12" style="margin-bottom: 3%;">
            <div class="card">
                <div class="card d-flex justify-content-between">
                    <div class="card-header">
                        Inventory
                        {{-- <span class="badge badge-secondary badge-pill">{{ $user_info[0]['money']}}</span> --}}
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                        @for($i=0;$i<count($user_info);$i++)
                        @if( array_key_exists("picture",$user_info[$i]) && $user_info[$i]['slot_type'] == 'Inventory' && $user_info[$i]['owner'] == $owner[$k]['id'])
                        <div class="poster">
                            <img class="items" src="{{ asset('img/') }}{{ $user_info[$i]['picture'] }}">
                            <div class="bottom-right">@if($user_info[$i]['count']>1){{ $user_info[$i]['count'] }}@endif</div>
                            <div class="descr">
                                <h6>{{ $user_info[$i]['name_ru'] }}</h6>
                                <h6>{{ $user_info[$i]['name_en'] }}</h6>
                                {{ $user_info[$i]['description'] }}
                                Количество: {{ $user_info[$i]['count'] }}
                            </div>
                        </div>
                        @endif
                        @endfor
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        @endfor
    </div>
</div>

@endsection
