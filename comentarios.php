<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  

 
  <link rel="shortcut icon" href="perfil.png" type="images">

 
  <link rel="stylesheet" href="./assets/css/style.css">
  <link rel="stylesheet" href="comentarios.css">
  <link href='https://unpkg.com/boxicons@2.1.1/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <script src="https://cdn.amcharts.com/lib/5/index.js"></script>
<script src="https://cdn.amcharts.com/lib/5/percent.js"></script>
<script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script>
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <link
    href="https://fonts.googleapis.com/css2?family=Mulish:wght@600;700;900&family=Quicksand:wght@400;500;600;700&display=swap"
    rel="stylesheet">
<script src="comente.js"></script>
    <script type="text/javascript"
        src="https://cdn.jsdelivr.net/npm/@emailjs/browser@3/dist/email.min.js">
</script>
<script type="text/javascript">
   (function(){
      emailjs.init("nGXHiX83CZ7TI488W");
   })();
</script>
</head>



<body style="background-image: url(svg_20230603_164214_0000.svg);background-size: cover;">


  <nav>
    <div class="nav-bar">
        <i class='bx bx-menu sidebarOpen' ></i>
        <img src="perfil.png" class="logo navLogo" style="height: 50px; width: 70px;" alt="Landio logo">
        <div class="menu">
            <div class="logo-toggle">
              <img src="perfil.png" class="logo" style="height: 50px; width: 70px;" alt="Landio logo">
                <i class='bx bx-x siderbarClose'></i>
            </div>

            <ul class="nav-links">
                <li><a href="index.html">Projeto</a></li>
                <li><a href="historia.html">Historia</a></li>
                <li><a href="comentarios.php">comentários</a></li>
            </ul>
        </div>

        

        <div class="darkLight-searchBox">
            <div class="dark-light">
                <i class='bx bx-moon moon'></i>
                <i class='bx bx-sun sun'></i>
            </div>

            <div class="searchBox">
               <div class="searchToggle">
                <i class='bx bx-x cancel'></i>
                <i class='bx bx-search search'></i>
               </div>

                <div class="search-field">
                    <input type="text" placeholder="Procurar...">
                    <i class='bx bx-search'></i>
                </div>
            </div>
        </div>
    </div>
</nav>

<script>

const body = document.querySelector("body"),
  nav = document.querySelector("nav"),
  modeToggle = document.querySelector(".dark-light"),
  searchToggle = document.querySelector(".searchToggle"),
  sidebarOpen = document.querySelector(".sidebarOpen"),
  siderbarClose = document.querySelector(".siderbarClose");

  let getMode = localStorage.getItem("mode");
      if(getMode && getMode === "dark-mode"){
        body.classList.add("dark");
      }

// js code to toggle dark and light mode
  modeToggle.addEventListener("click" , () =>{
    modeToggle.classList.toggle("active");
    body.classList.toggle("dark");

    // js code to keep user selected mode even page refresh or file reopen
    if(!body.classList.contains("dark")){
        localStorage.setItem("mode" , "light-mode");
    }else{
        localStorage.setItem("mode" , "dark-mode");
    }
  });

// js code to toggle search box
    searchToggle.addEventListener("click" , () =>{
    searchToggle.classList.toggle("active");
  });

  
//   js code to toggle sidebar
sidebarOpen.addEventListener("click" , () =>{
nav.classList.add("active");
});

body.addEventListener("click" , e =>{
let clickedElm = e.target;

if(!clickedElm.classList.contains("sidebarOpen") && !clickedElm.classList.contains("menu")){
    nav.classList.remove("active");
}
});

</script>

<main>
    <article>

      <!-- 
        - HERO
      -->


      <div class="container1">
      <div class="content">
      <div class="container12">
        <span class="text8 first-text">Olá!</span>
        <span class="text8 sec-text">Curta</span>
    </div>
      <p>Deixe sua mensagem, compartilhe e caso precise de ajuda, recomenda-se a informação abaixo!</p>
    </div>
    <div class="link">
      <a href="index.html" class="hire">Pagina inicial</a>
    </div>
  </div>
 
  <script>
        const text = document.querySelector(".sec-text");
        const textLoad = () => {
            setTimeout(() => {
                text.textContent = "Deixe uma mensagem!";
            }, 0);
            setTimeout(() => {
                text.textContent = "Compartilhe!";
            }, 4000);
            setTimeout(() => {
                text.textContent = "Ajude!";
            }, 8000); //1s = 1000 milliseconds
        }
        textLoad();
        setInterval(textLoad, 12000);
    </script>    

  <div class="container5">
         <div class="preloader">
            <span></span>
            <span></span>
            <span></span>
         </div>
         <div class="shadow"></div>
      </div>

      <section class="about-us1">
    <div class="about1">
      <div class="text1">
        <h2 style="text-align: center;">Ajuda?</h2>
        <h5  style="text-align: center;">Ligue<span>180</span></h5>
        <h5>O que é Central de Atendimento à Mulher – Ligue 180?</h5>
          <p>O Ligue 180 é um serviço de utilidade pública essencial para o enfrentamento à violência contra a mulher. Além de receber denúncias de violações contra as mulheres, a central encaminha o conteúdo dos relatos aos órgãos competentes e monitora o andamento dos processos.

