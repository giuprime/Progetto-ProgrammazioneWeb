<div class="table-responsive">
    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">PRIORITA'</th>
                <th scope="col">DESCRIZIONE</th>
                <th scope="col">ID LOCALE</th>
                <th scope="col">ID CATEGORIA</th>
                <th scope="col">STATO</th>
                <th scope="col">OPERAZIONI</th>
            </tr>
        </thead>
        <tbody>
            @foreach($list_problemi as $prob)
            <tr>
                <th scope="row"> {{$prob->id}}</th>
                <td>{{$prob->priorita}}</td>
                <td>{{$prob->descrizione}}</td>
                <td>{{$prob->id_locale}}</td>
                <td>{{$prob->id_categoria}}</td>
                <td>{{$prob->stato}}</td>
                <td><a href="{{url ('/user/dashboard/edit/' .$prob->id)}}" class="btn btn-sm btn-info">AGGIORNA STATO</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
