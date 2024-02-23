<template>
    <div class="product-options">
        <div v-for="optionType in optionTypes" :key="optionType.id">
            <h3>{{ optionType.type }}</h3>
            <select v-model="selectedOptions[optionType.type]">
                <option
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
export default {
    name: 'ProductOptions',
    props: {
        optionTypes: {
            type: Array
        }
    },
    data() {
        return {
            selectedOptions: {}
        };
    },
    methods: {
        updatePrice() {
            this.$emit('update-price', this.selectedOptions);
        }
    },
    watch: {
        selectedOptions: {
            handler() {
                this.updatePrice();
            },
            deep: true
        }
    }
}
</script>

<style scoped>
</style>
