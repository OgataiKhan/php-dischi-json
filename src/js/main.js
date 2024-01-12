const { createApp } = Vue;

createApp({
  data() {
    return {
      albums: [],
      overlayVisible: false,
      selectedAlbum: null,
    };
  },
  methods: {
    getAlbums() {
      axios.get('server.php').then((response) => {
        this.albums = response.data;
      });
    },
    showOverlay(album) {
      axios.get('server.php', {
        params: {
          albumTitle: album.title
        }
      }).then(response => {
        this.selectedAlbum = response.data;
        this.overlayVisible = true;
      })
    },
    hideOverlay() {
      this.overlayVisible = false;
      this.selectedAlbum = null;
    },
  },
  created() {
    this.getAlbums();
  },
}).mount('#app');