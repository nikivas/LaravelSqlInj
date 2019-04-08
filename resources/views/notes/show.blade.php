@extends('layouts.app')

@section('content')
<div class="container task-wrap">
    <div class="row justify-content-center">
        <div class="card">
            <div class="card-header" style="text-align: center;">Задания</div>
            <div class="card-body">
                
                <div class="task-container">
                    <br>
                    @foreach($notes as $note)
                        {{ $note->text }}
                    @endforeach
                    <br>
                </div>  
            </div>
        </div>
        
    </div>
</div>
@endsection
