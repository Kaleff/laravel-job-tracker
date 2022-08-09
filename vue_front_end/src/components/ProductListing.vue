<template>
    <div>
        <h2><router-link :to="{ name: 'productServices', params: { product: post.type}}">{{ post.title }}</router-link></h2>
        <h4>{{ post.description }}</h4>
    </div>
</template>
<script>
export default {
    name: 'ProductListing',
    props: {
        post: Object
    }
}
</script>