<template>
    <div class="price-display">
        <div class="previous">
            <p class="from">FROM</p>
            <p class="price-before">€ 1.999,99</p>
        </div>
        <div class="after">
            <p class="your-price">YOUR PRICE</p>
            <p class="price">€ {{ product.base_price }}</p>
        </div>
    </div>
</template>

<script>
export default {
    name: 'PriceDisplay',
    props: {
        product: Object
    }
}
</script>

<style scoped>
@font-face {
    font-family: TafelSans;
    src: url('resources/css/TafelSansPro-Regular.ttf') format('truetype');
    font-weight: bold;
}
.previous {
    padding-right: 45px;
}
.price-display {
    display: flex;
    flex-direction: row;
    margin-bottom: 15px;

}
.your-price {
    //color: #727272;
    color: #9b9b9b;
    font-size: 10px;
    font-family: TafelSans, sans-serif;
    font-weight: bold;
}
.from {
    //color: #727272;
    color: #9b9b9b;
    font-size: 10px;
    font-family: TafelSans, sans-serif;
    font-weight: bold;
    padding-bottom: 4px;
}
.price {
    font-family: CoupletCF, sans-serif;
    font-weight: bold;
    color: #ffa800;
}
.price-before {
    font-family: CoupletCF, sans-serif;
    text-decoration: line-through;
    //color: #727272;
    color: #9b9b9b;
    font-size: 12px;
}

</style>
