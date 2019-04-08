@extends('layouts.app')

@section('content')
<div class="container task-wrap">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header" style="text-align: center;">Задания</div>
            <div class="card-body">
                
                <div class="task-container">
                    @foreach($notes as $note)
                        <a href="/notes/{{$note->id}}"> 
                            {{ $note->text  }} 
                        </a>
                    @endforeach
                </div>  
            </div>
        </div>
        
    </div>
</div>
@endsection
