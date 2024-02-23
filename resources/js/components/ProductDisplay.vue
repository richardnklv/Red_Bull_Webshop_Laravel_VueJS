<template>
    <div class="product-display" v-if="product">
        <h1>{{ product.name }}</h1>
        <h1>{{ product.description }}</h1>
    </div>
</template>


<script>
import axios from "axios";

export default {
    name: 'ProductDisplay',
    props: {
        productId: Number,
        required: true
    },
    data() {
        return {
            product: null,
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
        }
    }
}
</script>

<style>

</style>
