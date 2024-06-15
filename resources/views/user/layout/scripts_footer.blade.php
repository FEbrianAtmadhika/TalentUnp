<script src="{{ asset('dist/js/scripts.js') }}"></script>
<script src="{{ asset('dist/js/custom.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF"
crossorigin="anonymous"></script>
<script>
    // Mendapatkan referensi tombol dan elemen dropdown
    var toggleButton = document.getElementById('toggleDropdown');
    var dropdownContent = document.getElementById('dropdownContent');

    // Menambahkan event listener pada tombol
    toggleButton.addEventListener('click', function() {
        // Memeriksa apakah elemen dropdown sedang ditampilkan atau tidak
        if (dropdownContent.style.display === 'none') {
            // Jika elemen dropdown tidak ditampilkan, maka tampilkan
            dropdownContent.style.display = 'block';
        } else {
            // Jika elemen dropdown ditampilkan, maka sembunyikan
            dropdownContent.style.display = 'none';
        }
    });
</script>
