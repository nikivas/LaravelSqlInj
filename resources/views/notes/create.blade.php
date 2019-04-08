@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="card" style="width: 75%">
            <div class="card-header" style="text-align: center;">Новое задание</div>
            <div class="card-body">
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                
                <form method="POST" action="{{ route('notes.store') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="taskAuthor">Текст заметки</label>
                        <input type="text" class="form-control{{ $errors->has('author') ? ' is-invalid' : '' }}" id="text" placeholder="Автор" name="text"> 
                        @if ($errors->has('author'))
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $errors->first('author') }}</strong>
                            </span>
                        @endif
                    </div>
                    

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                          <button type="submit" class="btn btn-primary">Создать заметку</button>
                        </div>
                    </div>
                </form>

            </div>
        </div>
        
    </div>
</div>
@endsection
