@extends('layouts.app')
@section('head')
    <title>Show</title>
    @vite(['resources/scss/app.scss'])
    @vite(['resources/scss/show.scss'])
    {{-- FONT POPPINS --}}
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    {{-- ------------ --}}
@endsection

@section('content')
    <div class="card pt-3 w-75 mx-auto p-4 mt-4 border-0 shadow">
        <div class="d-flex justify-content-start align-items-center">
            <a class="img-container my-2" >
                <img src="{{ mix($member->img_path) }}" class=" rounded-circle " alt="">
            </a>
            <div class="card-body text-center">
                <h4>{{ $member->name }}</h4>
                <strong> {{ $member->nickname }} </strong>
                <br>
                <i>Full Stack Web Developer</i>
                <div class="d-flex justify-content-center py-3 align-items-center ">
                    <i class="fa-solid fa-phone"></i>
                    <span>{{ $member->telephone }}</span>
                </div>
                <div class="d-flex justify-content-center py-3 align-items-center ">
                    <i class="fa-solid fa-envelope"></i>
                    <span>{{ $member->email }}</span>
                </div>
                <p class="card-text"> {{ $member->description }}</p>
            </div>
        </div>
    </div>
    <div class="accordion w-75 mx-auto mt-4" id="accordionExample">
        @foreach ($singleProject as $index => $project)
            <div class="accordion-item">
                <h2 class="accordion-header" id="heading{{ $index + 1 }}">
                    <button class="accordion-button{{ $index == 0 ? '': ' collapsed'}}" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $index + 1 }}" aria-expanded="{{ $index == 0 ? 'true': 'false'}}" aria-controls="collapse{{ $index + 1 }}">
                       <h3 ><strong>{{ $project-> nome_progetto}}</strong></h3>
                    </button>
                </h2>
                <div id="collapse{{ $index + 1 }}" class="accordion-collapse collapse{{ $index == 0 ? ' show': '' }}" aria-labelledby="heading{{ $index + 1 }}" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <div class="d-flex p-3 justify-content-between">
                            <div class="d-flex flex-column width_paragrafo">
                                <p  >{{ $project->desc_progetto }}</p>
                                
                                    <div class="mt-auto  d-flex flex-column align-items-center auto_width">
                                        <h2 class="poppins-bold ">{{ $project->counter_vis }}&plus;</h2>
                                        <h6 class="poppins-thin">Visibilit&agrave;</h6>
                                    </div>
                                
                            </div>
                            <img src="{{ $project->path_progetto }}"style='width: 25rem; height: 15rem;' class="rounded-2 on_mouse"
                                alt="">
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
  
@endsection
