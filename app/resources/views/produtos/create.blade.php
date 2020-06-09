<h4>Marca</h4>
<hr>
    <div class="form-group">
        <label form="marca_id">Selecione a marca deste produto</label>
        <select class="form-control" name="marca_id" required>
            @foreach($marcas as $marca)
                <option value="{{$marca->id}}">
                    {{$marca->nome}}
                </option>
            @endforeach
        </select>
    </div>
