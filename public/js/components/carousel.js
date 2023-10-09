$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        items: 1, // Jumlah slide yang ditampilkan
        autoplay: true, // Bermain otomatis
        autoplayTimeout: 10000, // Durasi antara slide (dalam milidetik)
        loop: true, // Mengulang dari awal setelah slide terakhir
        onChanged: updateTextVisibility,
    });

    function updateTextVisibility(event) {
        $(".carousel-text").removeClass("animate__backInLeft"); // Hapus kelas fadeIn untuk animasi masuk
        $(".carousel-text").removeClass("animate__backOutLeft"); // Hapus kelas fadeOut untuk animasi keluar

        let currentSlideIndex = event.item.index;
        let $currentText = $(".owl-item")
            .eq(currentSlideIndex)
            .find(".carousel-text");

        // Tambahkan kelas fadeIn untuk animasi masuk
        setTimeout(function () {
            // Tambahkan kelas fadeIn untuk animasi masuk
            $currentText
                .addClass("animate__backInLeft")
                .removeClass("animate__backOutLeft");
        }, 500); // Jeda 1 detik sebelum teks masuk

        // Atur waktu animasi hilang
        setTimeout(function () {
            $currentText.addClass("animate__backOutLeft");
        }, 9000); // Ubah angka sesuai dengan durasi yang Anda inginkan (dalam milidetik)
    }
});
