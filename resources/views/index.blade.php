@extends('layouts.app',["current"=>"home"])


@section('body')
    

<div class="jumbotron bg-light border border-secundary">
    <div class="clas row">
       <div class="card-deck">
          <div class="card border bodrder-primary">
             <div class="card-body">
                <h5 class="Card-title">Cadastro de produtos</h5>
                <p class="card-text">

                      Aqui você cadastra todos seus produtos.
                      Só não se esqueça de cadastrar previamente as categorias


                </p>
                <a href="/produtos"    class="btn btn-primary" >Cadastre seus produtos</a>

             </div>
           </div>

           <div class="card border bodrder-primary">
            <div class="card-body">
               <h5 class="Card-title">Cadastro de categorias</h5>
               <p class="card-text">

                     Aqui você cadastra todas as suas categorias de produtos


               </p>
               <a href="/categorias"    class="btn btn-primary" >Cadastre sua categorias</a>

            </div>
          </div>
        </div>
      </div>
</div>







</div>

@endsection