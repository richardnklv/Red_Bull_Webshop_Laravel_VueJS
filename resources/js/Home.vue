<template>
    <div class="home-container">
        <div class="header-home">
            <div class="header"></div>
            <div class="header-line"></div>
        </div>
        <router-link :to="{ name: 'Home' }"
                     class="logo">
            <img src="../../resources/css/logo-on-black-edited.svg"
                 class="logo-image"
                 alt="Logo image">
        </router-link>
        <div class="product-image-container">
            <product-image class="static-image"></product-image>
        </div>
        <div class="product-display-container">
            <product-display
                :productId=1
            ></product-display>
        </div>

    </div>
</template>
<script>
import ProductDisplay from "@/components/ProductDisplay.vue";
import ProductImage from "@/components/product/ProductImage.vue";
import PriceDisplay from "@/components/product/PriceDisplay.vue";


export default {
    name: 'Home',
    components: {
        PriceDisplay,
        ProductDisplay,
        ProductImage,
    },
};
</script>

<style scoped>


.home-container {
    display: grid;
    grid-template-columns: 3.5fr 8fr 7.5fr 3.5fr;
    grid-template-rows: 1fr 3fr 26fr;
    background-color: #363636; /* Dark background for the whole page */
    /* This enables flexbox layout */
    width: 100vw; /* 100% of the viewport width */
    max-height: 100vh; /* 100% of the viewport height */
    //justify-content: center; /* This centers the children horizontally */
    //align-items: start; /* This aligns children to the top */
    //display: flex;
    //align-items: flex-start;
    //overflow: hidden;
}
.header-home {
    grid-column: 1 / 5;
    grid-row: 1 / 1;
    height: 42px;
    grid-template-rows: 30px 2px;
    grid-template-columns: 1fr;
}

.header {
    grid-column: 1 / 1;
    grid-row: 1 / 1;
    background-color: #000000;
    height: 30px;
}
.header-line {
    grid-column: 1 / 1;
    grid-row: 1 / 1;
    background-color: #ffa800;
    height: 2px;
}
.logo-image {
    max-height: 35px;
    width: auto;
}
.logo {
    grid-column: 2 / 3;
    grid-row: 2 / 3;
    max-height: calc((3/28)*100vh);
    display: flex;
    align-items: center;
    vertical-align: center;
}
.static-image {

    max-width: calc((6.5/22.5)*100vw);
    //max-height: 20vh;
    min-width: calc((5.5/22.5)*100vw);
    min-height: 20vh;
    width: 100%; /* This will make it responsive up to the max-width */
    height: auto; /* This will maintain the aspect ratio */
}
.product-image-container {
    /* Your styles for image */
    grid-column: 2 / 3;
    grid-row: 3 / 4;
    //flex: 1; /* Adjust this value to give more or less space to the image */
    //height: 50vh; /* This sets the maximum height to half of the viewport height */
    //display: flex;
    justify-content: start; /* This will align the image to the right */
    //padding-right: 5%; /* Replace with your desired padding value */

}
.product-display-container {
    /* Your styles for product display */
    //flex: 2;
    grid-column: 3 / 4;
    grid-row: 3 / 4;
    min-width: calc((6.5/22.5)*100vw); /* Optional: adjust this value as needed */

}
.price-display.price-display.after.price {
    font-family: CoupletCF, sans-serif;
    font-weight: bold;
    color: #ffa800; /* Orange color for the price */
}




</style>
