<template>
    <header class="modal-header">
        <h1>Album title</h1>
        <div>
            <img :src="imgSrc" alt="Album Image" />
            <p>Artist name</p>
            <p>the time of released</p>
        </div>
        <div>
            <a href="">more</a>
            <a href="">share</a>
        </div>
    </header>
    <main>
        스크롤 할 수 있는 리스트를 만들기
    </main>
</template>

<script>
    export default {
        props:{
            imgSrc : {
                type: String,
                required: true,
            },
        },
        computed:{
        },
        methods:{
        }
    }
</script>
