
<nav class="navbar navbar-expand-lg">
    <div class="container">
        <img class="img-fluid" src={{ asset('images/logo_clair.svg') }} alt="Logo RestHome">
        <img class="img-fluid" src={{ asset('images/logo_texte_resthome_clair.svg') }} alt="Logo RestHome">
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    LES RECETTES
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Healthy</a></li>
                    <li><a class="dropdown-item" href="#">Gourmet</a></li>
                    <li><a class="dropdown-item" href="#">Végan</a></li>
                    <li><a class="dropdown-item" href="#">Rapide</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    LES PRODUITS
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Fruits</a></li>
                    <li><a class="dropdown-item" href="#">Légumes</a></li>
                    <li><a class="dropdown-item" href="#">Féculents</a></li>
                    <li><a class="dropdown-item" href="#">Céréales</a></li>
                    <li><a class="dropdown-item" href="#">Viandes</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    CONSEILS DU CHEF
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="#">Cuissons</a></li>
                    <li><a class="dropdown-item" href="#">Les graisses</a></li>
                    <li><a class="dropdown-item" href="#">Duos chocs</a></li>
                    <li><a class="dropdown-item" href="#">Produits de saison</a></li>
                </ul>
            </li>
          <li class="nav-item">
            <a class="btn" href="/product">Catalogue</a>
          </li>
          <li class="nav-item">
            <a class="btn" href="/cart">
                <img class="img-button" src={{ asset('images/shopping-cart-1.svg') }} width="30" height="30" alt="">
                Panier
            </a>
          </li>
        </ul>

      </div>
    </div>
  </nav>
