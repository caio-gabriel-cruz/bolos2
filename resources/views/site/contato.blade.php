<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <title>Super Gestão - Contato</title>
        <meta charset="utf-8">

        <link rel="stylesheet" href="{{asset('css/contato.css')}}">
    </head>

    <body>
        <div class="topo">

            <div class="logo">
                <img src="img/logo.png">
            </div>

            <div class="menu">
                <ul>
                    <li><a href="/">Principal</a></li>
                    <li><a href="/sobre">Sobre Nós</a></li>
                    <li><a href="/contato">Contato</a></li>
                </ul>
            </div>
        </div>

        <div class="conteudo-pagina">
            <div class="titulo-pagina">
                <h1>Entre em contato conosco</h1>
            </div>

            <div class="informacao-pagina">
                <div class="contato-principal">
                    <form>
                        <input type="text" placeholder="Nome" class="borda-preta">
                        <br>
                        <input type="text" placeholder="Telefone" class="borda-preta">
                        <br>
                        <input type="text" placeholder="E-mail" class="borda-preta">
                        <br>
                        <select class="borda-preta">
                            <option value="">Qual o motivo do contato?</option>
                            <option value="">Dúvida</option>
                            <option value="">Elogio</option>
                            <option value="">Reclamação</option>
                        </select>
                        <br>
                        <textarea class="borda-preta">Preencha aqui a sua mensagem</textarea>
                        <br>
                        <button type="submit" class="borda-preta">ENVIAR</button>
                    </form>
                </div>
            </div>  
        </div>

        <div class="rodape">
            <div class="redes-sociais">
                <h2>Redes sociais</h2>
                <img src="img/facebook.png">
                <img src="img/linkedin.png">
                <img src="img/youtube.png">
            </div>
            <div class="area-contato">
                <h2>Contato</h2>
                <span>(11) 3333-4444</span>
                <br>
                <span>supergestao@dominio.com.br</span>
            </div>
            <div class="localizacao">
                <h2>Localização</h2>
                <img src="img/mapa.png">
            </div>
        </div>
    </body>
</html>