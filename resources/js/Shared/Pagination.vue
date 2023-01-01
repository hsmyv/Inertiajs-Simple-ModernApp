<template lang="">
    <div >
        <component
        :is="Link.url ? 'Link' : 'span'"
        v-for="Link in links"
        :href="Link.url"
        v-html="Link.label"
        class="px-1"
        :class="Link.url ? '' : 'text-gray-500'"

        />

    </div>
</template>
<script>
export default {
    props:{
        links: Array
    }
};
</script>

