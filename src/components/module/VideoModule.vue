<template>
<div>
    <LazyYoutube ref="lazyVideo" src="https://www.youtube.com/watch?v=TcMBFSGVi1c" />
</div>
</template>

<script>
   import  LazyYoutube  from 'vue-lazytube'
    export default {
    components: {
        LazyYoutube,
    },
}
</script>

<style lang="scss" scoped>

</style>
