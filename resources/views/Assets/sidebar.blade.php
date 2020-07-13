<div class="sidebar" data-color="purple" data-background-color="white" data-image="../assets/img/sidebar-1.jpg">
    <!--
      Tip 1: You can change the color of the sidebar using: data-color="purple | azure | green | orange | danger"

      Tip 2: you can also add an image using data-image tag
  -->
    <div class="logo"><a href="/" class="simple-text logo-normal">
            <img src="Imagens/ritaarte.png" height="55" width="auto" alt="">
        </a></div>
    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="nav-item active  ">
                <a class="nav-link" href="perfil">
                    <i class="material-icons">person</i>
                    <p>Profile Utilizador</p>
                </a>
            </li>
            @if ( auth::user()->nivel == "Admin" )
                <li class="nav-item ">
                    <a class="nav-link" href="/cliente">
                        <i class="material-icons">content_paste</i>
                        <p>Lista de Clientes</p>
                    </a>
                </li>
                <li class="nav-item ">
                    <a class="nav-link" href="/encomenda">
                        <i class="material-icons">content_paste</i>
                        <p>Lista de Encomendas</p>
                    </a>
                </li>
            @endif
            <li class="nav-item ">
                <a class="nav-link" href="/encomendar/create">
                    <i class="material-icons">content_paste</i>
                    <p>Encomendar</p>
                </a>
            </li>
        </ul>
    </div>
</div>
