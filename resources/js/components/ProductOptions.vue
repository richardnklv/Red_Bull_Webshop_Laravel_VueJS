<template>
    <div class="product-options">
        <div v-for="optionType in options" :key="optionType.id" class="option-group">
            <label :for="`option-${optionType.id}`">{{ optionType.name }}</label>
            <select :id="`option-${optionType.id}`" v-model="selectedOptions[optionType.name]" @change="updateOptions">
                <option v-for="option in optionType.values" :key="option.id" :value="option.id">
                    {{ option.name }} (+ {{ option.additional_cost }}
                </option>
            </select>
        </div>
    </div>

</template>
<script>
import {options} from "axios";

export default {
    props: {
        options: Array
    },
    data() {
        return {
            selectedOptions: {}
        };
    },
    methods: {
        updateOptions() {
            this.$emit('updatePrice', this.selectedOptions);
        }
    }
}

</script>
