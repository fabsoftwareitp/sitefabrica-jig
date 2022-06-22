<script setup>
const { path } = useRoute();
const navigationTree = await fetchContentNavigation(queryContent(path))
</script>
<template>
  <main>

    <h1>alow</h1>

    <pre>
    {{ path }}
  </pre
    >

    <pre>
    {{ navigationTree }}
  </pre
    >
  </main>
</template>