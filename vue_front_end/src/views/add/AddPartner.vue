<template>
    <div>
        <h1>Register new partner</h1>
        <form method="post" @submit.prevent="storeListing">
            <p>Company name:</p>
            <input type="text" name="company" v-model="formData.company" required>
            <p>Location (city):</p>
            <input type="text" name="location" v-model="formData.location" required>
            <p>Address:</p>
            <input type="text" name="address" v-model="formData.address" required>
            <p>Description:</p>
            <input type="text" name="description" v-model="formData.description" required>
            <p>Website:</p>
            <input type="url" name="website" v-model="formData.website" required>
            <p>Email:</p>
            <input type="email" name="email" v-model="formData.email" required>
            <br/>
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
    name: 'addPartner',
    
    data() {
        return {
            action: BACK_END + '/partners/store',
            success: false,
            error: false,
            formData: {
                company: null,
                location: null,
                address: null,
                description: null,
                website: null,
                email: null,
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
    }
}
</script>