@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white text-center bg-success"><h3>Denuncia enviada</h3></div>

                <div class="card-body text-center" style="min-height: 500px;">

                    <h2>Gracias por su denuncia!</h2>

                    <hr>

                     <div class="col-md-8 offset-md-2">
                        <a class="btn btn-link" href="{{ route('welcome') }}">
                            Volver
                        </a>
                        <a class="btn btn-link" href="{{ route('complaints_create') }}">
                            Hacer otra denuncia
                        </a>                                                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
