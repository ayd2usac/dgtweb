@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header text-white text-center bg-success"><h3>Crear denuncia</h3></div>

                <div class="card-body">
                    <form method="POST" action="{{ route('complaints_store') }}" aria-label="{{ route('complaints_store') }}" enctype="multipart/form-data">
                        @csrf



                        <div class="form-group row">
                            <label for="departamento" class="col-sm-4 col-form-label text-md-right">Departamento *</label>

                            <div class="col-md-6">
                                <select class="form-control {{ $errors->has('departamento') ? ' has-error' : '' }}" id="departamento" name="departamento" required="true" >
                                    <option value=""> Seleccione...</option>
                                    @foreach ($departamentos as $_departamento)
                                        <option value="{{$_departamento->id}}"
                                        @isset ($departamento)
                                            @if ($departamento->id == $_departamento->id)
                                                selected="selected"
                                            @endif
                                        @endisset
                                        >{{$_departamento->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="municipio" class="col-sm-4 col-form-label text-md-right">Municipio *</label>

                            <div class="col-md-6">
                                <select class="form-control {{ $errors->has('municipio') ? ' has-error' : '' }}" id="municipio" name="municipio" required="true" >
                                    <option value=""> Seleccione...</option>
                                    @foreach ($municipios as $_municipio)
                                        <option value="{{$_municipio->id}}"
                                        @isset ($municipio)
                                            @if ($municipio->id == $_municipio->id)
                                                selected="selected"
                                            @endif
                                        @endisset
                                        >{{$_municipio->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="zona" class="col-sm-4 col-form-label text-md-right">Zona *</label>

                            <div class="col-md-6">
                                <select class="form-control {{ $errors->has('zona') ? ' has-error' : '' }}" id="zona" name="zona" required="true" >
                                    <option value=""> Seleccione...</option>
                                    @foreach ($zonas as $_zona)
                                        <option value="{{$_zona->id}}"
                                        @isset ($zona)
                                            @if ($zona->id == $_zona->id)
                                                selected="selected"
                                            @endif
                                        @endisset
                                        >{{$_zona->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">                          
                            <label for="address" class="col-sm-4 control-label text-md-right">Dirección</label>
                            <div class="col-md-6">
                            
                              <input id="address" type="text" class="form-control" name="address" value="{{ old('address') }}" required autofocus>                                                            

                                @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="complaint_type" class="col-sm-4 col-form-label text-md-right">Tipo de denuncia *</label>

                            <div class="col-md-6">
                                <select class="form-control {{ $errors->has('complaint_type') ? ' has-error' : '' }}" id="complaint_type" name="complaint_type" required="true" >
                                    <option value=""> Seleccione...</option>
                                    @foreach ($complaint_types as $type)
                                        <option value="{{$type->id}}"
                                        @isset ($complaint_type)
                                            @if ($complaint_type->id == $type->id)
                                                selected="selected"
                                            @endif
                                        @endisset
                                        >{{$type->description}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                        <div class="form-group row">                          
                            <label for="details" class="col-sm-4 control-label text-md-right">Detalles</label>

                            <div class="col-md-6">
                            
                                <textarea id="details" rows="8" type="text" class="form-control" name="details">@if (null !== (old('details'))) {{ old('details') }} @endif</textarea>

                                @if ($errors->has('details'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('details') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <!-- imagenes     -->
                        <div class="form-group row"> 
                            <label for="details" class="col-sm-4 control-label text-md-right">Fotos</label>
                        <div class="input-group control-group increment col-md-6" >
                          <input type="file" name="filename" class="form-control">
                          <div class="input-group-btn"> 
                            <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
                          </div>
                        </div>
                        </div>

        <!-- imagenes   -->

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <a class="btn btn-success" href="{{ route('welcome') }}">
                                    Cancelar
                                </a>

                                <button type="submit" class="btn btn-success">
                                    Enviar
                                </button>                                
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
