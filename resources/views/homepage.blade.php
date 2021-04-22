<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>LISTA DIRETTORI</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

  </head>
  <body>

  @if($layout == 'show')
    <!--div class="container-fluid"-->
  <div class="container-fluid"  style="border: 1px solid red;">

      <section class="col-md-auto col-xs">
        <div class="table-responsive">
          <table class="table table-striped">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">Nome</th>
                <th scope="col">Cognome</th>
                <th scope="col">Email</th>
                <th scope="col">Phone</th>
                <th scope="col">Inizio Mandato</th>
                <th scope="col">Fine Mandato</th>
              </tr>
            </thead>
            <tbody>
              @foreach($direttore as $list)
              <tr>
                <th scope="row">{{$list->id}}</th>
                <td>{{$list->nome}}</td>
                <td>{{$list->cognome}}</td>
                <td>{{$list->email}}</td>
                <td>{{$list->numero_di_telefono}}</td>
                <td>{{$list->inizio_mandato}}</td>
                <td>{{$list->fine_mandato}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </section>

  </div>
  @endif
  </body>
</html>
