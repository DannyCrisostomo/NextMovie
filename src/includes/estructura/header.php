<header>
<div class="header-fixed">
  <div class="hamburger">
    <div class="_layer -top"></div>
    <div class="_layer -mid"></div>
    <div class="_layer -bottom"></div>
  </div>
  <div class="logo">
    <a href="../">
      <p>Next<span>Movie</span></p>
    </a>
  </div>
  <ul class="menuppal">
    <li><a href="../">Inicio</a></li>
    <li><a href="tejina.php">Directorio Anime</a></li>
    <li><a href="donar.php">Donar</a></li>
    <li><a class="usuarios"><?php echo $_SESSION['user']; ?></a></li> <!--user, nombre, idUser-->
    <li>
      <div class="buscar">
        <div class="icono">
          <svg style="color:rgba(255, 0, 106, 1); width: 20px;" aria-hidden="true" class="w-5 h-5 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="../www.w3.org/2000/svg.html">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
          </svg>
        </div>
        <input type="search" name="search" id="search" autocomplete="off" placeholder="Buscar anime..." required="">
      </div>
    </li>
    <li><a class="login" href="includes/backend/salir.php">Salir</a></li>
  </ul>
</div>
</header>

<script>
  // selector
  var menu = document.querySelector('.hamburger');

  // method
  function toggleMenu(event) {
    this.classList.toggle('is-active');
    document.querySelector(".menuppal").classList.toggle("is_active");
    event.preventDefault();
  }

  // event
  menu.addEventListener('click', toggleMenu, false);

  //Solución con jQUery
  /*$(document).ready(function(){
  	  $('.hamburger').click(function() {
  		$('.hamburger').toggleClass('is-active');
  		$('.menuresponsive').toggleClass('is-active');
  		return false;
  	});
  });*/
</script>

<style>
  .usuarios{
    cursor: none;
  }
  * {
    margin: 0;
    box-sizing: border-box;
    font-family: sans-serif;
    list-style: none;
    outline: none;
    border: none;
  }
  :root {
    ---principal: #000000e3;
    ---blackligth: rgba(0, 0, 0, 0.910);
    ---primario: rgba(255, 0, 106, 1);;
    ---secundario: rgb(10, 10, 10);
    ---principal2: #080808;
  }
  .header-fixed {
    position: fixed;
    width: 100%;
    height: 15%;
    display: flex;
    align-items: center;
    justify-content: space-between;
    padding: 0rem 1rem;
    background-color: var(---principal);
}
  .logo a {
    text-decoration: none;
  }

  .logo a p {
    font-weight: 700;
    font-size: 2pc;
    color: rgb(255, 255, 255);
  }

  .logo span {
    color: var(---primario);
  }

  header {
    width: 100%;
    background-color: var(---principal);
  }

  .hamburger {
    display: none;
  }

  .menuppal {
    list-style-type: none;
    display: flex;
    gap: 2rem;
    align-items: center;
  }

  .menuppal li a {
    text-decoration: none;
    color: #ffffff;
    font-size: 19px;
  }

  .login {
    padding: 10px 11px;
    background: rgba(255, 0, 106, 1);
    font-size: 1pc;
    font-weight: 700;
  }
  .login:hover{
    background: white;
    transition: .5s;
  }

  .buscar {
    display: flex;
    border: 2px solid rgba(255, 0, 106, 1);
    border-radius: 7px;
    height: 45px;
  }

  .icono {
    width: 30px;
    display: flex;
    justify-content: center;
    align-items: center;
  }

  #search {
    font-size: .8pc;
    font-weight: 700;
    color: #ffffffec;
    background: transparent;
    width: 100%;
  }

  @media screen and (min-width:0px) and (max-width:991px) {
    .logo {
      z-index: 1002;
    }

    .hamburger {
      display: block;
      transform: translate3d(0, 0, 0);
      transition: transform 0.25s cubic-bezier(0.05, 1.04, 0.72, 0.98);
      z-index: 1002;
      cursor: pointer;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    .hamburger.is-active {
      background-color: none;
    }

    ._layer {
      background: var(---primario);
      margin-bottom: 4px;
      border-radius: 2px;
      width: 28px;
      height: 4px;
      opacity: 1;
      transition: all 0.25s cubic-bezier(0.05, 1.04, 0.72, 0.98);
    }

    .hamburger:hover .-top {
      -webkit-transform: translateY(-100%);
      -ms-transform: translateY(-100%);
      transform: translateY(-100%);
    }

    .hamburger:hover .-bottom {
      -webkit-transform: translateY(100%);
      -ms-transform: translateY(100%);
      transform: translateY(100%);
    }

    .hamburger.is-active .-top {
      -webkit-transform: translateY(200%) rotate(45deg) !important;
      -ms-transform: translateY(200%) rotate(45deg) !important;
      transform: translateY(200%) rotate(45deg) !important;
    }

    .hamburger.is-active .-mid {
      opacity: 0;
    }

    .hamburger.is-active .-bottom {
      -webkit-transform: translateY(-200%) rotate(135deg) !important;
      -ms-transform: translateY(-200%) rotate(135deg) !important;
      transform: translateY(-200%) rotate(135deg) !important;
    }

    .menuppal.is_active {
      transform: translate3d(0px, 0px, 0px);
    }

    .menuppal {
      display: flex;
      background-color: rgb(0 0 0 / 91%);
      bottom: 0;
      height: 100%;
      left: 0;
      overflow-y: scroll;
      position: fixed;
      top: 0;
      transform: translate3d(0px, -100%, 0px);
      transition: transform 0.35s cubic-bezier(0.05, 1.04, 0.72, 0.98) 0s;
      width: 100%;
      z-index: 1001;
      flex-direction: column;
      justify-content: center;
    }

    .menuppal ul {
      margin: 0;
      padding: 0;
    }

    .menuppal ul li {
      list-style: none;
      text-align: center;
      font-family: Verdadna, Arial, Helvetica;
      color: nav-color-text;
      font-size: 1.5rem;
      line-height: 3em;
      height: 3em;
      color: #369;
      text-transform: none;
      font-weight: bold;
    }

    .menuppal ul li a {
      text-decoration: none;
      color: #369;
    }

    .menuppal ul li a:hover {
      text-decoration: none;
      color: #333;
    }
  }
</style>