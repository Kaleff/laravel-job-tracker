<template>
  <nav>
    <router-link to="/">Home</router-link> |
    <router-link to="/partners">Partners</router-link> |
    <router-link to="/products">Products</router-link> |
    <router-link to="/services">Services</router-link>
  </nav>
  <router-view/>
</template>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
}

nav {
  padding: 30px;
}

nav a {
  font-weight: bold;
  color: #2c3e50;
}

nav a.router-link-exact-active {
  color: #42b983;
}

.activeLink {
  color: #42b983;
}

.passiveLink {
  cursor: pointer;
}

.gridTable {
  grid-template-columns: 30% 30% 30%;
  gap: 5%;
  display: grid;
}

.listing {
  border:2px solid #2c3e50;

}
</style>