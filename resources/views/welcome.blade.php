<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap-extended.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/fonts/simple-line-icons/style.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/colors.min.css">
    <link rel="stylesheet" type="text/css" href="https://pixinvent.com/stack-responsive-bootstrap-4-admin-template/app-assets/css/bootstrap.min.css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>
<body>
    <h1 class="text-center mt-4 mb-4">Crear Cuentas</h1>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <div class="d-flex w-100 justify-content-center flex-wrap">
        <div class="col-xl-3 col-sm-6 col-12 ">
            <div class="card w-170">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="media-body text-left">
                      <h3 class="success">{{$totalClientes}}</h3>
                      <span>Clientes</span>
                    </div>
                    <div class="align-self-center">
                      <i class="icon-user success font-large-2 float-right"></i>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>

        <div class="col-xl-3 col-sm-6 col-12">
            <div class="card">
              <div class="card-content">
                <div class="card-body">
                  <div class="media d-flex">
                    <div class="align-self-center">
                        <i class="fas fa-box danger font-large-2 float-left"></i>
                    </div>
                    <div class="media-body text-right">
                      <h3 class="success">{{$totalProductos}}</h3>
                      <span>Total Productos</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
        </div>
    </div>


    <div class="d-flex w-100 justify-content-evenly flex-sm-nowrap flex-wrap p-2">
        <!-- Button trigger modal Clientes -->
        <button type="button" class="btn btn-primary m-1" data-bs-toggle="modal" data-bs-target="#staticBackdropCliente">
            Registrar Cliente
        </button>

        <!-- Button trigger modal Productos -->
        <button type="button" class="btn btn-warning m-1" data-bs-toggle="modal" data-bs-target="#staticBackdropProducto">
            Registrar Producto
        </button>

        <!-- Button trigger modal Deuda -->
        <button type="button" class="btn btn-success m-1" data-bs-toggle="modal" data-bs-target="#staticBackdropDeuda">
            Registrar Deuda
        </button>
    </div>

    <!-- Modal Cliente-->
    <div class="modal fade" id="staticBackdropCliente" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelCliente" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabelCliente">Registrar Nuevo Cliente</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('clientes.store')}}" method="POST">
                        @csrf
                        <input class="form-control mb-2" type="text" placeholder="Nombre" name="nombre">
                        <button class="btn btn-success float-end" type="submit">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Producto-->
    <div class="modal fade" id="staticBackdropProducto" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelProducto" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabelProducto">Registrar Nuevo Producto</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('productos.store')}}" method="POST">
                        @csrf
                        <input class="form-control mb-2" type="text" placeholder="Nombre del Producto" name="nombre">
                        <input class="form-control mb-2" type="text" placeholder="Precio" name="precio">
                        <button class="btn btn-success float-end" type="submit">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal Deuda-->
    <div class="modal fade" id="staticBackdropDeuda" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabelDeuda" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h1 class="modal-title fs-5" id="staticBackdropLabelDeuda">Registrar Nueva Deuda</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="{{route('deuda.store')}}" method="POST">
                        @csrf
                        <select name="cliente_id" class="form-select mb-2" aria-label="Default select example">
                            <option selected>Seleccione un Cliente</option>
                            @foreach ($clientes as $cliente)
                                <option value="{{$cliente->id}}">{{$cliente->nombre}}</option>
                           @endforeach
                        </select>
                        <div class="d-flex w-100">
                            <select name="producto_id" class="form-select mb-2" aria-label="Default select example">
                                <option selected>Seleccione un Producto</option>
                                @foreach ($productos as $producto)
                                        <option value="{{$producto->id}}">{{$producto->nombre}}</option>
                                @endforeach
                            </select>
                            <input class="form-control mb-2" type="number" placeholder="Cantidad de Productos" name="cantidad" value="1">
                        </div>
                        <button class="btn btn-success float-end" type="submit">Registrar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
          @foreach($clientes as $cliente)
            <div class="carousel-item @if ($loop->first) active @endif">
              <div class="d-flex flex-column justify-content-center align-items-center" style="height: 400px;">
                <h3>Cliente: {{ $cliente->nombre }}</h3>
                @if($cliente->productos->isNotEmpty())
                  @php
                    // Calcular el total general
                    $totalPagar = $cliente->productos->sum(function($producto) {
                      return $producto->pivot->cantidad * $producto->precio;
                    });
                  @endphp
                  <div class="d-flex">
                    <table class="table ">
                        <thead>
                          <tr>
                            <th>Cantidad</th>
                            <th>Nombre del Producto</th>
                            <th>Precio</th>
                            <th>Total</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($cliente->productos as $producto)
                            <tr>
                                <td>{{ $producto->pivot->cantidad }}</td>
                                <td>{{ $producto->nombre }}</td>
                                <td>S/. {{ number_format($producto->precio, 2) }}</td>
                                <td>S/. {{ number_format($producto->pivot->cantidad * $producto->precio, 2) }}</td>
                            </tr>
                          @endforeach
                        </tbody>
                        <tfoot>
                          <tr>
                            <td colspan="3" class="text-end"><strong>Total a Pagar:</strong></td>
                            <td><strong>S/. {{ number_format($totalPagar, 2) }}</strong></td>
                          </tr>
                        </tfoot>
                      </table>
                  </div>
                @else
                  <p>Este cliente no tiene productos asociados.</p>
                @endif
              </div>
            </div>
          @endforeach
        </div>
        <button class="carousel-control-prev bg-primary text-white border-0 rounded-circle" style="height: 50px; width: 50px; margin-top: 90px;" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next bg-primary text-white border-0 rounded-circle" style="height: 50px; width: 50px;  margin-top: 90px;" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
      </div>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
