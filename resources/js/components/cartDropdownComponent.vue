<template>

<div class="row">
    <div class="col-md-auto">
        <img  id="image_url" src="images/download.jpeg" width=50 height=50 alt="">
    </div>

    <div class="col-md-8">
        <h4 id="name">{{name}}</h4>
        <br>
        <h2  id="price" class="badge bg-danger text-right text-white"> {{price}}DZD</h2>
    </div>
</div>

</template>

<script>
    export default {
        props: ["name","price","image_url"]
    }
</script>
