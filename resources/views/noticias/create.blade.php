<x-master title="Criação de Noticia">
<div class="flex-container">
<div class="container pt-5 white"> 
            @if(session()->has('mensagem'))
                <div class="alert alert-success">
                    {{ session()->get('mensagem') }}
                </div>
            @endif

            @if($errors->any())
                <div class="alert alert-danger">
                    <p><strong>Erro ao realizar esta operação</strong></p>
                    <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                    </ul>
                </div>
            @endif

            <form action="/noticias" method="post" enctype="multipart/form-data">
                @csrf 
            <div class="form-group">
                    <label for="titulo">Título</label>
                    <input type="text" name="titulo" placeholder="Digite o título da notícia" class="form-control">
            </div>
            
            <div class="form-group">
                    <label for="conteudo">Conteúdo</label>
                    <textarea name="conteudo" placeholder="Digite o conteúdo da notícia" class="form-control" rows="5"></textarea>
                </div>

            <div class="form-group">
                    <label for="imagem">Imagem Destaque</label>
                    <input type="file" name="imagem" />
            </div>    

            <div class="form-group">
                    <label for="status">Status</label>
                    <select name="status" class="form-control">
                        <option value="A">Ativo</option>
                        <option value="I">Inativo</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="data_publicacao">Data da Publicação.</label>
                    <input type="text" name="data_publicacao" class="form-control" data-provide="datepicker" data-date-language="pt-BR">

                </div>

                <button type="submit" class="btn btn-primary">Salvar</button>
                <a href="\noticias" class="btn btn-info">Voltar</a>

                </form>

        </div>
        <div class="botoes" >
            
            <a href="/noticias/" class="btn btn-primary"> Ativos </a>
            <a href="/noticias/indexinativo" class="btn btn-primary"> Inativos </a>
        </div>

</div>
   

        
</x-master>        



