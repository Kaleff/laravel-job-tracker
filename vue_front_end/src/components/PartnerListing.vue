<template>
    <div class="listing">
        <h2><router-link :to="{ name: 'companyServices', params: { company: post.company}}">{{ post.company }}</router-link></h2>
        <h4>{{ post.description }}</h4>
        <h4>{{ post.location }}, {{ post.address }}</h4>
        <h4>Website: {{ post.website }}</h4>
        <h4>Email: {{ post.email }}</h4>
    </div>
</template>
<script>
export default {
    name: 'PartnerListing',
    props: {
        post: Object
    }
}
</script>