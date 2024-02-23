<template>
    <div class="product-display" v-if="product">
        <product-info :product="product"></product-info>
        <price-display :product="product"></price-display>
        <product-image></product-image>
        <product-options :optionTypes="product.option_types" @update-price="handlePriceUpdate"></product-options>
    </div>
</template>


<script>
import axios from "axios";
import ProductInfo from "@/components/product/ProductInfo.vue";
import PriceDisplay from "@/components/product/PriceDisplay.vue";
import ProductImage from "@/components/product/ProductImage.vue";
import ProductOptions from "@/components/ProductOptions.vue";

export default {
    name: 'ProductDisplay',
    components: {ProductInfo, PriceDisplay, ProductImage, ProductOptions},
    props: {
        productId: Number,
        required: true
    },
    data() {
        return {
            product: null,
            additionalCosts: 0 // calculated based on selected options
        };
    },
    mounted() {
        this.fetchProduct();
    },
    methods: {
        fetchProduct() {
            axios.get(`/api/product/${this.productId}`)
                .then(response => {
                    this.product = response.data;
                })
                .catch(error => {
                    console.error('Error fetching product: ', error);
                });
        },
        handlePriceUpdate(selectedOptions) {
            // handle logic
        }
    }
}
</script>

<style>

</style>
