<template></template>
<!--<template>-->

<!--    <div class="checkout-container">-->
<!--        <div class="header-checkout">-->
<!--            <div class="header"></div>-->
<!--            <div class="header-line"></div>-->
<!--        </div>-->
<!--        <router-link :to="{ name: 'Home' }"-->
<!--        class="logo">-->
<!--            <img src="../../../css/logo-on-black-edited.svg"-->
<!--                class="logo-image"-->
<!--                alt="Logo image">-->
<!--        </router-link>-->
<!--        <div class="product-display-checkout">-->
<!--            <h1 class="thank-you">Thank you for your order</h1>-->
<!--            <span class="amount">1x</span>-->
<!--            <div class="image-container-checkout">-->
<!--                <img src="../../../css/93290991_4072438332.jpeg"-->
<!--                     class="image-checkout"-->
<!--                     alt="Product image" />-->
<!--            </div>-->

<!--            <div class="product-information-checkout">-->
<!--                <product-info-checkout class="product-info-checkout"-->
<!--                    :productName="productName"-->
<!--                    :sku="sku"-->
<!--                ></product-info-checkout>-->
<!--                <price-checkout class="price-checkout"-->
<!--                    :totalPrice="totalPrice"-->
<!--                ></price-checkout>-->
<!--            </div>-->

<!--        </div>-->
<!--    </div>-->

<!--</template>-->

<!--<script>-->
<!--import ProductDisplay from "@/components/ProductDisplay.vue";-->
<!--import PriceCheckout from "@/components/checkout/PriceCheckout.vue";-->
<!--import ProductInfoCheckout from "@/components/checkout/ProductInfoCheckout.vue";-->
<!--import ProductImage from "@/components/product/ProductImage.vue";-->
<!--import Header from "@/components/page/Header.vue";-->

<!--export default {-->
<!--    name: 'Checkout',-->
<!--    components: {Header, ProductImage, PriceCheckout, ProductDisplay, ProductInfoCheckout},-->

<!--    props: {-->
<!--        productId: Number,-->
<!--        sku: String,-->
<!--        totalPrice: Number,-->
<!--    },-->
<!--    mounted() {-->
<!--        this.productId = this.$route.query.productId;-->
<!--        this.sku = this.$route.query.sku;-->
<!--        this.totalPrice = this.$route.query.totalPrice;-->
<!--        this.productName = this.$route.query.productName;-->

<!--        console.log("AAAAAA", this.productName);-->
<!--        console.log('Product ID:', this.productId);-->
<!--        console.log('SKU:', this.sku);-->
<!--    },-->
<!--    data() {-->
<!--        return {-->
<!--            productId: '',-->
<!--            sku: '',-->
<!--            totalPrice: '',-->
<!--            productName: '',-->
<!--            orders: [],-->
<!--        };-->
<!--    },-->
<!--    methods: {-->
<!--        async fetchOrders() {-->
<!--            try {-->
<!--                const response = await axios.get('api/orders');-->
<!--                this.orders = response.data.order;-->
<!--            } catch (error) {-->
<!--                console.log('Failed to fetch orders', error);-->
<!--            }-->
<!--        }-->
<!--    },-->

<!--};-->
<!--</script>-->

<!--<style scoped>-->
<!--@font-face {-->
<!--    font-family: Okomito;-->
<!--    src: url('resources/css/Okomito-Bold.ttf') format('truetype');-->
<!--    font-weight: bold;-->
<!--}-->
<!--@font-face {-->
<!--    font-family: NeueMontreal;-->
<!--    src: url('resources/css/NeueMontreal-Medium.otf') format('truetype');-->
<!--}-->
<!--@font-face {-->
<!--    font-family: Inter;-->
<!--    src: url('resources/css/Inter-Bold.ttf') format('truetype');-->
<!--    font-weight: bold;-->
<!--}-->
<!--@media (max-width: 1000px) {-->
<!--    .checkout-container {-->
<!--        //grid-template-columns: 1fr !important;-->
<!--        //grid-template-rows: auto !important;-->
<!--        display: flex !important;-->
<!--        flex-direction: column !important;-->
<!--    }-->

<!--    /* Adjust the layout of grid items accordingly */-->
<!--    .product-display-checkout {-->
<!--        display: flex;-->
<!--        flex-direction: row;-->
<!--    }-->

<!--}-->
<!--@media(max-width: 460px) {-->
<!--    .checkout-container {-->
<!--        display: flex !important;-->
<!--        flex-direction: column !important;-->
<!--    }-->
<!--    .header {-->
<!--        order: 1 !important;-->
<!--    }-->
<!--    .logo-image {-->
<!--        margin-top: 20px;-->
<!--        order: 2 !important;-->
<!--    }-->
<!--    .product-display-checkout {-->
<!--        display: flex !important;-->
<!--        flex-direction: column !important;-->
<!--        max-height: 80vh !important;-->
<!--        order: 3;-->

<!--        //overflow: hidden;-->
<!--    }-->
<!--    .thank-you {-->
<!--        padding-top: 5vh;-->
<!--        order: 1;-->
<!--        margin-bottom: 5vh !important;-->
<!--    }-->
<!--    .image-container-checkout {-->
<!--        order: 3;-->
<!--    }-->
<!--    .amount {-->
<!--        visibility: hidden;-->
<!--        //align-self: center;-->
<!--    }-->
<!--    .product-information-checkout {-->
<!--        order: 4;-->
<!--        min-height: 30vh !important;-->
<!--        margin-top: 10px;-->
<!--    }-->
<!--}-->

