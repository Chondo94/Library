<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}"> <!--este comando me sirve para llamar a Bulma-->
    <title></title>
  </head>
  <body><br><br><br>
    <section class="section">
      <div class="columns is-centered">
        <div class="column is-narrow">
        <input type="submit" value="Libros" class="button is-black is-medium is-fullwidth is-rounded">
        <br>
        <div class="box">

   @foreach($book as $book)


   <article class="media">
     <div class="media-left">
       <figure class="image is-64x64">
         <img src="img/{{ $book->img }}">
       </figure>
     </div>
     <div class="media-content">
       <div class="content">
         <p>
           <strong>{{ $book->name }}</strong> <small>.</small> <small>Paginas: {{ $book->page }}</small>
           <br><span class="tag is-info">{{ $book->autor }}</span> <br>
           Copias:{{ $book->total_copies }}<br>
           Disponibles:{{ $book->available_copies }}        </p>
           <a  href="{{ route('book.show', $book->id) }}" class = 'button  is-success  is-outline'><span>Editar</span></a>      </div>

         </div>
       </article>

       @endforeach
     </div>

        <div class="has-text-centered">
          <a href="{{ route('book.create') }}"><h1 class="button is-active is-medium is-rounded has-text-centered">Registrar</h1></a>
        </div>
      </div>
    </div>
      </section>

  </body>
</html>
