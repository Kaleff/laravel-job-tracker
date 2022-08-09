<template>
  <div class="hello">
    <h1>{{ msg }}</h1>
    <p>
      Front-end part for the Laravel HEADLESS-API project. 
    </p>
    <p>
      To navigate through the project use navigation.
    </p>
    <p>
      To setup the back-end, I've used XAMPP, depending on your preffered method to start the backend, 
      you might want to edit the src/constant.js file to edit the Back-End address
    </p>
    <p>
      Setting up the back-end, edit the .env.example and rename to the .env file, and according to it, 
      create the database table
    </p>
    <p>
      To run migrations and seeder use according commands of "php artisan migrate" and "php artisan db:seed"
    </p>
  </div>
</template>

<script>
export default {
  name: 'HelloWorld',
  props: {
    msg: String
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
h3 {
  margin: 40px 0 0;
}
ul {
  list-style-type: none;
  padding: 0;
}
li {
  display: inline-block;
  margin: 0 10px;
}
a {
  color: #42b983;
}
</style>
