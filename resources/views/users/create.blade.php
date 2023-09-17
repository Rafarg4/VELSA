@extends('layouts.app')

@section('content')
    <section class="content-header">
      
    </section>

    <div class="content px-3" style="font-size: 12px;">

        @include('adminlte-templates::common.errors')

        <div class="card">
            

            {!! Form::open(['route' => 'users.store']) !!}

            <div class="card-body" style="font-size: 12px;">

                <div class="row">
                    @include('users.fields')
                </div>

            </div>

            <div class="card-footer">
                {!! Form::submit('Guardar', ['class' => 'btn btn-primary btn-sm']) !!}
                <a href="{{ route('users.index') }}" class="btn btn-default btn-sm">Cancelar</a>
            </div>

            {!! Form::close() !!}

        </div>
    </div>
@endsection
