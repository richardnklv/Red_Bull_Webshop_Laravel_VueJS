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

@media (max-width: 840px) {
    .home-container {
        //grid-template-columns: 1fr !important;
        //grid-template-rows: auto !important;
        display: flex !important;
        flex-direction: column !important;
        min-height: 100vh !important;

    }
    .logo-image {
        padding: 10px 15px 10px;
        min-height: 50px;

    }

    .product-display-container {
        max-width: 85vw;
        padding: 0 15px 0;
    }
    .product-image-container {
        min-width: 350px;
        padding: 0 15px 0;

    }
    .static-image {
        //min-width: 250px;
        //max-height: 100% !important;
        //max-height: 100% !important;
        //width: auto;
        object-fit: contain !important;
    }

}


.home-container {
    display: grid;
    grid-template-columns: 3.5fr 8fr 7.5fr 3.5fr;
    grid-template-rows: 1fr 2fr 16fr;
    background-color: #363636;
    height: 100vh;
    //width: 100vw;
    //height: 100vh;
    //justify-content: center;
    //align-items: start;
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

    //max-width: calc((6.5/22.5)*100vw);
    //max-height: 20vh;
    //min-width: calc((5.5/22.5)*100vw);
    //min-height: 20vh;
    max-height: 100% !important;

}
.product-image-container {

    grid-column: 2 / 3;
    grid-row: 3 / 4;
    //flex: 1;
    //height: 50vh;
    //display: flex;
    //height: 30vh;
    width: 30vw;
    justify-content: start;
    //object-fit: contain !important;
    //padding-right: 5%;

}
.product-display-container {

    //flex: 2;
    grid-column: 3 / 4;
    grid-row: 3 / 4;
    min-width: calc((6.5/22.5)*100vw);

}
.price-display.price-display.after.price {
    font-family: CoupletCF, sans-serif;
    font-weight: bold;
    color: #ffa800;
}





</style>
