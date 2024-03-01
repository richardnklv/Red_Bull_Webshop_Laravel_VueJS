<template>
    <div class="product-options">
        <div v-for="(optionType, index) in optionTypes"
             :key="optionType.id"
        >

            <select v-model="selectedOptions[optionType.id]"
                    :disabled="index !== 0 && !isFirstOptionSelected()"
                    class="options"
                    @change="updateOption(optionType)"
            >
                <option disabled value=""
                        selected v-if="!selectedOptions[optionType.id]"
                        class="option-values"
                >
                    {{ optionType.type }}</option>
                <option
                    class="options-content"
                    v-for="optionValue in optionType.option_values"
                    :key="optionValue.id"
                    :value="optionValue.id"

                >
                    {{ optionValue.value }} (+${{ optionValue.additional_cost }})
                </option>
            </select>
        </div>
    </div>
</template>

<script>

export default {
    name: 'ProductOptions',
    props: {
        optionTypes: {
            type: Array
        }
    },
    data() {
        return {
            product: null,
            selectedOptions: {},
            fullSku: '',
            totalPrice: Number,
        };
    },

    methods: {

        updateOption(optionType) {
            // handle logic
            console.log('Selected Option Value ID:', this.selectedOptions[optionType.type], 'for Option Type:', optionType.type);
            console.log(this.selectedOptions);
            let skuParts = '';
            for (let optionType in this.selectedOptions) {
                const optionValueId = this.selectedOptions[optionType];
                console.log(optionValueId); // works
                skuParts += (`${optionType}${optionValueId}`);

            }

            this.fullSku = skuParts;
            this.$emit('option-changed', this.fullSku)

            this.$emit('option-selected', this.selectedOptions);
            this.$emit('update-price', this.selectedOptions);
        },
        isFirstOptionSelected() {
            const firstOptionType = this.optionTypes[0];
            return !!this.selectedOptions[firstOptionType.id];
        },
    }
}


</script>

<style scoped>
.options {
    -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    background-color: #727272;
    color: #000000 !important;
    border: 1px solid #000000;
    font-size: 14px;
    align-items: center;
    padding: 4px 8px;
    line-height: 1.5;
    background-image: url('data:image/svg+xml;utf8,<svg fill="%23000" height="30" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
    background-repeat: no-repeat;
    background-position: right 10px center;
    background-size: 12px;
    height: 35px;
    width: 300px;
    border-radius: 3px;
    margin-bottom: 10px;
    font-family: CoupletCF, sans-serif;
}
.options option[value=""][disabled] {
    color: #000000 !important;
}

.options-content {
    background-color: #727272;
    color: #000000 !important;

}
.option-values option{
    color: #ffffff !important;
}
.options:hover{
    background-color: #999999 !important;
    color: #000000 !important;
}



.options:focus {
    --tw-ring-color: #fff;
    //outline: 1px solid var(--tw-ring-color); /* This applies the outline with the color defined in --tw-ring-color */
}

/* Remove IE arrow */
.options::-ms-expand {
    display: none; /* For IE11 */

}

/* Style for placeholder, if applicable */
.options::placeholder {
    color: #000000;
}


.options-content[selected] {
    color: #000000;
}
.options::-ms-expand {
    display: none;
    color: #000000;
}

/* Style for the first option that acts as a placeholder */
.options option:first-of-type {
    color: #000000 !important;
}

/* Style for the first option that acts as a placeholder when not selected */
.options option:first-of-type:not(:checked) {
    color: #000000 !important;
}
.options option::backdrop {
    --tw-ring-color: #6b7280 !important;

}

</style>
