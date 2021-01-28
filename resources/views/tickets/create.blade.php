@extends('master')
@section('title', 'Contact')

@section('content')
    <div class="container col-md-8 col-md-offset-2">
        <div class="well well bs-component">
            <form class="form-horizontal" method="post">
                @foreach ($errors->all() as $error)
                <p class="alert alert-danger">{{ $error }}</p>
                @endforeach

                @if (session('status'))
                    <div class = "alert alert-success">
                        {{ session ('status') }}
                    </div>
                @endif

                <input type="hidden" name="_token" value="{!! csrf_token() !!}">
                <fieldset>
                    <legend><h2>Solicitar un nuevo Turno<h2></legend>
                    <div class="form-group">
                        <label for="title" class="col-lg-2 control-label">Asunto</label>
                        <div class="col-lg-10">
                            <input type="text" class="form-control" id="title" placeholder="Escribe aqui" name="title">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="content" class="col-lg-2 control-label">Prioridad</label>
                        <div class="col-lg-10">
                            <textarea class="form-control" rows="1" id="content" name="content"></textarea>
                            
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="col-lg-10 col-lg-offset-2">
                            <button class="btn btn-default">Cancelar</button>
                            <button type="submit" class="btn btn-primary">Enviar</button>
                        </div>
                    </div>
                </fieldset>
            </form>
        </div>
    </div>
@endsection