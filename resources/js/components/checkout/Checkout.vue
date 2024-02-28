<template>
    <div>
        <h1>Thank you for your order!</h1>
        <price-checkout
            :totalPrice="totalPrice"
        ></price-checkout>
        <p>Product ID: {{ productId }}</p>
        <p>Full SKU: {{ sku }}</p>
        <p>Total Price: {{ totalPrice }}</p>



    </div>
</template>

<script>
import ProductDisplay from "@/components/ProductDisplay.vue";
import PriceDisplay from "@/components/product/PriceDisplay.vue";
import PriceCheckout from "@/components/checkout/PriceCheckout.vue";

export default {
    name: 'Checkout',
    components: {PriceCheckout, ProductDisplay},

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

<style>

</style>
