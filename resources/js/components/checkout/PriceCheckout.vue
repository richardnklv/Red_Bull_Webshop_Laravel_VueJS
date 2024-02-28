<template>
    <div class="price-checkout-component">
        <p class="price-checkout">
            $ {{ totalPrice }}
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
