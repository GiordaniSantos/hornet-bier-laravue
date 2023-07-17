<template>
    <!-- Masthead-->
    <header class="masthead bg-primary text-white text-center">
        <div class="container d-flex align-items-center flex-column">
            <!-- Masthead Avatar Image-->
            <img class="masthead-avatar mb-5" src="images/logo.png" alt="..." />
            <p class="masthead-subheading font-weight-light mb-0">Chopeiras - Acessórios - Manutenção</p>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fas fa-beer"></i></div>
                <div class="divider-custom-line"></div>
            </div>
        </div>
    </header>
    <!-- Produtos -->
    <section class="page-section portfolio" id="servicos">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Produtos</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fa-solid fa-briefcase"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Produtos -->
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal3">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><img class="" src="images/logo-ruwer.png" alt="..." style="width: 25%;"/></div>
                        </div>
                        <img class="img-fluid" src="images/chopeira-ruver-2.png" alt="..." />
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal2">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><img class="" src="images/logo-memo.png" alt="..." style="width: 100%;"/></div>
                        </div>
                        <img class="img-fluid" src="images/chopeira-eletrica-mimo-30.jpg" alt="..." />
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#portfolioModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><img class="" src="images/logo-top-service.png" alt="..." style="width: 90%;"/></div>
                        </div>
                        <img class="img-fluid" src="images/chopeira-tsi-2.jpg" alt="..." />
                    </div>
                </div>
                <div class="text-center mt-4">
                    <router-link to="/produtos" class="btn btn-xl btn-outline-black">
                        Ver todos
                    </router-link>
                </div>
            </div>
        </div>
    </section>
    <!-- Serviços -->
    <section class="page-section bg-primary text-white mb-0 portfolio" id="sobre">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-white">Serviços</h2>
            <!-- Icon Divider-->
            <div class="divider-custom divider-light">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fa fa-gear"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Serviços -->
            <div class="row justify-content-center">
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#servicoModal1">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="images/manutencao2.jpg" alt="..." />
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 mb-5">
                    <div class="portfolio-item mx-auto" data-bs-toggle="modal" data-bs-target="#servicoModal2">
                        <div class="portfolio-item-caption d-flex align-items-center justify-content-center h-100 w-100">
                            <div class="portfolio-item-caption-content text-center text-white"><i class="fas fa-plus fa-3x"></i></div>
                        </div>
                        <img class="img-fluid" src="images/assepsia.jpg" alt="..." />
                    </div>
                </div>
                <div class="text-center mt-4">
                    <router-link to="/servicos" class="btn btn-xl btn-outline-light">
                        Ver todos
                    </router-link>
                </div>
            </div>
        </div>
    </section>
    <!-- Sobre -->
    <section class="page-section mb-0" id="sobre">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Quem somos</h2>
            <!-- Icon Divider-->
            <div class="divider-custom">
                <div class="divider-custom-line"></div>
                <div class="divider-custom-icon"><i class="fa-solid fa-address-card"></i></div>
                <div class="divider-custom-line"></div>
            </div>
            <!-- Sobre -->
            <div class="row">
                <div class="col-lg-4 ms-auto"><p class="lead">Experiência, qualidade de nossos produtos e atendimento especializado, esses são os diferenciais que a Chopeiras Hornet Bier dispõe à você, amigo(a) cliente.
                O objetivo principal é levar ao cliente qualidade e tecnologia, consolidando parcerias, alcançando fidelidade e altos índices de satisfação pelos produtos e serviços oferecidos.</p></div>
                <div class="col-lg-4 me-auto"><p class="lead">Nossos Valores<br>
                    • Respeito nas relações<br>
                    • Honestidade<br>
                    • Agilidade com competência<br>
                    • Confiança<br>
                    • Comprometimento com excelência<br>
                    • Empatia<br>
                    </p>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    export default {
       
    }
</script>

