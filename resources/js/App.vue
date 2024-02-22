<template>
    <div id="app"></div>
    <hello-world></hello-world>
    <product-display :product-id="1"></product-display>
</template>
<script>
import HelloWorld from "@/components/HelloWorld.vue";
import ProductDisplay from "@/components/ProductDisplay.vue";

export default {
    name: 'App',
    components: {
        HelloWorld,
        ProductDisplay,
    }
};
</script>

<style>

</style>
