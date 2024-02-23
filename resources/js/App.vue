<template>
    <div id="app"></div>
    <hello-world></hello-world>
    <product-display :productId="1"></product-display>
</template>
<script>
import HelloWorld from "@/components/HelloWorld.vue";
import ProductDisplay from "@/components/ProductDisplay.vue";


export default {
    name: 'App',
    components: {
        ProductDisplay,
        HelloWorld,
    },
};
</script>

<style>

</style>
