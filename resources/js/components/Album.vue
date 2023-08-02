<template>
    <div class="stack-container">
      <div class="album-cards"></div>
    </div>
</template>
<script>
    export default {
        mounted() {
            const albumContainer = document.querySelector(".album-cards");
            const albumImages = {!! json_encode($albums->pluck('image_path')) !!};
            const numAlbums = albumImages.length;
            const translateZ = "400px";
            albumImages.forEach((imagePath, index) => {
                const angle = (360 / numAlbums) * index;
                const albumCard = document.createElement("div");
                albumCard.classList.add("album-card");
                const img = document.createElement("img");
                img.src = "{{ asset('') }}" + imagePath;
                img.alt = "Album Image";
                albumCard.appendChild(img);
                albumCard.style.transform = `translateX(-50%) translateY(-50%) rotateY(${angle}deg) translateZ(${translateZ})`;
                albumContainer.appendChild(albumCard);
            });
        }
    }
</script>