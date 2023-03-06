@extends('layouts.app')

@section('content')
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Seguro detalle</h1>
                </div>
                <div class="col-sm-6">
                    <a class="btn btn-default float-right"
                       href="{{ route('seguros.index') }}">
                        Volver
                    </a>
                     <div class="col-sm-12">
                    <a class="btn btn-default float-right"
                      button type="button" class="btn btn-primary"  onclick="javascript:window.print()">Imprimir</button>
                    </a>
                    
                </div>
            </div>
        </div>
    </section>

    <div class="content px-3">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    @include('seguros.show_fields')
                </div>
            </div>
        </div>
    </div>
@endsection
