@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h1 class="text-center mb-4">Bienvenido a Mi Librería</h1>

    <ul class="nav nav-tabs justify-content-center mb-4" style="background-color: #f0f4f8; border-radius: 8px; box-shadow: 0 2px 5px rgba(0,0,0,0.1);">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#inicio">Inicio</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="{{ url('/books') }}">Catálogo</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#contacto">Contacto</a>
        </li>
    </ul>

    <div class="tab-content">
        <div id="inicio" class="tab-pane fade show active">
            <div class="mb-4">
                <img src="{{ asset('images/libro.jpg') }}" class="img-fluid w-100 rounded" alt="Imagen Principal" style="height: 50vh; object-fit: cover; box-shadow: 0 4px 10px rgba(0,0,0,0.2);">
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h3>Inicio</h3>
                    <p>Explora nuestra colección de libros y encuentra tus favoritos.</p>
                </div>
            </div>
            
            <!-- Sección de Vista Previa -->
            <h2 class="text-center mb-4">Vista Previa de Nuestros Libros</h2>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/libro1.jfif') }}" class="card-img-top" alt="Libro 1">
                        <div class="card-body">
                            <h5 class="card-title">Título del Libro 1</h5>
                            <p class="card-text">Descripción breve del libro 1.</p>
                            <p><strong>Autor:</strong> Autor del Libro 1</p>
                            <p><strong>Año de Publicación:</strong> 2023</p>
                            <p><strong>Género:</strong> Ficción</p>
                            <p><strong>Puntuación:</strong> ⭐⭐⭐⭐☆</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/libro2.jpg') }}" class="card-img-top" alt="Libro 2">
                        <div class="card-body">
                            <h5 class="card-title">Título del Libro 2</h5>
                            <p class="card-text">Descripción breve del libro 2.</p>
                            <p><strong>Autor:</strong> Autor del Libro 2</p>
                            <p><strong>Año de Publicación:</strong> 2022</p>
                            <p><strong>Género:</strong> No Ficción</p>
                            <p><strong>Puntuación:</strong> ⭐⭐⭐⭐⭐</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card">
                        <img src="{{ asset('images/libro3.jfif') }}" class="card-img-top" alt="Libro 3">
                        <div class="card-body">
                            <h5 class="card-title">Título del Libro 3</h5>
                            <p class="card-text">Descripción breve del libro 3.</p>
                            <p><strong>Autor:</strong> Autor del Libro 3</p>
                            <p><strong>Año de Publicación:</strong> 2021</p>
                            <p><strong>Género:</strong> Fantasía</p>
                            <p><strong>Puntuación:</strong> ⭐⭐⭐⭐☆</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div id="catalogo" class="tab-pane fade">
            <div class="mb-4">
                <img src="{{ asset('images/imagen_catalogo.jpg') }}" class="img-fluid w-100 rounded" alt="Catálogo" style="height: 50vh; object-fit: cover; box-shadow: 0 4px 10px rgba(0,0,0,0.2);">
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h3>Catálogo</h3>
                    <p>Aquí puedes explorar nuestro catálogo de libros.</p>
                </div>
            </div>
        </div>

        <div id="contacto" class="tab-pane fade">
            <div class="mb-4">
                <img src="{{ asset('images/imagen_contacto.jpg') }}" class="img-fluid w-100 rounded" alt="Contacto" style="height: 50vh; object-fit: cover; box-shadow: 0 4px 10px rgba(0,0,0,0.2);">
            </div>
            <div class="card mb-4 shadow-sm">
                <div class="card-body">
                    <h3>Contacto</h3>
                    <p>Si tienes preguntas, no dudes en contactarnos.</p>
                </div>
            </div>
        </div>
    </div>

    <footer class="text-center mt-4 mb-4">
        <p>&copy; {{ date('Y') }} Mi Librería. Todos los derechos reservados.</p>
    </footer>
</div>
@endsection


