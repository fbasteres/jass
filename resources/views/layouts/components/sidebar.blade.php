<div class="sidebar">
    <div class="logo_content">
        <div class="logo">
            <i class="fa-solid fa-kaaba"></i>
            <div class="logo_name">Paragon+</div>
        </div>
        <i class="fa-solid fa-bars-staggered" id="btn"></i>
    </div>
    <ul class="nav_list">
        <li>
            <a href="{{ route('dashboard') }}">
                <i class="fa-solid fa-network-wired"></i>
                <span class="links_name">Dashboard</span>
            </a>
            <span class="tooltip">Dashboard</span>
        </li>
        <li>
            <a href="{{ route('admin.contribuyentes.index') }}">
                <i class="fa-solid fa-user-tag"></i>
                <span class="links_name">Contribuyentes</span>
            </a>
            <span class="tooltip">Contribuyentes</span>
        </li>
        <li>
            <a href="">
                <i class="fa-solid fa-file-signature"></i>
                <span class="links_name">Recibos</span>
            </a>
            <span class="tooltip">Recibos</span>
        </li>
        <li>
            <a href="">
                <i class="fa-solid fa-sack-dollar"></i>
                <span class="links_name">Caja</span>
            </a>
            <span class="tooltip">Caja</span>
        </li>
        <li>
            <a href="">
                <i class="fa-solid fa-bullhorn"></i>
                <span class="links_name">Reportes</span>
            </a>
            <span class="tooltip">Reportes</span>
        </li>
        <li>
            <a href="{{ route('componentes') }}">
                <i class="fa-solid fa-droplet"></i>
                <span class="links_name">Utilitarios</span>
            </a>
            <span class="tooltip">Utilitarios</span>
        </li>
    </ul>
    <div class="confg_content">
        <div class="confg">
            <ul>
                <li>
                    <a href="">
                        <i class="fa-solid fa-gear"></i>
                        <span class="links_name">Configuración</span>
                    </a>
                    <span class="tooltip">Configuración</span>
                </li>
                <li>
                    <a href="">
                        <i class="fa-solid fa-circle-question"></i>
                        <span class="links_name">Ayuda</span>
                    </a>
                    <span class="tooltip">Ayuda</span>
                </li>
            </ul>  
        </div>
    </div>
</div>
<script src="{{asset('frontend/js/sidebar.js')}}"></script>