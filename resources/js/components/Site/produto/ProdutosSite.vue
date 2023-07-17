<template>
    <!-- Produtos-->
    <section class="page-section portfolio margin110T" id="servicos">
        <div class="container">
            <h2 class="page-section-heading text-center text-uppercase text-secondary mb-0">Todos os Produtos</h2>
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
</template>

<script>

</script>

