<template>
    <div>
        <h1>Thank you for your order!</h1>
        <p>Product ID: {{ productId }}</p>



    </div>
</template>

<script>
export default {
    name: 'Checkout',
    props: {
        productId: Number,
    },
    mounted() {
        //
        console.log('Product ID:', this.productId);

    }
};
</script>
