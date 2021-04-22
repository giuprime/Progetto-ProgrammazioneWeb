
<center><div class="col-md-3">
<form action="{{url ('user/dashboard/update/' .$problema->id)}}" method="post">
@csrf
    <div class="form-group">
        <select class="form-control " name="stato" required>
                <option value="Incompleto"> Incompleto </option>
                <option value="Parzialmente Completo"> Parzialmente Completo </option>
                <option value="Completo"> Completo </option>
        </select>
        <input type="submit" class="btn btn-warning" value="AGGIORNA">
    </div>
</form>
</div></center>









