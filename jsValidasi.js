document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".only-numbers").forEach(function (input) {
        input.addEventListener("inputHarga", function () {
            this.value = this.value.replace(/[^0-9]/g, '');
        });
    });
});