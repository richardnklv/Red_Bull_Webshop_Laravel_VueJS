<template>
    <div>
        <h1>Thank you for your order!</h1>
        <p>Product ID: {{ productId }}</p>
        <p>Full SKU: {{ sku }}</p>



    </div>
</template>

<script>
export default {
    name: 'Checkout',

    props: {
        productId: Number,
        sku: String,
    },
    mounted() {
        this.productId = this.$route.query.productId;
        this.sku = this.$route.query.sku;
        console.log('Product ID:', this.productId);
        console.log('SKU:', this.sku);
    },
    data() {
        return {
            productId: '',
            sku: '',
        };
    },
    // data() {
    //     return {
    //         sku1: this.$route.params.sku,
    //     }
    // },

};
</script>
