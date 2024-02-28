<template>
    <div>
        <h1>Thank you for your order!</h1>
        <p>Product ID: {{ productId }}</p>
        <p>Full SKU: {{ sku }}</p>
        <p>Total Price: {{ totalPrice }}</p>



    </div>
</template>

<script>
export default {
    name: 'Checkout',

    props: {
        productId: Number,
        sku: String,
        totalPrice: Number,
    },
    mounted() {
        this.productId = this.$route.query.productId;
        this.sku = this.$route.query.sku;
        this.totalPrice = this.$route.query.totalPrice;

        console.log('Product ID:', this.productId);
        console.log('SKU:', this.sku);
    },
    data() {
        return {
            productId: '',
            sku: '',
            totalPrice: '',
        };
    },
    // data() {
    //     return {
    //         sku1: this.$route.params.sku,
    //     }
    // },

};
</script>
