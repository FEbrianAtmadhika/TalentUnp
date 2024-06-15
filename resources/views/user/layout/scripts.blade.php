<script src="{{ asset('dist/js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('dist/js/popper.min.js') }}"></script>
    <script src="{{ asset('dist/js/tooltip.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.nicescroll.min.js') }}"></script>
    <script src="{{ asset('dist/js/moment.min.js') }}"></script>
    <script src="{{ asset('dist/js/stisla.js') }}"></script>
    <script src="{{ asset('dist/js/jscolor.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap-datepicker.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap-timepicker.min.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap-tagsinput.min.js') }}"></script>
    <script src="{{ asset('dist/js/select2.full.min.js') }}"></script>
    <script src="{{ asset('dist/js/summernote-bs4.js') }}"></script>
    <script src="{{ asset('dist/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('dist/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('dist/js/iziToast.min.js') }}"></script>
    <script src="{{ asset('dist/js/fontawesome-iconpicker.js') }}"></script>
    <script src="{{ asset('dist/js/bootstrap4-toggle.min.js') }}"></script>

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
