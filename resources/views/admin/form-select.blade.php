
<center><div class="col-md-3">
<form action="{{url ('admin/dashboard/update/' .$problema->id)}}" method="post">
@csrf
    <div class="form-group">
        <select class="form-control " name="id_tecnico" required>
            @foreach($tecnico as $tec)
                <option value="{{$tec->id}}">{{$tec->nome}} {{$tec->cognome}} / {{$tec->specializzazione}} </option>
            @endforeach 
        </select>
        <input type="submit" class="btn btn-warning" value="Modifica">
    </div>
</form>
</div></center>


