<template>
  <div class="">
  <h1>this one</h1>
    <!-- Fetch and display the Markdown document from current path -->
    <ContentDoc class="">
      <!-- Slot if document is not found -->
      <template #not-found>
        <h1 class="text-2xl">
          Page not found
        </h1>
      </template>
    </ContentDoc>
  </div>
</template>

<style lang="">
/* Customize headers to remove default underline */

</style>
