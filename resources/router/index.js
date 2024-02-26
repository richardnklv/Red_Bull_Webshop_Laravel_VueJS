import { createRouter, createWebHistory } from 'vue-router';
import App from "@/App.vue";
import Home from "@/Home.vue";
import Checkout from "@/components/Checkout.vue";

const routes = [
    {
        path: '/',
        name: 'Home',
        component: Home,
    },
    {
        path: '/checkout', //:productId',
        name: 'Checkout',
        component: Checkout,
        props: true,
    },
    // Define other routes as needed
];

const router = createRouter({
    history: createWebHistory("/"),
    routes
});

export default router;
