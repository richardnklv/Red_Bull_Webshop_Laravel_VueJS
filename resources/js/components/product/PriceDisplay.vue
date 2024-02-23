<template>
    <div class="price-display">
        <p>YOUR PRICE</p>
        <p class="price">${{ product.base_price }}</p>
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

<style>
.price {
    font-weight: bold;
}

</style>
