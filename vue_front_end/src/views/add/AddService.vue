<template>
    <div>
        <h1 v-if="company">Register provided service for: {{ company }}</h1>
        <h1 v-if="product">Register provided {{ product }}</h1>
        <form method="post" @submit.prevent="storeListing">
            <p>Company: </p>
            <input v-if="company" type="text" name="company" :value="company" readonly>
            <input v-else type="text" name="company" v-model="formData.company" required>
            <p>Product: </p>
            <input type="text" name="product" v-model="formData.product" required>
            <p v-if="!product">Product type: </p>
            <select v-if="!product" name="type" v-model="formData.type" required>
                <option value="design">Design</option>
                <option value="feature">Feature</option>
                <option value="website">Website</option>
            </select>
            <p>Description</p>
            <input type="text" name="description" v-model="formData.description" required>
            <p>Price:</p>
            <input type="number" name="price" step="0.01" v-model="formData.price" required>
            <p>Quantity:</p>
            <input type="number" name="quantity" step="1" placeholder="1" min="1" v-model="formData.quantity" required>
            <p>Date: </p>
            <input type="date" name="date" v-model="formData.date" required>
            <input type="submit">
        </form>
        <h2 v-if="error">{{ error.message }}</h2>
        <div v-if="errors">
            <div v-for="errorsample in errors">
                <h4>{{ errorsample[0] }}</h4>
            </div>
        </div>
        <h2 v-if="success">Your listing have been saved!</h2>
        <router-link v-if="success" to="/">Go back</router-link>
    </div>
</template>
<script>
import { BACK_END } from '@/constants.js'
import axios from 'axios'

export default {
    name: 'addService',
    props: {
        company: String,
        product: String
    },
    data() {
        return {
            action: BACK_END + '/service/store',
            success: false,
            error: false,
            formData: {
                company: null,
                product: null,
                type: null,
                description: null,
                price: null,
                quantity: 1,
                date: null
            },
            errors: null
        }
    },
    methods:{
        storeListing(){
            axios.post(this.action, this.formData)
                .then((response) => {
                    this.onSuccess(response)
                })
                .catch((error) => {
                    this.onFail(error)
                })
        },

        onSuccess(response) {
            this.success = response;
        },
        
        onFail(error) {
            this.errors = [];
            this.error = error.response.data;
            Object.values(error.response.data.errors).forEach(val => this.errors.push(val));
        }
    },
    mounted() {
        if(this.company) {
            this.formData.company = this.company;
        }
        if(this.product) {
            this.formData.type = this.product;
        }
    },
}
</script>