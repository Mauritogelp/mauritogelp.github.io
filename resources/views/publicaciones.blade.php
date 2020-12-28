@extends('layouts.body')
@section('title', 'inicio')
@section('header')
<link rel="stylesheet" href="{{ asset('storage/css/publicaciones.css') }}">
@endsection
@section('content')
<div class="container">
  <div class="col-sm-12">
    <div class="row">
      <div class="col float-left">
        <h5>mauro <small class="text-muted">moderador</small></h5>
      </div>
      <div class="col">
        <h5 class="text-muted float-right">27-20-2020</h5>
      </div>
      <hr class="col-sm-12">
      <div class="col-sm-12">
        <h3 class="text-center">Calcular numeros fraccionarios</h3>
        <button class="float-right btn btn-danger d-none d-md-block">Denunciar publicación</button>
        <button class="float-right btn btn-danger d-md-none"><i class="fas fa-flag"></i></button>
      </div>
      <div class="col-sm-6 offset-sm-3">
        <img src="{{ asset('storage/img/example.jpg') }}" class="img-publication" style="width:100%;border: 1px solid;padding:2px" alt="example">
      </div>
      <div class="col-sm-12 col-md-4 float-left text-publication">
        <div class="card">
          <div class="card-header text-center bg-dark text-white">
            Puntos
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item text-center"><i class="text-warning fas fa-trophy"></i> <span>400pts</span> El primer lugar</li>
            <li class="list-group-item text-center"><i class="text-muted fas fa-trophy"></i> <span>200pts</span> El segundo lugar</li>
            <li class="list-group-item text-center"><i class="text-muted fas fa-trophy"></i> <span>50pts</span> El tercer lugar</li>
          </ul>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 float-left text-publication">
        <div class="card">
          <div class="card-header text-center bg-dark text-white">
            Información
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item text-center">Lenguajes: Solo compiladores</li>
            <li class="list-group-item text-center">Programación funcional</li>
            <li class="list-group-item text-center">Finaliza en 4 días apartir de hoy</li>
          </ul>
        </div>
      </div>
      <div class="col-sm-12 col-md-4 float-left text-publication">
        <div class="card">
          <div class="card-header text-center bg-dark text-white">
            Reglas
          </div>
          <ul class="list-group list-group-flush">
            <li class="list-group-item text-center">Prohibido copiar otros proyectos</li>
            <li class="list-group-item text-center">Prohibido ...</li>
            <li class="list-group-item text-center">Prohibido ...</li>
          </ul>
        </div>
      </div>
      <div class="col-sm-12 text-publication">
        <p>
          You’ve probably heard of Lorem Ipsum before – it’s the most-used dummy text excerpt out there. People use it because it has a fairly normal distribution of letters and words (making it look like normal English), but it’s also Latin, which means your average reader won’t get distracted by trying to read it. It’s perfect for showcasing design work as it should look when fleshed out with text, because it allows viewers to focus on the design work itself, instead of the text. It’s also a great way to showcase the functionality of programs like word processors, font types, and more.

          We’ve taken Lorem Ipsum to the next level with our HTML-Ipsum tool. As you can see, this Lorem Ipsum is tailor-made for websites and other online projects that are based in HTML. Most web design projects use Lorem Ipsum excerpts to begin with, but you always have to spend an annoying extra minute or two formatting it properly for the web.

          Maybe you have a custom-styled ordered list you want to show off, or maybe you just want a long chunk of Lorem Ipsum that’s already wrapped in paragraph tags. No matter the need, we’ve put together a number of Lorem Ipsum samples ready to go with HTML tags and formatting in place. All you have to do is click the heading of any section on this page, and that HTML-Ipsum block is copied to your clipboard and ready to be loaded into a website redesign template, brand new design mockup, or any other digital project you might need dummy text for.

          No matter the project, please remember to replace your fancy HTML-Ipsum with real content before you go live - this is especially important if you're planning to implement a content-based marketing strategy for your new creation! Lorem Ipsum text is all well and good to demonstrate a design or project, but if you set a website loose on the Internet without replacing dummy text with relevant, high quality content, you’ll run into all sorts of potential Search Engine Optimization issues like thin content, duplicate content, and more.

          HTML-Ipsum is maintained by WebFX. For more information about us, please visit WebFX Reviews. To learn more about the industries we drive Internet marketing performormance for and our revenue driving services: SEO, PPC, social media, web design, local SEO and online advertising services.
        </p>
      </div>
      <hr class="col-sm-12">
      <div id="data" class="col-sm-12">
        <div class="form-group">
          <label for="new_comment_label">Ingresa tu comentario!</label>
          <input type="text" class="form-control" placeholder="Acá tu comentario">
          <textarea class="form-control" id="new_comment_label" rows="5" placeholder="Acá tu código!"></textarea>
          <button class="col-sm-12 btn btn-outline-success">crear comentario</button>
        </div>
      </div>
      <hr class="col-sm-12">
      <div class="col-sm-12 comentary">
        <div class="form-group">
          <label for="new_comment_label"></label>
          <div class="bg-dark text-white">
            <p>RodrigoG <span><i class="fas fa-trophy text-warning"></i> 1</span></p>
            <hr>
            <p>Comentario: ay noc</p>
            <hr>
            <p>Código:</p>
            <xmp>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>hola soy mujer</title>
</head>
<body>
  <h1>hola</h1>
</body>
</html>
            </xmp>
          </div>
        </div>
      </div>      
    </div>
  </div>
</div>
@endsection
@section('script')
@endsection