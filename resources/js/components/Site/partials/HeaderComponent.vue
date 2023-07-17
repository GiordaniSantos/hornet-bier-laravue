<template>
    <nav class="navbar navbar-expand-lg bg-secondary text-uppercase fixed-top" id="mainNav">
        <div class="container">
            <router-link to="/" class="navbar-brand"><img class="" src="images/logo.png" alt="Logo" style="width: 130px;margin-top: -8%;margin-bottom: -8%;"/></router-link>
            <button class="navbar-toggler text-uppercase font-weight-bold bg-primary text-white rounded" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                Menu
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-0 mx-lg-1"><router-link to="/" class="nav-link py-3 px-0 px-lg-3 rounded">Início</router-link></li>
                    <li class="nav-item mx-0 mx-lg-1"><router-link to="/produtos" class="nav-link py-3 px-0 px-lg-3 rounded">Produtos</router-link></li>
                    <li class="nav-item mx-0 mx-lg-1"><router-link to="/servicos" class="nav-link py-3 px-0 px-lg-3 rounded">Serviços</router-link></li>
                    <li class="nav-item mx-0 mx-lg-1"><router-link to="/parcerias" class="nav-link py-3 px-0 px-lg-3 rounded">Parcerias</router-link></li>
                    <li class="nav-item mx-0 mx-lg-1"><router-link to="/contato" class="nav-link py-3 px-0 px-lg-3 rounded">Contato</router-link></li>
                </ul>
            </div>
        </div>
    </nav>
</template>

<script>
    export default {
 
    }
</script>

