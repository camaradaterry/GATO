<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Catálogo de Libros</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h1 class="text-center">Catálogo de Libros</h1>

        <ul class="nav nav-tabs justify-content-center mb-4">
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#catalogo">Catálogo</a>
            </li>
            @if (Auth::check())
                <li class="nav-item">
                    <a class="nav-link" data-toggle="tab" href="#administrar">Administrar Catálogo</a>
                </li>
            @endif
        </ul>

        <div class="tab-content">
            <div id="catalogo" class="tab-pane fade show active">
                <table class="table table-bordered">
                    <thead class="thead-light">
                        <tr>
                            <th>Título</th>
                            <th>Autor</th>
                            <th>Descripción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($books as $book)
                            <tr>
                                <td>{{ $book->title }}</td>
                                <td>{{ $book->author }}</td>
                                <td>{{ $book->description }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            @if (Auth::check())
                <div id="administrar" class="tab-pane fade">
                    <h3>Administrar Catálogo</h3>
                    <p>Aquí puedes añadir, editar o eliminar libros.</p>
                    <a href="{{ route('books.create') }}" class="btn btn-primary">Añadir Libro</a>
                    <table class="table table-bordered mt-3">
                        <thead class="thead-light">
                            <tr>
                                <th>ID</th>
                                <th>Título</th>
                                <th>Autor</th>
                                <th>Acciones</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($books as $book)
                                <tr>
                                    <td>{{ $book->id }}</td>
                                    <td>{{ $book->title }}</td>
                                    <td>{{ $book->author }}</td>
                                    <td>
                                    {{--<a href="{{ route('', $book->id) }}" class="btn btn-warning btn-sm">Editar</a>  --}}
                                        <form action="#" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger btn-sm">Eliminar</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            @endif
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>

