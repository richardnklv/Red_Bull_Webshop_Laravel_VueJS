<template>
    <div class="product-display" v-if="product">
        <product-info class="product-info" :product="product" :sku="fullSku"></product-info>
        <price-display class="price-display"
                       :product="product"
                       :display-price="product.base_price"
        ></price-display>

        <product-options class="product-options"
                         :optionTypes="product.option_types"
                         @option-changed="updateSKU"
                         @option-selected="handleOptionSelected"
                         @update-price="calculatePrice"
        ></product-options>

        <order-button class="order-button"
                      :productId="product.id"
                      :sku="fullSku"
                      :totalPrice="totalPrice"

        >
        </order-button>
<!--        <order-button class="order-button" :product="product" :productId="product.id" :fullSku="fullSku"  @orderNow="handleOrderNow"></order-button>-->
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
    components: {OrderButton, ProductInfo, PriceDisplay, ProductOptions},
    props: {
        product: null,
        productId: Number,
        required: true
    },
    data() {
        return {
            product: null,
            additionalCosts: 0, // calculated based on selected options
            selectedOptions: {},
            fullSku: '',
            base_Sku: '',
            totalPrice: Number, // total price
        };
    },
    mounted() {
        this.fetchProduct();
        this.updateSKU();
        // this.calculatePrice();
    },
    methods: {
        calculatePrice() {
            // product is not null
            if (this.product) {
                let price = parseFloat(this.product.base_price);
                console.log(price); //works
                console.log("selectedOption", this.selectedOptions);
                for (let optionTypeId in this.selectedOptions) {
                    const optionValueId = this.selectedOptions[optionTypeId];
                    console.log("////", optionValueId); // working
                    const optionType = this.product.option_types.find(ot => ot.id == optionTypeId);
                    if (optionType) {
                        const optionValue = optionType.option_values.find(ov => ov.id == optionValueId);
                        if (optionValue && optionValue.additional_cost) {
                            console.log("///", optionValue, optionValue.additional_cost);
                            price += parseFloat(optionValue.additional_cost);
                        }
                    }
                }
                this.totalPrice = price.toFixed(2);
                console.log("PRICE", price);
                console.log("TOTAL PRICE:", this.totalPrice);
            }

        },
        handleOptionSelected(selectedOptions) {
            this.selectedOptions = selectedOptions;
            this.calculatePrice();
        },
        fetchProduct() {
            axios.get(`/api/product/${this.productId}`)
                .then(response => {
                    this.product = response.data;
                    this.fullSku = this.product.base_sku;
                    this.base_Sku = this.product.base_sku;
                    this.calculatePrice();
                })
                .catch(error => {
                    console.error('Error fetching product: ', error);
                });

        },

        // calculatePrice(selectedOptions) {
        //     let price = parseFloat(this.product.base_price);
        //
        //     // Object.values(this.selectedOptions).forEach(optionValueId => {
        //     //     const optionValue = this.findOptionValueById(optionValueId);
        //     //     if (optionValue) {
        //     //         price += parseFloat(optionValue.additional_cost);
        //     //     }
        //     // })
        //
        //     for (const optionTypeId of Object.keys(selectedOptions)) {
        //         const optionType = this.product.option_types.find(
        //             ot => ot.id === parseInt(optionTypeId)
        //         );
        //         // if found
        //         if (optionType) {
        //             const optionValue = optionType.option_values.find(
        //                 ov => ov.id === selectedOptions[optionTypeId]
        //             );
        //             if (optionValue && optionValue.additional_cost) {
        //                 price += parseFloat(optionValue.additional_cost);
        //             }
        //         }
        //     }
        //     this.totalPrice = price.toFixed(2);
        // },
        updateTotalPrice(newPrice) {
            this.totalPrice = newPrice;
        },
        findOptionValueById(optionValueId) {
            // find and return the option value by its id
            for (const optionType of this.product.option_types) {
                const optionValue = optionType.option_values.find(
                    value => value.id === optionValueId
                );
                if (optionValue) return optionValue;
            }
            return null;
        },
        updateSKU(sku) {

            this.fullSku = this.base_Sku + sku;
            console.log('UpdateSKU: ', this.fullSku) // works

        },
        // handleOrderNow() {
        //     // example
        //     this.$router.push({
        //         path: '/checkout',
        //         //query: { product_id: productId}
        //         query: { product: JSON.stringify(this.product), options: JSON.stringify(this.selectedOptions) }
        //
        //     });
        // }

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
