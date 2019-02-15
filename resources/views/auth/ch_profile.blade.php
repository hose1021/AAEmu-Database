@extends('layout.main')

@section('title')
{{Auth::user()->username}} | AAweb
@endsection

@section('content')
@php $m=0; @endphp
<div class="container container-bottom">
    <div class="row fill">
        <div class="col-md-8 user-profile">
            <div class="item-list">
                @for($i=0;$i<count($user_info);$i++)
                @if( array_key_exists("picture",$user_info[$i]) && $user_info[$i]['slot_type'] == 'Inventory')
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
                @php $m++; @endphp
                @endif
                @endfor
                @for($t=0;$t<(100-$m);$t++)
                <img src="{{ asset('img/') }}/profile/item.png" width="90%" alt="">
                @endfor
            </div>
                @if(count($owner[2])==3)
                    <div class="money">
                        @for ($m=0; $m < count($owner[2]); $m++)
                            <span class="money-value">{{$owner[2][$m]}}</span>
                        @endfor
                    </div>
                @elseif(count($owner[2])==2)
                    <div class="two">
                        @for ($m=0; $m < count($owner[2]); $m++)
                            <span class="money-value">{{$owner[2][$m]}}</span>
                        @endfor
                    </div>
                @elseif(count($owner[2])==1)
                    <div class="one">
                        @for ($m=0; $m < count($owner[2]); $m++)
                            <span class="money-value">{{$owner[2][$m]}}</span>
                        @endfor
                    </div>
                @endif
            <img class="img-bg" src="/img/profile/image.png" alt="">
        </div>
    </div>
</div>
@endsection
