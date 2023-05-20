<nav class="navbar navbar-light navbar-vertical navbar-expand-xl">
    <script>
        var navbarStyle = localStorage.getItem("navbarStyle");
        if (navbarStyle && navbarStyle !== 'transparent') {
            document.querySelector('.navbar-vertical').classList.add(`navbar-${navbarStyle}`);
        }
    </script>
    <div class="d-flex align-items-center">
        <div class="toggle-icon-wrapper">
            <button class="btn navbar-toggler-humburger-icon navbar-vertical-toggle" data-bs-toggle="tooltip"
                data-bs-placement="left" title="Toggle Navigation"><span class="navbar-toggle-icon"><span
                        class="toggle-line"></span></span></button>
        </div>
        <a class="navbar-brand" href="index.html">
            <div class="d-flex align-items-center py-3"><img class="me-2"
                    src="assets/img/icons/spot-illustrations/falcon.png" alt="" width="40" /><span
                    class="font-sans-serif">feedall</span>
            </div>
        </a>
    </div>
    <div class="collapse navbar-collapse" id="navbarVerticalCollapse">
        <div class="navbar-vertical-content scrollbar">
            <ul class="navbar-nav flex-column mb-3" id="navbarVerticalNav">
                <li class="nav-item mb-2">
                    <a class="nav-link" href="index.php" role="button"
                        aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span
                                class="fas fa-chart-pie"></span></span><span class="nav-link-text ps-1">Dashboard</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="list-projet.php" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><i class="fas fa-project-diagram"></i></span><span class="nav-link-text ps-1">Projets</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="contenu.php" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-file-alt"></span></span><span class="nav-link-text ps-1">Contenu web</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="strategie.php" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-bullhorn"></span></span><span class="nav-link-text ps-1">Stratégie et marketing</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="suggestions.php" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-lightbulb"></span></span><span class="nav-link-text ps-1">Centre de suggestion</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="organisation.php" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-calendar-alt"></span></span><span class="nav-link-text ps-1">Organisation</span>
                        </div>
                    </a>
                </li>
                <li class="nav-item mb-2">
                    <a class="nav-link" href="ressources.php" role="button" aria-expanded="false">
                        <div class="d-flex align-items-center"><span class="nav-link-icon"><span class="fas fa-database"></span></span><span class="nav-link-text ps-1">Ressources</span>
                        </div>
                    </a>
                </li>
            </ul>                   
        </div>
    </div>
</nav>