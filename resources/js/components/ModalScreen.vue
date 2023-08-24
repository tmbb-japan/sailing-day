<template>
    <header>
        <div class="modal-header">
            <a href="#" class="icon-image" v-on:click="callCloseModal"><div class="close"></div></a>   
        </div>
        <div class="info-container">
            <img :src="imgSrc" class="rounded-image" alt="Album Image" />
            <div class="info-text">
                <p class="info-text-title">{{ albums.title }}</p>
                <p class="info-text-artist">{{ albums.artist_name }}</p>
                <!-- <p class="info-text-released">{{ albums.released_at }}</p> -->
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
            closeModal: Function,
            albums: {
            type: Object,
            required: true
            }
        },
        computed:{
        },
        methods:{
            callCloseModal() {
                this.closeModal();
            },
            handleEscapeKey(event) {
                if (event.key === "Escape") {
                    this.closeModal();
                }
            },
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
        },
        mounted() {
            document.addEventListener("keydown", this.handleEscapeKey);
        },
        beforeDestroy() {
            document.removeEventListener("keydown", this.handleEscapeKey);
        },
    }
</script>
