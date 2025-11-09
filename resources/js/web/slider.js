document.addEventListener('alpine:init', () => {
    Alpine.data('productCarousel', () => ({
        isAtStart: true,
        isAtEnd: false,
        
        init() {
            this.$nextTick(() => {
                this.updateArrows();
                window.addEventListener('resize', () => this.updateArrows());
            });
        },
        
        scroll(direction) {
            const scrollAmount = 320; // card width + gap
            this.$refs.carousel.scrollBy({
                left: direction * scrollAmount,
                behavior: 'smooth'
            });
        },
        
        updateArrows() {
            const carousel = this.$refs.carousel;
            this.isAtStart = carousel.scrollLeft <= 0;
            this.isAtEnd = carousel.scrollLeft >= carousel.scrollWidth - carousel.clientWidth - 10;
        }
    }));
});