<template>
    <div class="product-info">
        <h1 class="product-name">{{ product.name }}</h1>
        <p class="sku">Sku: {{ sku }}</p>
        <p class="description">{{ product.description }}</p>
    </div>
</template>

<script>
export default {
    name: 'ProductInfo',
    props: {
        product: Object,
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
.product-info {
    display: flex;
    flex-direction: column;
    //align-items: flex-start;
    //min-width: 40vw;
    max-width: 87%;

}
.product-name {
    flex: 1;
    color: #ffffff;
    font-family: Okomito,sans-serif;
    font-weight: bold;
    font-size: 34px;
    line-height: 1.3;
    //margin-right: 30vw;
    padding-bottom: 13px;

}
.sku {
     //color: #686868;
    color: #9b9b9b;
     font-size: 13px;
     font-family: sans-serif;
    padding-bottom: 15px;
 }
.description {
    color: #ffffff;
    //padding-right: 0;
    font-size: 13px;
    font-family: CoupletCF, sans-serif;
    line-height: 1.45;
    padding-bottom: 10px;


}



</style>
