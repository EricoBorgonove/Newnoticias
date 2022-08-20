
<x-master title="Formulário de Noticias Inativas">


    <div class="container pt-5 white">
        @if (session()->has('mensagem'))
            <div class="alert alert-sucess">
                {{session()->get('mensagem')}}
            </div>
        @endif


        <table class="table table-striped">
        <thead>
            <tr>
            <th scope="col">Ações</th>
            <th scope="col">Titulo</th>
            <th scope="col">Status</th>
            <th scope="col">Data Publicação</th>
            <th scope="col">Imagem</th>

            </tr>
        </thead>
        <tbody>
                @foreach ($noticias as $noticia)
                    <tr>
                        <td>
                            <a href="/noticias/{{ $noticia->id }}/edit" class="btn btn-warning btn-sm">Editar</a>
                            <form action="/noticias/{{ $noticia->id }}" class="d-inline-block" method="POST" onsubmit="confirmarExclusao(event)">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Excluir</button>
                            </form>
                        </td>
                        <td>{{ $noticia->titulo }}</td>
                        <td>{{ $noticia->status_formatado }}</td>
                        <td>{{ optional($noticia->data_publicacao)->format("d/m/Y") }}</td>
                        <td><img src="{{ $noticia->imagem}}" height="40px"></td>
                    </tr>
                @endforeach
        </tbody>
        </table>
        
        {{$noticias->links()}}
        <div>
            <a href="/noticias/create" class="btn btn-primary"> Nova Notícia </a>
            <a href="/noticias/" class="btn btn-primary"> Ativos </a>
        </div>
    </div>



   
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/locales/bootstrap-datepicker.pt-BR.min.js" integrity="sha512-mVkLPLQVfOWLRlC2ZJuyX5+0XrTlbW2cyAwyqgPkLGxhoaHNSWesYMlcUjX8X+k45YB8q90s88O7sos86636NQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    

</x-master>        



