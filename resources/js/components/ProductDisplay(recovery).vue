<template></template>
<!--<template>-->
<!--    <div v-if="product" class="product-display">-->
<!--        <h1>{{ product.name }}</h1>-->
<!--        <p>SKU: {{ product.base_sku }}</p>-->
<!--        <p>{{ product.description }}</p>-->
<!--        <p>Base Price: ${{ product.base_price }}</p>-->
<!--    </div>-->
<!--</template>-->

<!--<script>-->
<!--import axios from "axios";-->

<!--export default {-->
<!--    data() {-->
<!--        return {-->
<!--            product: null,-->
<!--        };-->
<!--    },-->
<!--    props: {-->
<!--        productId: Number,-->
<!--        required: true-->
<!--    },-->
<!--    mounted() {-->
<!--        this.fetchProduct();-->
<!--    },-->
<!--    methods: {-->
<!--        fetchProduct() {-->
<!--            axios.get(`/api/product/${this.productId}`)-->
<!--                .then(response => {-->
<!--                    this.product = response.data;-->
<!--                })-->
<!--                .catch(error => {-->
<!--                    console.error('Error fetching product: ', error);-->
<!--                })-->
<!--        }-->
<!--    }-->
<!--}-->
<!--</script>-->

<!--<style scoped>-->

<!--</style>-->
