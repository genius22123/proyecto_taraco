@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Contacto</h1>
    
@stop

@section('content')
   <div class="card">
      
       <div class="card-body">
         <table id="tabla-contacto" class="table table-striped">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nomdre de remitente</th>
                        <th>Correo electronico</th>
                        <th>asunto</th>
                        <th>mensaje</th>
                      
                    </tr>
                </thead>
                <tbody>
               @foreach ($contacts as $contact)     
                <tr>
                    <td>{{$contact->id}}</td>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->email}}</td>
                    <td>{{$contact->subject}}</td>
                    <td>{{$contact->message}}</td>
                  
                 
                </tr>
                    
                @endforeach 
                </tbody>
         </table>
       </div>
   </div>
@stop

@section('css')
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap5.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.2.9/css/responsive.bootstrap5.min.css">
@stop


@section('js')
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/dataTables.responsive.min.js"></script>
<script src="https://cdn.datatables.net/responsive/2.2.9/js/responsive.bootstrap5.min.js"></script>


    <script>
          $('#tabla-contacto').DataTable({
                      responsive:true,
                      autoWidth:false,
                      "language": {
            "lengthMenu": "Mostrar _MENU_ registros por pagina",
            "zeroRecords": "Nada encontrado - disculpa",
            "info": "Mostrando la pagina _PAGE_ de _PAGES_",
            "infoEmpty": "No records available",
            "infoFiltered": "(Filtrado de _MAX_ registros totales)",
            'search': 'Buscar: ',
            'paginate': {
              'next': 'Siguiente',
              'previous': 'Anterior'
            }
        }
                    });
    </script>
@endsection


