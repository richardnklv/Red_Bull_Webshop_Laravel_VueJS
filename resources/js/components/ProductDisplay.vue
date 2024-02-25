<template>
    <div class="product-display" v-if="product">
        <product-info class="product-info" :product="product" :sku="fullSku"></product-info>
        <price-display class="price-display" :product="product"></price-display>
        <product-options class="product-options" :optionTypes="product.option_types" @option-changed="updateSKU" @update-price="handlePriceUpdate"></product-options>
        <order-button class="order-button" :product="product"></order-button>
    </div>
</template>


<script>
import axios from "axios";
import ProductInfo from "@/components/product/ProductInfo.vue";
import PriceDisplay from "@/components/product/PriceDisplay.vue";
import ProductImage from "@/components/product/ProductImage.vue";
import ProductOptions from "@/components/ProductOptions.vue";
import OrderButton from "@/components/OrderButton.vue";

export default {
    name: 'ProductDisplay',
    components: {OrderButton, ProductInfo, PriceDisplay, ProductImage, ProductOptions},
    props: {
        productId: Number,
        required: true
    },
    data() {
        return {
            product: null,
            additionalCosts: 0, // calculated based on selected options
            selectedOptions: {},
            fullSku: '',
        };
    },
    mounted() {
        this.fetchProduct();
        this.updateSKU();
    },
    methods: {
        fetchProduct() {
            axios.get(`/api/product/${this.productId}`)
                .then(response => {
                    this.product = response.data;
                    this.fullSku = this.product.base_sku;
                })
                .catch(error => {
                    console.error('Error fetching product: ', error);
                });

        },
        handlePriceUpdate(selectedOptions) {
            // handle logic
        },
        // updateSKU(optionTypeId, optionValueId) {
        //     // handle logic
        //    // console.log(optionValueId);
        //
        //     //this.fullSku = `${this.product.base_sku}-${optionTypeId}-${optionValueId}`
        //
        // },

        updateSKU(sku) {
            this.fullSku = this.product.base_sku + sku;
        }

    }
}
</script>

<style>
.product-display {

}
.product-info {

}
.price-display {

}
.product-options {

}

</style>
