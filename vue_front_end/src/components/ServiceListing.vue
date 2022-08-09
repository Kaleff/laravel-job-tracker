<template>
    <div class="listing"> 
        <h2 v-if="!redirected">
            <router-link :to="{ name: 'companyServices', params: { company: post.company}}">
                {{ post.company }}
            </router-link>
        </h2>
        <h4>{{ post.description }}</h4>
        <h4>Price: {{ post.price }}$</h4>
        <h4>Quantity {{ post.quantity }}</h4>
        <h4>Date: {{ post.date }}</h4>
    </div>
</template>
<script>
export default {
    name: 'PartnerListing',
    props: {
        post: Object,
        redirected: Boolean
    }
}
</script>