import './bootstrap.js';
import { createApp } from 'vue';
import App from "@/App.vue";
import HelloWorld from "./components/HelloWorld.vue";
import axios from "axios";
import ProductDisplay from "@/components/ProductDisplay.vue";
import Order from "@/Order.vue";


// createApp(HelloWorld).mount('#app');

// createApp(App).mount('#app');
//
const app = createApp(App);
app.mount('#app');

const order = createApp(Order);
order.mount('#order');


