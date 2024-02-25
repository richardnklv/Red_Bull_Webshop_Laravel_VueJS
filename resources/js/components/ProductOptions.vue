<template>
    <div class="product-options">
        <div v-for="optionType in optionTypes" :key="optionType.id">

            <select v-model="selectedOptions[optionType.id]"
                    class="options"
                    @change="updateOption(optionType)"
            >
                <option disabled value=""
                        selected v-if="!selectedOptions[optionType.id]"
                        >
                    {{ optionType.type }}</option>
                <option
                    class="options-content"
                    v-for="optionValue in optionType.option_values"
                    :key="optionValue.id"
                    :value="optionValue.id">
                    {{ optionValue.value }} (+${{ optionValue.additional_cost }})
                </option>
            </select>
        </div>
    </div>
</template>

<script>
import * as selectedOptions from "autoprefixer";

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
        };
    },
    methods: {
        updatePrice() {
            // handle logic
        },
        updateOption(optionType) {
            // handle logic
            console.log('Selected Option Value ID:', this.selectedOptions[optionType.type], 'for Option Type:', optionType.type);
            console.log(this.selectedOptions);
            let skuParts = '';
            for (let optionType in this.selectedOptions) {
                const optionValueId = this.selectedOptions[optionType];
                console.log(optionValueId);
                skuParts += (`-${optionType}-${optionValueId}`);

            }
            this.fullSku = skuParts;
            this.$emit('option-changed', this.fullSku)
            console.log(this.fullSku);
            // this.$emit('option-changed',
            //     optionType.id,
            //     this.selectedOptions[optionType.type],
            // )
        },

    },


}
</script>

<style scoped>
/* Styling for the select element */
.options {
    -webkit-appearance: none; /* for Chrome, Safari */
    -moz-appearance: none;    /* for Firefox */
    appearance: none;         /* for modern browsers */
    background-color: #727272; /* Grey color for the selection options */
    color: #000000; /* Black color for the selected text */
    border: 1px solid #000000; /* Black border color */
    /* Custom arrow styling */
    background-image: url('data:image/svg+xml;utf8,<svg fill="%23000" height="30" viewBox="0 0 24 24" width="30" xmlns="http://www.w3.org/2000/svg"><path d="M7 10l5 5 5-5z"/></svg>');
    background-repeat: no-repeat;
    background-position: right 10px center;
    background-size: 12px;
    height: 35px;
    width: 300px;
    border-radius: 3px;
    margin-bottom: 10px;
}

/* Styling for the dropdown options */
.options-content {
    background-color: #727272; /* Grey color to match the select background */
    color: #000000; /* White color for the dropdown options text */
}

/* Remove IE arrow */
.options::-ms-expand {
    display: none; /* For IE11 */
}

/* Style for placeholder, if applicable */
.options::placeholder {
    color: #ffffff;
}

/* You can remove this if it's not applicable */
.options-content[selected] {
    color: #000000;
}
.options::-ms-expand {
    display: none;
}

/* Style for the first option that acts as a placeholder */
.options option:first-of-type {
    color: #000000; /* Black color for the placeholder option */
}

/* Style for the first option that acts as a placeholder when not selected */
.options option:first-of-type:not(:checked) {
    color: #000000; /* Black color for the placeholder option when not selected */
}

</style>