<!--.checkout-container {-->
<!--    display: grid;-->
<!--    //height: 100vh;-->
<!--    //width: 100vw;-->
<!--    background-color: #363636;-->
<!--    grid-template-columns: 3.5fr 11.5fr 8.5fr;-->
<!--    //grid-template-rows: 100vh;-->
<!--    grid-template-rows: 1fr 3fr 26fr;-->
<!--    height: 100vh !important;-->
<!--    max-width: 100vw !important;-->
<!--    overflow: hidden;-->


<!--}-->
<!--.header-checkout {-->
<!--    grid-column: 1 / 4;-->
<!--    grid-row: 1 / 1;-->
<!--    height: 42px;-->
<!--    grid-template-rows: 30px 2px;-->
<!--    grid-template-columns: 1fr;-->
<!--}-->

<!--.header {-->
<!--    grid-column: 1 / 1;-->
<!--    grid-row: 1 / 1;-->
<!--    background-color: #000000;-->
<!--    height: 30px;-->
<!--}-->
<!--.header-line {-->
<!--    grid-column: 1 / 1;-->
<!--    grid-row: 1 / 1;-->
<!--    background-color: #ffa800;-->
<!--    height: 2px;-->
<!--}-->
<!--.logo-image {-->
<!--    max-height: 35px;-->
<!--    width: auto;-->
<!--}-->
<!--.logo {-->
<!--    grid-column: 2 / 3;-->
<!--    grid-row: 2 / 3;-->
<!--    max-height: calc((3/28)*100vh);-->
<!--    display: flex;-->
<!--    align-items: center;-->
<!--    vertical-align: middle;-->
<!--}-->



<!--.product-display-checkout {-->
<!--    grid-column: 2 / 3;-->
<!--    grid-row: 3 / 4;-->
<!--    max-height: calc((9/13.7)*100vh);-->
<!--    display: grid;-->
<!--    grid-template-rows: calc((1.8/13.5)*100vh) calc((1.5/13.5)*100vh) calc((10.5/13.5)*100vh);-->
<!--    //grid-template-rows: 100px;-->
<!--    //grid-template-columns: 0.6fr 2.5fr 11fr;-->
<!--    grid-template-columns: 1.3fr 2.4fr 7.3fr;-->
<!--    justify-content: center;-->
<!--    //position: absolute;-->
<!--    //left: 20%;-->
<!--    box-sizing: border-box;-->
<!--    //padding-bottom: 100px !important;-->

<!--}-->
<!--.thank-you {-->
<!--    color: #ffffff;-->
<!--    font-family: Okomito, sans-serif;-->
<!--    font-size: 37px;-->
<!--    //margin-bottom: 100px;-->
<!--    grid-column: 1 / 4;-->
<!--    grid-row: 1 / 2;-->
<!--    box-sizing: border-box;-->

<!--}-->
<!--.amount {-->
<!--    display: flex;-->
<!--    align-items: center;-->
<!--    vertical-align: middle;-->
<!--    grid-column: 1 / 1;-->
<!--    grid-row: 2 / 2;-->
<!--    font-family: Okomito, sans-serif;-->
<!--    font-weight: bold;-->
<!--    font-size: 25px;-->
<!--    color: #ffffff;-->
<!--    box-sizing: border-box;-->
<!--}-->
<!--.image-container-checkout {-->
<!--    //max-height: calc((1.5/13.5)*100vh);-->
<!--    //max-height: calc((150/2234)*100vh) !important;-->
<!--    //min-height: calc((150/2234)*100vh) !important;-->
<!--    grid-column: 2 / 2;-->
<!--    grid-row: 2 / 2;-->
<!--    box-sizing: border-box;-->
<!--}-->
<!--.image-checkout {-->
<!--    //min-height: calc((1.5/13.5)*100vh) !important;-->
<!--    //max-height: calc((1.4/13.7)*100vh);-->
<!--    max-height: 100%;-->
<!--    object-fit: cover;-->
<!--    width: auto;-->
<!--    border-radius: 3px;-->
<!--    //object-fit: contain;-->
<!--}-->
<!--.product-information-checkout {-->
<!--    display: grid;-->
<!--    //height: calc((1.4/13.7)*100vh) !important;-->
<!--    max-height: calc((1.4/13.7)*100vh);-->
<!--    grid-column: 3 / 4;-->
<!--    grid-row: 2 / 2;-->
<!--    //object-fit: contain !important;-->
<!--    //grid-template-rows: 3.7fr 1.2fr 1fr;-->
<!--    grid-template-rows: 2.5fr 2.5fr 1fr;-->
<!--    grid-template-columns: 1fr;-->
<!--}-->
<!--.product-info-checkout {-->
<!--    //object-fit: contain !important;-->
<!--    grid-column: 1 / 1;-->
<!--    grid-row: 1 / 1;-->
<!--    max-height: calc(((5/6)*1.4/13.7)*100vh) !important;-->

<!--}-->
<!--.price-checkout {-->
<!--    //object-fit: contain !important;-->
<!--    //padding-top: 6px;-->
<!--    grid-column: 1 / 1;-->
<!--    grid-row: 2 / 2;-->
<!--    max-height: calc(((1/6)*1.4/13.7)*100vh) !important;-->
<!--    font-family: NeueMontreal, sans-serif;-->
<!--    //font-weight: bold;-->
<!--}-->


<!--</style>-->
