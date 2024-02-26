import './bootstrap.js';
import { createApp } from 'vue';
import router from "../router/index.js";
import App from "@/App.vue";
import Order from "@/Order.vue";
import HelloWorld from "./components/HelloWorld.vue";
import axios from "axios";
import ProductDisplay from "@/components/ProductDisplay.vue";


// createApp(HelloWorld).mount('#app');

// createApp(App).mount('#app');
//
const app = createApp(App);
app.use(router);
app.mount('#app');





