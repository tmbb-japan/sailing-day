<template>
    <div class="stack-container">
      <div class="album-cards">
        <div
            v-for="(imagePath, index) in albumImages"
            :key="index"
            class="album-card"
            :style="getCardStyle(index)"
            v-on:click="handleCardClick(index)" 
        >
            <img :src="assetPath(imagePath)" alt="Album Image" />
        </div>
      </div>
    </div>
    <!-- modal -->
    <div v-if="selectedAlbumIndex !== null" class="modal">
      <div class="modal-content" v-on:click="closeModal">
        <modal-screen :imgSrc="assetPath(albums[selectedAlbumIndex].image_path)"></modal-screen>   
      </div>
    </div>
</template>
<script>
    import ModalScreen from './ModalScreen.vue';
    export default {
        components: {
            ModalScreen
        },
        props:{
            albums : {
                type: Array,
                required: true,
            },
        },
        data(){
            return {
                translateZ: "400px",
                selectedAlbumIndex: null,
            }
        },
        computed: {
            albumImages() {
                return this.albums.map(album => album.image_path);
            },
            numAlbums() {
                return this.albumImages.length;
            },
        },
        methods: {
            getCardStyle(index) {
                const angle = (360 / this.numAlbums) * index;
                return {
                    transform: `translateX(-50%) translateY(-50%) rotateY(${angle}deg) translateZ(${this.translateZ})`,
                };
            },
            assetPath(path) {
                const baseUrl = window.location.origin;
                return `${baseUrl}/${path}`;
            },
            handleCardClick(index) {
                this.selectedAlbumIndex = index;
            },
            closeModal() {
                this.selectedAlbumIndex = null;
            },
        },
    }
</script>