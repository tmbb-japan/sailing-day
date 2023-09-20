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
            <li v-for="(song, index) in albums.songs" :key="index">{{ song.title }}</li>
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
        mounted() {
            document.addEventListener("keydown", this.handleEscapeKey);
        },
        beforeDestroy() {
            document.removeEventListener("keydown", this.handleEscapeKey);
        },
    }
</script>
