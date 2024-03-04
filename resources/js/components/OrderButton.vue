<template>
    <div class="button-container">
        <router-link :to="{name: 'Checkout',
        params: {productId: productId} ,
        query: {
            productName: this.productName,
            productId: this.productId,
            sku: this.sku,
            totalPrice: this.totalPrice
        }}">

        <button @click="placeOrder" type="submit" class="order-button"><i class="fa fa-shopping-cart"></i> Order now</button>
        </router-link>
    </div>

</template>

<script>



export default {

    name: 'OrderButton',
    props: {
        productName: String,
        productId: Number,
        sku: String,
        required: true,
        totalPrice: Number,
    },
    methods: {
      async placeOrder() {
          try {
              const response = await axios.post('api/orders', {
                  product_id: this.productId,
                  name: this.productName,
                  quantity: 1, // there is no box for adding multiple items
                  sku: this.sku,
                  price: this.totalPrice,
              });
              console.log('Order:', response.data); // WORKS :D
          } catch (error) {
              console.log('no way an error can happen');
          }
      }
    },
}
</script>

<style scoped>
.button-container {
    display: flex;
    justify-content: center;
    margin-top: 30px;
    width: 230px;
    height: 40px;
}
.order-button {
    background-color: #ffa800;
    color: #000000;
    border-radius: 20px;
    border: none;
    font-weight: bold;
    align-items: center;
    font-size: 16px;
}
.fa-shopping-cart {
    font-size: 14px;
}
</style>

