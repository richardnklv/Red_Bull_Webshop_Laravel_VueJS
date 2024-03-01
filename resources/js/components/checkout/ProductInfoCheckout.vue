<template>
    <div class="product-info-checkout">
        <h1 class="product-name-checkout">{{ productName }}</h1>
        <p class="sku-checkout">Sku: {{ sku }}</p>
    </div>
</template>

<script>
export default {
    name: 'ProductInfoCheckout',
    props: {
        productName: '',
        sku: String,
    }
}
</script>

<style scoped>
@font-face {
    font-family: Okomito;
    src: url('resources/css/Okomito-Bold.ttf') format('truetype');
    font-weight: bold;
}
@font-face {
    font-family: CoupletCF;
    src: url("resources/css/Fontspring-DEMO-coupletcf-regular.otf") format('truetype');
    //font-weight: bold;
}

.product-info-checkout {
    //display: flex;
    //flex-direction: column;
    display: grid;
    //align-items: flex-start;
    max-height: calc(((9/14)*1.4/13.7)*100vh) !important;;
    height: calc(((9/14)*1.4/13.7)*100vh) !important;;
    align-items: start;
    //grid-template-rows: 1.7fr 2fr;
    //grid-template-rows: 4fr 1.7fr;
    grid-template-rows: 5fr 5fr;
    grid-template-columns: 1fr;

}
.product-name-checkout {
    //flex: 1;
    color: #ffffff;
    font-family: Okomito,sans-serif;
    font-weight: bold;
    font-size: 15px;
    line-height: 1.3;
    //margin-right: 30vw;
    //padding-bottom: calc((19/2234)*100vh);
    grid-row: 1 / 1;
    grid-column: 1 / 1;
    //padding-bottom: 7px;

}
.sku-checkout {
    color: #9b9b9b;
    font-size: 14px;
    //font-weight: bold;
    font-family: sans-serif;
    //padding-bottom: calc((25/2234)*100vh);
    grid-row: 2 / 2;
    grid-column: 1 / 1;
}




</style>
