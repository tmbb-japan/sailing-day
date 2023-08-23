<template>
    <header class="modal-header">
        <h1>Album title</h1>
        <div class="info-container">
            <img :src="imgSrc" class="rounded-image" alt="Album Image" />
            <div class="info-text">
                <p class="info-text-artist">Artist name</p>
                <p class="info-text-released">the time of released</p>
            </div>
        </div>
        <div class="icon-container">
            <div class="left-aligned-links">
                <a href="#" class="icon-image"><div class="share"></div></a>
                <a href="#" class="icon-image"><div class="more"></div></a>
            </div>
            <div class="right-aligned-link">
                <a href="#" class="icon-image"><div class="shuffle"></div></a>
            </div>
        </div>
    </header>
    <main class="scrollable-list">
        <ul>
            <li v-for="(item, index) in listItems" :key="index">{{ item }}</li>
        </ul>
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
        },
        data() {
            return {
                listItems: [
                    "Item 1",
                    "Item 2",
                    "Item 3",
                    "Item 4",
                    "Item 5",
                    "Item 6",
                ],
            };
        }
    }
</script>