O serviço também tem a atribuição de orientar mulheres em situação de violência, direcionando-as para os serviços especializados da rede de atendimento. <p>No Ligue 180, ainda é possível se informar sobre os direitos da mulher, a legislação vigente sobre o tema e a rede de atendimento e acolhimento de mulheres em situação de vulnerabilidade.</p>
        <div class="data1">
        <a href="https://www.gov.br/mdh/pt-br/ligue180" class="hire1">180</a>
        </div>
      </div>
    </div>
  </section>
      <br><br>
      <br><br>
      <br><br>
      <br><br>



<h2 class="h2 section-title" style="color: #3343a2; margin-bottom:-100px; margin-top: 200px;">Ajude nossa luta! Compartilhe!</h2>

<div class="copiar">
<div class="copyfield">
        <span id="link">https://www.youtube.com</span>
        <span id="copy-btn">Copiar</span>
    </div>
</div>
    <script>
        var copybtn = document.getElementById("copy-btn");
        var link = document.getElementById("link");

        copybtn.onclick = function () {
            navigator.clipboard.writeText(link.innerHTML);
            copybtn.innerHTML = "Copiado"
            setTimeout(function (){
                copybtn.innerHTML = "Copiar"
            }, 2000)
        }
    </script>

<h2 class="h2 section-title" style="color: #3343a2; margin-bottom:-50px;">Fale conosco! Deixe sua mensagem!</h2>

<div class="formu2">
<div class="formu">
<form class="formul">
  <div>
                    <label for="name">Nome</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div>
                    <label for="email">E-mail</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div>
                    <label for="message">Mensagem</label>
                    <input type="text" id="message" name="message" required>
                </div>
                <button type="submit" class="button" onclick="sendMail()">Enviar</button>
            </form>
</div>
</div>


<script>
      const button = document.querySelector(".button");
      button.addEventListener("click", (e) => {
        e.preventDefault;
        button.classList.add("animate");
        setTimeout(() => {
          button.classList.remove("animate");
        }, 600);
      });
    </script>





  <footer>

    <div class="footer-top">
      <div class="container">

        <div class="footer-brand">

          <a href="#" class="logo">
            <img src="perfil.png" style="height: 50px; width: 70px;" alt="Landio logo">
          </a>

          <p class="footer-text">
            <p>Somos um grupo no qual desenvolvemos um site para abordar as questões de desigualdade de genero, um trabalho desenvolvido para fins academicos como atividade complementar para a formação em bacharel em Enfermagem.</p>
           
          </p>

          <br><br>

          <ul class="social-list">

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-facebook"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-twitter"></ion-icon>
              </a>
            </li>

            <li>
              <a href="#" class="social-link">
                <ion-icon name="logo-instagram"></ion-icon>
              </a>
            </li>


          </ul>

        </div>

        <div class="footer-link-box">


        

          <ul class="footer-list">

            <li>
              <p class="footer-item-title">Paginas</p>
            </li>

            <li>
              <a href="index.html" class="footer-link">Projeto</a>
            </li>

            <li>
              <a href="historia.html" class="footer-link">Historia</a>
            </li>

            <li>
              <a href="comentarios.php" class="footer-link">Comentários</a>
            </li>

            <li>
              <a href="#" class="footer-link">Suporte</a>
            </li>


          </ul>

        </div>

      </div>
    </div>

    <div class="footer-bottom">
      <div class="container">
        <p class="copyright">
          &copy; 2023 <a href="">#Aceleraigualdade</a>. Direitos reservados
        </p>
      </div>
    </div>

  </footer>





  <!-- 
    - custom js link
  -->
  <script src="./assets/js/script.js"></script>

  <!-- 
    - ionicon link
  -->
  <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script>
  
</script>
</body>

</html>