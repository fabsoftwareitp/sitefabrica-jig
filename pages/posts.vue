<script setup>
const query = queryContent({
  where: {
    _path: { $contains: '/posts' }
  }
})
const data = await fetchContentNavigation(query)
</script>
<template>
  <h1>Posts</h1>
  <pre>
    {{ data }}
  </pre>
</template>