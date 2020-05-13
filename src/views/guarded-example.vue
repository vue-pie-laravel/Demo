<template>

  <article>
    Logged in as {{ user.name }}

    <pre>{{ user }}</pre>

    <button @click="logout" :diabled="$root.busy">Logout</button>

  </article>

</template>

<script>

export default {

  name: 'view-guarded-example',

  methods: {

    logout () {
      this.authLogout().then(() => {
        this.$router.push({ name: 'index' })
      })
    }

  }

}

</script>
