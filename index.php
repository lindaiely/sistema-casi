<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CASI - CENTRO ACADÊMICO</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class="container">
        <nav class="menu">
            <a href="">EVENTOS</a>
            <a href="">CASI</a>
            <a href="">NOTICIAS</a>
            <a href="">TRANSPARÊNCIA</a>
            <a href="">CONTATO</a>
        </nav>
        <section class="conteudo">
            <div id="logo">
                <img src="img/logo.png" alt="Logo do CASI">
            </div>
            <div class="w-50" id="det">
                <h1 id="titulo">Título da noticia</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam optio iste, ab dolores asperiores nostrum eligendi fugiat similique eos deserunt a adipisci ipsum! Beatae quasi facere animi! Voluptatibus, obcaecati atque. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur alias rerum doloremque accusamus explicabo debitis ab unde provident esse et quisquam sapiente eveniet consequuntur totam, eum eaque nihil aspernatur excepturi!</p>
                <a href="">Ver notícia</a>
                <p id="detail"></p>
            </div>
            <div class="w-50" id="det">
                <h1 id="titulo">Título da noticia</h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam optio iste, ab dolores asperiores nostrum eligendi fugiat similique eos deserunt a adipisci ipsum! Beatae quasi facere animi! Voluptatibus, obcaecati atque. Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consectetur alias rerum doloremque accusamus explicabo debitis ab unde provident esse et quisquam sapiente eveniet consequuntur totam, eum eaque nihil aspernatur excepturi!</p>
                <a href="">Ver notícia</a>
                <p id="detail"></p>
            </div>
        </section>
        <footer class="rodape">
            <div class="social">
                <a href="https://www.instagram.com/casi.ufpi/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
                <a href="#"><i class="fa-regular fa-envelope"></i></a>
                <a href="#"><i class="fa-brands fa-whatsapp"></i></a>
            </div>
            <p>Todos os direitos reservados - <?=date('Y')?></p>
        </footer>
    </div>
</body>
</html>