@extends('layouts.app',["current"=>"categorias"])

@section('body')
    
<div class="card border">

    <div class="card-title">
      
         <h5 class="card-title">
           
            Cadastro de Produtos
         </h5>

         
         <table class="table table-ordered table-hover" id="tabelaProdutos">
                 <thead>
                     <tr>
                         <th>Código</th>
                         <th>Nome </th>
                         <th>Quantidade</th>
                         <th>Preço</th>
                         <th>Departamento</th>
                     </tr>
                 </thead>
                  <tbody>
               


                  </tbody>


                </table>
        

    </div>
   
    <div class="card-footer">
        <button  class="btn btn-sm btn-primary" role="button" onclick="novoProduto()">Novo produto</button>
    </div>
</div>

<div class="modal" tabindex="-1" role="dialog" id="dlgProdutos">
    <div class="modal-dialog" role="document">
         
    <div class="modal-content" >
                  <form class="form-horizontal " id="formProduto" >
                      <div class="form-horizontal" id="formProduto">
                          <div class="modal-header">
                              <h5 class="modal-title">Novo produto</h5>
                          </div>
                          <div class="modal-body">
                                   <input type="hidden" id="id" class="form-control">
                                   <div class="form-group">
                                       <label for="nomeProduto" class="control-label">Nome do Produto</label>
                                       <div class="input-group">
                                           <input type="text" class="form-control" id="nomeProduto" placeholder="Nome do Produto">
                                       </div>
                                   </div>


                                  

                                <div class="form-group">
                                    <label for="precoProduto" class="control-label">Preço</label>
                                    <div class="input-group">
                                        <input type="number" class="form-control" id="precoProduto" placeholder="Preco do Produto">
                                    </div>
                                </div>

                                

                              <div class="form-group">
                                <label for="Quantidade" class="control-label">Quantidade</label>
                                <div class="input-group">
                                    <input type="number" class="form-control" id="Quantidade" placeholder="Quantidade" >
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="departamentoProduto" class="control-label">Categoria</label>
                                <div class="input-group">
                                    <select type="text" class="form-control" id="departamentoProduto"  >
                                    </select>
                                </div>
                            </div>
                          


                              <div class="modal-footer">
                                  <button type="Submit" class="btn btn-primary">Salvar</button>
                                  <button type="Cancel" class="btn btn-secondary" data-dissmiss="modal" >Cancelar</button>
                              </div>


                      </div>
                  </form>
               

    </div>
</div>
</div>




@endsection

@section('javascript')


<script type="text/javascript">


$.ajaxSetup({



    headers:{

        'X-CSRF-TOKEN':"{{csrf_token()}}"
    }
});

function novoProduto(){
    $('#id').val('');
    $('#nomeProduto').val('');
    $('#precoProduto').val('');
    $('#Quantidade').val('');


    $('#dlgProdutos').modal('show');
}






function carregarCategorias() {
        $.getJSON('/api/categorias', function(data) { 
            for(i=0;i<data.length;i++) {
                opcao = '<option value ="' + data[i].id + '">' + 
                    data[i].nome + '</option>';
                $('#departamentoProduto').append(opcao);
            }
        });
    }
    function montarLinha(p) {
        var linha="<tr>"+   
        "<td>"+ p.id + "</td>"+
        "<td>"+ p.nome + "</td>"+
        "<td>"+ p.estoque + "</td>"+
        "<td>"+ p.preco + "</td>"+
        "<td>"+ p.categoria_id + "</td>"+
        "<td>"+ 
        '<button class="btn btn-sm btn-primary">Editar</button>'+
        '<button class="btn btn-sm btn-danger"> Apagar </button>'+
        "</td>"
        "</tr>";

        return linha;
    }

    function carregarProdutos() {
        $.getJSON('/api/produtos', function(produtos){
         for(i=0;i<produtos.length;i++){
            linha=montarLinha(produtos[i]);
            $('#tabelaProdutos>tbody').append(linha)
            } 
        });
        
    }

    $(function () {
        carregarCategorias();
        carregarProdutos();
        
    })


</script>
@endsection