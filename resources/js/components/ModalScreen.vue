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
        <div>
            <a href=""><img src="images/Icons/more.png" class="icon-image" alt="More Icon" /></a>
            <a href=""><img src="images/Icons/share.png" class="icon-image" alt="Share Icon" /></a>
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
                ],
            };
        }
    }
</script>
