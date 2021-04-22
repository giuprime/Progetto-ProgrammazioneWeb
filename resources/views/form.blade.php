<div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
    <div class="grid grid-cols-1">
        <div class="container-fluid">
            <div class="row">
                <section class="col mx-4 my-4" >
                    <form class="" action="{{url('/store')}}" method="post">
                        <div class="form-group">
                            <label>NOME</label>
                            <input class="form-control" type="text" name="nome" placeholder="Inserisci Nome" required>
                            <label>COGNOME</label>
                            <input class="form-control" type="text" name="cognome" placeholder="Inserisci Cognome" required>
                            <label>EMAIL</label>
                            <input class="form-control" type="email" name="email" placeholder="Inserisci Email Istituzionale in caso tu sia un docente" required>
                            <label>NUMERO DI TELEFONO</label>
                            <input class="form-control" type="text" name="numero_di_telefono" placeholder="Inserisci Numero di Telefono" required>
                            <label>PRIORITA'</label><br>
                            <select class="form-control" name="priorita" required >
                                <option value="" disabled selected>Inserisci Priorità</option>
                                <option value="Alta">Alta</option>
                                <option value="Media">Media</option>
                                <option value="Bassa">Bassa</option>
                            </select>

                            <label>DESCRIZIONE</label>
                            <textarea class="form-control" name="descrizione" rows="3" cols="30" placeholder="Inserisci Descrizione" required></textarea>

                            <label>CATEGORIA</label>
                            <select class="form-control" name="classificazione" required>
                            <option value="" disabled selected>Inserisci Categoria</option>
                            @foreach($cat as $c)
                                <option value="{{$c->id}}">{{$c->classificazione}}</option>
                            @endforeach
                            </select>

                            <label>DIPARTIMENTO</label>
                            <select class="form-control" name="dipartimento" required>
                                <option value="" disabled selected>Inserisci Dipartimento</option>
                            @foreach($dipa as $dip)
                                <option value="{{$dip->id}}">{{$dip->nome}}</option>
                            @endforeach
                            </select>

                            <label>LOCALE</label>
                            <select class="form-control" name="locale" required>
                                <option value="" disabled selected>Inserisci Locale</option>
                            @foreach($locale as $l)
                                <option>{{$l->tipologia}} {{$l->classificazione}} {{$l->numero}}</option>
                            @endforeach
                            </select>
                        </div>

                        <input type="submit" class="btn btn-info" value="Inserisci">
                        <input type="reset" class="btn btn-warning" value="Reset">
                    </form>
                </section>
            </div>
        </div>
    </div>
</div>