<div class="table-responsive">
    <table class="table" id="Tabla">
        <thead>
        <tr>
            <th>Nombre</th>
        <th>Descripcion</th>
            <th >Fecha de Registro</th>
            <th >Fecha de Actualizacion</th>
        </tr>
        </thead>
        <tbody>
            <tr>
                <td>{{ $categoria->nombre }}</td>
            <td>{{ $categoria->descripcion }}</td>
             <td>{{ $categoria->created_at }}</td>
              <td>{{ $categoria->updated_at }}</td>
            
            </tr>
        </tbody>
    </table>
</div>
