import { createWebHistory, createRouter } from "vue-router";

const Principal = () => import('./components/site/Principal.vue')
const Produtos = () => import('./components/site/produto/ProdutosSite.vue')
const Servicos = () => import('./components/site/servico/ServicoSite.vue')
const Contato = () => import('./components/site/ContatoSite.vue')
const Parcerias = () => import('./components/site/parceria/ParceriasSite.vue')

export const routes = [
    {
        name: 'Home',
        path: '/',
        component: Principal
    },
    {
        name: 'Produtos',
        path: '/produtos',
        component: Produtos
    },
    {
        name: 'Serviços',
        path: '/servicos',
        component: Servicos
    },
    {
        name: 'Parcerias',
        path: '/parcerias',
        component: Parcerias
    },
    {
        name: 'Contato',
        path: '/contato',
        component: Contato
    },
]

const router = createRouter({
    history: createWebHistory(),
    routes,
  });
  
  export default router;