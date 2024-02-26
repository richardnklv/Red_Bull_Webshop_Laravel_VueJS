<template>
    <div class="app-container">
        <div class="product-image-container">
            <product-image class="static-image"></product-image>
        </div>
        <div class="product-display-container">
            <product-display :productId="1"></product-display>
        </div>

    </div>
</template>
<script>
import ProductDisplay from "@/components/ProductDisplay.vue";
import HelloWorld from "@/components/HelloWorld.vue";
import ProductImage from "@/components/product/ProductImage.vue";


export default {
    name: 'Home',
    components: {
        ProductDisplay,
        ProductImage,
    },
};
</script>

<style>

.app-container {
    background-color: #363636; /* Dark background for the whole page */
    /* This enables flexbox layout */
    width: 100vw; /* 100% of the viewport width */
    min-height: 100vh; /* 100% of the viewport height */
    justify-content: center; /* This centers the children horizontally */
    //align-items: start; /* This aligns children to the top */
    display: flex;
    align-items: flex-start;
    padding-top: 100px;
}
.static-image {
    max-width: 20vw;
    max-height: 20vh;
    min-width: 20vw;
    min-height: 20vh;
    width: 100%; /* This will make it responsive up to the max-width */
    height: auto; /* This will maintain the aspect ratio */
}
.product-image-container {
    /* Your styles for image */

    flex: 1; /* Adjust this value to give more or less space to the image */
    height: 50vh; /* This sets the maximum height to half of the viewport height */
    display: flex;
    justify-content: flex-end; /* This will align the image to the right */
    padding-right: 5%; /* Replace with your desired padding value */

}
.product-display-container {
    /* Your styles for product display */
    flex: 2;
    max-width: 50%; /* Optional: adjust this value as needed */

}



</style>
