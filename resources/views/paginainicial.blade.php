<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Vitrine Store Página incial</title>
        <link rel="stylesheet" href="css/styles.css" />

</head>
<body>
<header>

        <nav>
            <p class="brand">Vitrine<strong>Store</strong></p>

        </nav>
        <div class="header-block">
         @if ($errors->any())
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
         @endif
            <form method="get" action="{{route('index')}}" class="container">
                @csrf
            <div class="card">
                <h1>Login</h1>
                <div class="label-float">
                    <label for="email">Email</label>
                    <input type="text" id="email" name="email" required />
                </div>
                <div class="label-float">
                    <label for="password">Senha</label>
                    <input type="password" id="password" name="password" required />

                </div>
                <button type="submit">Login</button>
            </div>
        </form>

      </div>
</header>

<script>
    function mostrarFormulario() {
        var formulario = document.getElementById("formulario");
        formulario.style.display = "block";
    }
</script>

      <footer>
        <div class="main">
          <div class="content footer-links">
            <div class="footer-company">
              <h3>Empresa</h3>
              <h3>Sobre</h3>
              <h3>Contato</h3>
            </div>
            <div class="footer-rental">
              <h3>Help</h3>
            </div>
            <div class="footer-social">
              <h4>Redes Sociais</h4>
              <div class="social-icons">
                <img src="images/instragram.png" alt="Instagram" />
                <img src="images/facebook.png" alt="Facebook" />
              </div>
            </div>
            <div class="footer-contact">
              <br>
              <h3>Fale Conosco</h3>
              <h3>+55 51 9xxxx-xx79</h3>
              <h3>Vitrinetore@store.com.br</h3>
              <h3>Cidade Vitrine, Bairro Store, RS</h3>
            </div>
          </div>
        </div>
        <div class="last">Vitrine Store - 2024</div>
      </footer>
    </body>
