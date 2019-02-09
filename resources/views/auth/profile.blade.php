@extends('layout.main')

@section('title')
{{Auth::user()->username}} | AAweb
@endsection

@section('content')
<div class="container container-bottom">
<div class="center">
    <h1>Select your character</h1>
    <br>
    @if ($characters != NULL)
    @for ($i = 0; $i < count($characters); $i++)
    <div class="span12 centered-text">
            <a href="{{ route('character', ['id' => $characters[$i]['id']]) }}">
            <div class="content">
                <div class="name">
                    <ul class="list">
                        <li>
                            <h1>{{ $characters[$i]['name'] }}</h1>
                        </li>
                        <li>
                            <h6 class="text-muted">Level: {{ $characters[$i]['level'] }}</h6>
                        </li>
                    </ul>
                </div>
                @if ($characters[$i]['race'] == 1 && $characters[$i]['gender'] == 1)
                    <img src="{{ asset('img/profile/characters/race_1_1.png') }}" class="character_icon" alt="">
                @elseif ($characters[$i]['race'] == 1 && $characters[$i]['gender'] == 2)
                    <img src="{{ asset('img/profile/characters/race_1_2.png') }}" class="character_icon" alt="">
                @elseif ($characters[$i]['race'] == 2 && $characters[$i]['gender'] == 1)
                    <img src="{{ asset('img/profile/characters/race_2_1.png') }}" class="character_icon" alt="">
                @elseif ($characters[$i]['race'] == 2 && $characters[$i]['gender'] == 2)
                    <img src="{{ asset('img/profile/characters/race_2_2.png') }}" class="character_icon" alt="">
                @elseif ($characters[$i]['race'] == 4 && $characters[$i]['gender'] == 1)
                    <img src="{{ asset('img/profile/characters/race_4_1.png') }}" class="character_icon" alt="">
                @elseif ($characters[$i]['race'] == 4 && $characters[$i]['gender'] == 2)
                    <img src="{{ asset('img/profile/characters/race_4_2.png') }}" class="character_icon" alt="">
                @elseif ($characters[$i]['race'] == 5 && $characters[$i]['gender'] == 1)
                    <img src="{{ asset('img/profile/characters/race_5_1.png') }}" class="character_icon" alt="">
                @elseif ($characters[$i]['race'] == 5 && $characters[$i]['gender'] == 2)
                    <img src="{{ asset('img/profile/characters/race_5_2.png') }}" class="character_icon" alt="">
                @endif
            </div>
            <img src="{{ asset('img/profile/image 52.png') }}" class="select_bg" alt="">
            </a>
        </div>
    @endfor
    @else
    <div class="span12 centered-text">
        <h3 style="color: red;">Please create character</h3>
    </div>
    @endif
</div>

</div>
@endsection
