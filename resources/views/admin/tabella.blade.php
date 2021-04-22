<center><h5>Legenda    Id Categoria =  1:Elettrico, 2:Sanitario, 3:Informatico, 4:Strutturale.</h5>

<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">PRIORITA'</th>
                <th scope="col">DESCRIZIONE</th>
                <th scope="col">ID UTENTE</th>
                <th scope="col">ID TECNICO</th>
                <th scope="col">ID DOCENTE</th>
                <th scope="col">ID DIPARTIMENTO</th>
                <th scope="col">ID LOCALE</th>
                <th scope="col">ID CATEGORIA</th>
                <th scope="col">STATO</th>
                <th scope="col">OPERAZIONI</th>
            </tr>
        </thead>
        <tbody>
            @foreach($problemi as $prob)
            <tr>
                <th scope="row"> {{$prob->id}}</th>
                <td>{{$prob->priorita}}</td>
                <td>{{$prob->descrizione}}</td>
                <td>{{$prob->id_utente}}</td>
                <td>{{$prob->id_tecnico}}</td>
                <td>{{$prob->id_docente}}</td>
                <td>{{$prob->id_dipartimento}}</td>
                <td>{{$prob->id_locale}}</td>
                <td>{{$prob->id_categoria}}</td>
                <td>{{$prob->stato}}</td>
                <td><a href="{{url ('/admin/dashboard/edit/' .$prob->id)}}" class="btn btn-sm btn-info">ASSEGNA</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
