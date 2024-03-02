<template>
    <div class="price-checkout-component">
        <p class="price-checkout">
            € {{ totalPrice }}
        </p>
    </div>
</template>

<script>
export default {
    name: 'PriceCheckout',
    props: {
        totalPrice: Number,
    }
}
</script>

<style>

@font-face {
    font-family: Inter;
    src: url('resources/css/Inter-Bold.ttf') format('truetype');
    font-weight: bold;
}
@font-face {
    font-family: mytupi;
    src: url('resources/css/mytupiBOLD.ttf') format('truetype');
    font-weight: bold;
}
@font-face {
    font-family: NeueMontreal;
    src: url('resources/css/NeueMontreal-Bold.otf') format('truetype');
    font-weight: bold;
}
.price-checkout {
    font-family: NeueMontreal, sans-serif;
    //font-weight: bold;
    color: #ffa800; /* Orange color for the price */
    font-size: 20px;
    font-weight: bold;
}
</style>
