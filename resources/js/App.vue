<template>
    <div id="app">

    </div>
    <router-view/>
</template>
<script>
import Home from "@/Home.vue";
import Checkout from "@/components/checkout/Checkout.vue";
import ProductDisplay from "@/components/ProductDisplay.vue";
import HelloWorld from "@/components/HelloWorld.vue";
import ProductImage from "@/components/product/ProductImage.vue";


export default {
    name: 'App',
    components: {
        Home,
        Checkout,

    },
};
</script>

<style>

</style>
