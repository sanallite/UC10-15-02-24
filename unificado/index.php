<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" />
  <link rel="stylesheet" href="./Css/style.css" />
  <title>Spotify</title>
</head>
<body>
  <header>
    
    <div class="menu_side">
<?php
  session_start(); 
  echo "<p class='session_msg'>".$_SESSION["msg"]."</p>";
?>

      <h1>playlist</h1>
      <img src="img/logo_mkdg.png" width="200px">
      <div class="playlist">
        <h4 class="active">
          <span></span> <i class="bi bi-music-note-beamed"></i>Playlist
        </h4>
        <h4>
          <span></span> <i class="bi bi-music-note-beamed"></i>Proxima lista
        </h4>
        <h4>
          <span></span> <i class="bi bi-music-note-beamed"></i>Recomendações
        </h4>
      </div>
    </div>
    <div class="song_side">
      <div class="song_side_int">
        <button class="button" id="form-open">Login</button>
      </div>

      <div class="music">
        <div class="container_music">
          <div class="top">
            <i class="bi bi-list menu-btn"></i>
            <i class="bi bi-search"></i>
          </div>
          <div class="cover-image"></div>
          <div class="player-body"></div>


          <div class="list-wrapper">
            <table class="list" id="playlist">
              <tr class="song">
                <td class="no">
                    <h5>1</h2>
                </td>
                <td class="title">
                  <h6>Titulo Música</h2>
              </td>
              <td class="length">
                <h5>2:30</h2>
            </td>
              <td>
              <i class="bi bi-heart"></i>
            </td>
              </tr>

              <tr class="song">
                <td class="no">
                    <h5>1</h2>
                </td>
                <td class="title">
                  <h6>Titulo Música</h2>
              </td>
              <td class="length">
                <h5>2:30</h2>
            </td>
              <td>
              <i class="bi bi-heart"></i>
            </td>
              </tr>

            </table>
          </div>
          <div class="info">
            <h2>titulo musica</h2>
            <h3>artista</h3>
          </div>

          <div class="controls">
            <i class="bi bi-skip-backward" id="prev"></i>
            <i class="bi bi-play-fill" id="playpause"></i>
            <i class="bi bi-fast-forward" id="next"></i>
          </div>

          <div class="more-controls">
            <i class="bi bi-heart-fill" id="current-favourite"></i>
            <i class="bi bi-shuffle" id="shuffle"></i>
            <i class="bi bi-repeat" id="repeat"></i>
            <i class="bi bi-gear" id="options"></i>
          </div>

          <p class="current-song-title">
              titulo musica
          </p>

        </div>
      </div>

      <section class="home">
        <div class="form_container">
          <i class="bi bi-x form_close"></i>
          <div class="form login_form">
            <form action="php/acesso.php">
              <h2>Login</h2>
              <div class="input_box">
                <input type="email" placeholder="Email" required />
                <i class="bi bi-envelope email"></i>
              </div>
              <div class="input_box">
                <input type="password" placeholder="Senha" required />
                <i class="bi bi-key password"></i>
                <i class="bi bi-eye-slash pw_hide"></i>
                <div class="option_field">
                  <span class="checkbox">
                    <input type="checkbox" id="check" />
                    <label for="check">Lembrar Login</label>
                  </span>
                  <a href="#" class="forgot_pw">Esqueci a senha?</a>
                </div>
                <button class="button">Logar Agora</button>
                <div class="login_singup">
                  Não é Cadastrado? <a href="#" id="singup">Cadastrar</a>
                </div>
              </div>
            </form>
          </div>
          <div class="form sigup_form">
            <form action="php/cadastro.php" method="post">
              <h2>Cadastro</h2>
              <div class="input_box">
                <input type="text" placeholder="Nome" name="nomeCad" required />
                <i class="bi bi-envelope email"></i>
              </div>
              <div class="input_box">
                <input type="email" placeholder="Email" name="emailCad" required />
                <i class="bi bi-envelope email"></i>
              </div>
              <div class="input_box">
                <input type="password" placeholder="Crie sua Senha" name="senhaCad" required />
                <i class="bi bi-key password"></i>
                <i class="bi bi-eye-slash pw_hide"></i>
              </div>
              <div class="input_box">
                <input type="password" placeholder="Confirme sua Senha" name="senhaCadConfirma" required />
                <i class="bi bi-key password"></i>
                <i class="bi bi-eye-slash pw_hide"></i>
              </div>
              <button class="button">Cadastrar</button>
              <div class="login_singup">
                Já é Cadastrado? <a href="#" id="login">Login</a>
              </div>
            </form>
          </div>
        </div>
      </section>
    </div>
    <div class="master_play">
      
    </div>
  </header>
  <script type="text/javascript" src="./Js/app.js"></script>
  <script type="text/javascript" src="./Js/music.js"></script>
</body>
</html>
