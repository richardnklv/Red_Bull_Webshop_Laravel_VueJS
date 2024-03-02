<template>
    <div id="app" class="app-container">
        <div class="product-image-container">
            <product-image class="static-image"></product-image>
        </div>
        <div class="product-display-container">
            <product-display :productId="1"></product-display>
        </div>
    </div>
</template>
<script>
import HelloWorld from "@/components/HelloWorld.vue";
import ProductDisplay from "@/components/ProductDisplay.vue";
import ProductImage from "@/components/product/ProductImage.vue";


export default {
    name: 'App',
    components: {
        ProductImage,
        ProductDisplay,
        HelloWorld,
    },
};
</script>

<style>

.app-container {
    //background-color: #363636;

    //width: 100vw;
    //min-height: 100vh;
    //justify-content: center;
    ////align-items: start;
    //display: flex;
    //align-items: flex-start;
    //padding-top: 100px;
}
.static-image {
    //max-width: 20vw;
    //max-height: 20vh;
    //min-width: 20vw;
    //min-height: 20vh;
    //width: 100%;
    //height: auto;
}
.product-image-container {


    //flex: 1;
    //height: 50vh;
    //display: flex;
    //justify-content: flex-end;
    ////padding-right: 5%;

}
.product-display-container {

    //flex: 2;
    //max-width: 50%;

}

</style>
