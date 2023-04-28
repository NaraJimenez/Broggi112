@extends('layout.plantilla')

@section('content')

<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Editar carta trucada</h4>
            </div>
            <div class="card-body">
                <form method="POST" action="{{ route('cartes_trucades.update', $carta_trucada->id) }}">
                    @csrf
                    @method('PUT')

                    <div class="form-group">
                        <label for="codi_trucada">Código de trucada</label>
                        <input type="text" class="form-control" id="codi_trucada" name="codi_trucada" value="{{ $carta_trucada->codi_trucada }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="data_hora_trucada">Fecha y hora de trucada</label>
                        <input type="text" class="form-control" id="data_hora_trucada" name="data_hora_trucada" value="{{ $carta_trucada->data_hora_trucada }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="durada">Duración</label>
                        <input type="text" class="form-control" id="durada" name="durada" value="{{ $carta_trucada->durada }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="interlocutors_id">Interlocutores</label>
                        <input type="text" class="form-control" id="interlocutors_id" name="interlocutors_id" value="{{ $carta_trucada->interlocutors_id }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="telefon">Teléfono</label>
                        <input type="text" class="form-control" id="telefon" name="telefon" value="{{ $carta_trucada->telefon }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="nom">Nombre</label>
                        <input type="text" class="form-control" id="nom" name="nom" value="{{ $carta_trucada->nom }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="cognoms">Apellidos</label>
                        <input type="text" class="form-control" id="cognoms" name="cognoms" value="{{ $carta_trucada->cognoms }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="nota_comuna">Nota común</label>
                        <textarea class="form-control" id="nota_comuna" name="nota_comuna" readonly>{{ $carta_trucada->nota_comuna }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="tipus_localitzacions_id">Tipo de localización</label>
                        <input type="text" class="form-control" id="tipus_localitzacions_id" name="tipus_localitzacions_id" value="{{ $carta_trucada->tipus_localitzacions_id }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="decripcio_localitzacio">Descripción de la localización</label>
                        <input type="text" class="form-control" id="decripcio_localitzacio" name="decripcio_localitzacio" value="{{ $carta_trucada->decripcio_localitzacio }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="detall_localitzacio">Detalles de la localización</label>
                        <textarea class="form-control" id="detall_localitzacio" name="detall_localitzacio" readonly>{{ $carta_trucada->detall_localitzacio }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="altres_ref_localitzacio">Otras referencias de la localización</label>
                        <textarea class="form-control" id="altres_ref_localitzacio" name="altres_ref_localitzacio" readonly>{{ $carta_trucada->altres_ref_localitzacio }}</textarea>
                    </div>

                    <div class="form-group">
                        <label for="municipis_id">Municipio</label>
                        <input type="text" class="form-control" id="municipis_id" name="municipis_id" value="{{ $carta_trucada->municipis_id }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="provincies_id">Provincia</label>
                        <input type="text" class="form-control" id="provincies_id" name="provincies_id" value="{{ $carta_trucada->provincies_id }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="incidents_id">Incidente</label>
                        <input type="text" class="form-control" id="incidents_id" name="incidents_id" value="{{ $carta_trucada->incidents_id }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="expedients_id">Expediente</label>
                        <input type="text" class="form-control" id="expedients_id" name="expedients_id" value="{{ $carta_trucada->expedients_id }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="usuaris_id">Usuario</label>
                        <input type="text" class="form-control" id="usuaris_id" name="usuaris_id" value="{{ $carta_trucada->usuaris_id }}" readonly>
                    </div>

                    <div class="form-group">
                        <label for="estado">Estado</label>
                        <select class="form-control" id="estado" name="estado">
                            @foreach ($estados as $estado)
                                <option value="{{ $estado->id }}" {{ $estado_actual == $estado->id ? 'selected' : '' }}>{{ $estado->estat }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="agencias">Agencias</label>
                        <select class="form-control" id="agencias" name="agencias[]" multiple>
                            @foreach ($agencias as $agencia)
                                <option value="{{ $agencia->id }}" selected>{{ $agencia->nom }}</option>
                            @endforeach
                            @foreach ($agencias as $agencia)
                                <option value={{ $agencia->id}}>{{ $agencia->nom }}</option>
                                @endforeach
                            </select>
                        </div>

                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    @endsection

