<template>
    <div class="checkout-container">
        <div class="header-checkout">
            <div class="header"></div>
            <div class="header-line"></div>
        </div>
        <router-link :to="{ name: 'Home' }"
        class="logo">
            <img src="../../../css/logo-on-black-edited.svg"
                class="logo-image"
                alt="Logo image">
        </router-link>
        <div class="left-bar"></div>

        <div class="product-display-checkout">
            <h1 class="thank-you">Thank you for your order</h1>
            <div class="amount">1x</div>
            <div class="image-container-checkout">
<!--                <product-image class="image-checkout"></product-image>-->
                <img src="../../../css/93290991_4072438332.jpeg"
                     class="image-checkout"
                     alt="Product image" />
            </div>
            <div class="product-information-checkout">
                <product-info-checkout class="product-info-checkout"
                    :productName="productName"
                    :sku="sku"
                ></product-info-checkout>
                <price-checkout class="price-checkout"
                    :totalPrice="totalPrice"
                ></price-checkout>
            </div>
            <div class="space-below"></div>

        </div>
        <div class="right-bar"></div>

    </div>
</template>

<script>
import ProductDisplay from "@/components/ProductDisplay.vue";
import PriceCheckout from "@/components/checkout/PriceCheckout.vue";
import ProductInfoCheckout from "@/components/checkout/ProductInfoCheckout.vue";
import ProductImage from "@/components/product/ProductImage.vue";
import Header from "@/components/page/Header.vue";

export default {
    name: 'Checkout',
    components: {Header, ProductImage, PriceCheckout, ProductDisplay, ProductInfoCheckout},

    props: {
        productId: Number,
        sku: String,
        totalPrice: Number,
    },
    mounted() {
        this.productId = this.$route.query.productId;
        this.sku = this.$route.query.sku;
        this.totalPrice = this.$route.query.totalPrice;
        this.productName = this.$route.query.productName;

        console.log("AAAAAA", this.productName);
        console.log('Product ID:', this.productId);
        console.log('SKU:', this.sku);
    },
    data() {
        return {
            productId: '',
            sku: '',
            totalPrice: '',
            productName: '',

        };
    },
    // data() {
    //     return {
    //         sku1: this.$route.params.sku,
    //     }
    // },

};
</script>

<style scoped>
@font-face {
    font-family: Okomito;
    src: url('resources/css/Okomito-Bold.ttf') format('truetype');
    font-weight: bold;
}
@font-face {
    font-family: NeueMontreal;
    src: url('resources/css/NeueMontreal-Medium.otf') format('truetype');
}
@font-face {
    font-family: Inter;
    src: url('resources/css/Inter-Bold.ttf') format('truetype');
    font-weight: bold;
}
.checkout-container {
    display: grid;
    //height: 100vh;
    //width: 100vw;
    background-color: #363636;
    grid-template-columns: 3.5fr 11.5fr 8.5fr;
    //grid-template-rows: 100vh;
    grid-template-rows: 1fr 3fr 26fr;
    height: 100vh !important;
    max-width: 100vw !important;
    overflow: hidden;
}
.header-checkout {
    grid-column: 1 / 4;
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
    vertical-align: middle;
}

.left-bar {
    grid-column: 1 / 1;
    grid-row: 1 / 4;
    padding-right: 0;
}
.right-bar {
    grid-column: 2 / 2;
    grid-row: 3 / 3;
    padding-left: 0;
}

.product-display-checkout {
    grid-column: 2 / 3;
    grid-row: 3 / 4;
    max-height: calc((1.4/13.7)*100vh) !important;
    display: grid;
    grid-template-rows: calc((1.5/13.5)*100vh) calc((1.5/13.5)*100vh) calc((10.5/13.5)*100vh);
    //grid-template-rows: 100px;
    //grid-template-columns: 0.6fr 2.5fr 11fr;
    grid-template-columns: 1.3fr 2.4fr 7.3fr;
    justify-content: center;
    //position: absolute;
    //left: 20%;

}
.thank-you {
    color: #ffffff;
    font-family: Okomito, sans-serif;
    font-size: 37px;
    margin-bottom: 100px;
    grid-column: 1 / 4;
    grid-row: 1 / 2;

}
.amount {
    display: flex;
    align-items: center;
    vertical-align: middle;
    grid-column: 1 / 1;
    grid-row: 2 / 2;
    font-family: Okomito, sans-serif;
    font-weight: bold;
    font-size: 25px;
    color: #ffffff;
}
.image-container-checkout {
    //max-height: calc((1.5/13.5)*100vh);
    max-height: calc((150/2234)*100vh) !important;
    min-height: calc((150/2234)*100vh) !important;
    grid-column: 2 / 2;
    grid-row: 2 / 2;
}
.image-checkout {
    min-height: calc((1.5/13.5)*100vh) !important;
    max-height: calc((1.4/13.7)*100vh);
    width: auto;
    border-radius: 3px;
    //object-fit: contain;
}
.product-information-checkout {
    display: grid;
    //height: calc((1.4/13.7)*100vh) !important;
    max-height: calc((1.4/13.7)*100vh) !important;
    grid-column: 3 / 4;
    grid-row: 2 / 2;
    //object-fit: contain !important;
    //grid-template-rows: 3.7fr 1.2fr 1fr;
    grid-template-rows: 2.5fr 2.5fr 1fr;
    grid-template-columns: 1fr;
}
.product-info-checkout {
    //object-fit: contain !important;
    grid-column: 1 / 1;
    grid-row: 1 / 1;
    max-height: calc(((5/6)*1.4/13.7)*100vh) !important;

}
.price-checkout {
    //object-fit: contain !important;
    //padding-top: 6px;
    grid-column: 1 / 1;
    grid-row: 2 / 2;
    max-height: calc(((1/6)*1.4/13.7)*100vh) !important;
    font-family: NeueMontreal, sans-serif;
    //font-weight: bold;
}
.space-below {
    grid-column: 1 / 1;
    grid-row: 3 / 3;
}

</style>
