import {createRouter, createWebHistory} from 'vue-router';
import App from "@/App.vue";
import Home from "@/Home.vue";
import Checkout from "@/components/checkout/Checkout.vue";

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home,
    },
    {
        path: '/checkout/:productId', //:productId',
        name: 'Checkout',
        component: Checkout,
        props: true,
    },
    // redirect everything else to home
    {
        path: '/:catchAll(.*)',
        redirect: '/',
    }
    // define other routes
];

const router = createRouter({
    history: createWebHistory("/"),
    routes
});

export default router;
