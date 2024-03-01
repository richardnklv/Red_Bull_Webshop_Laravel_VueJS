<template>
    <div class="product-display" v-if="product">
        <product-info class="product-info"
                      :product="product"
                      :sku="fullSku"></product-info>
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
        <div class="extra-option-container">
            <input type="checkbox"
                   id="extraOption"
                   class="extra-option-checkbox"
                    v-model="extraOptionSelected"
            >
            <label for="extraOption" class="extra-option-label">
                <span class="extra-option-text">Extra option + €5,55</span>
            </label>
        </div>
        <order-button class="order-button"
                      :productName="product.name"
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
            extraOptionSelected: false,
        };
    },
    mounted() {
        this.fetchProduct();
        this.updateSKU();
    },
    watch: {
      extraOptionSelected(newVal, oldVal) {
          if (newVal !== oldVal) {
              this.calculatePrice();
          }
      }
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
                if (this.extraOptionSelected) {
                    price += 5.55;
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

        updateSKU(sku) {

            this.fullSku = this.base_Sku + sku;
            console.log('UpdateSKU: ', this.fullSku) // works

        },


    }
}
</script>

<style>
.extra-option-container {
    display: flex;
    align-items: center;
    color: #949494; /* White text */
    //padding: 8px 12px; /* Padding around the text */
    border-radius: 4px; /* Rounded corners */
    font-size: 12px; /* Font size */
    font-family: TafelSans, sans-serif; /* Font family */

}

.extra-option-text {
    //margin-right: 17px; /* Space between the text and price */
    margin-top: 0.5px;
    vertical-align: middle;
}

.extra-option-price {
}
.extra-option-checkbox {
    margin-right: 10px;
    cursor: pointer;
}
.extra-option-label {

    display: flex;
    align-items: center; /* Center label text and price vertically */
    cursor: pointer; /* Pointer cursor on hover */
    vertical-align: middle;
}

</style>
