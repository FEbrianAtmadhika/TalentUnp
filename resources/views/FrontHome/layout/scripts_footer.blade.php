<script src="{{ asset('dist/js/scripts.js') }}"></script>
<script src="{{ asset('dist/js/custom.js') }}"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
  </body>
  <script>
   let select = document.getElementById("select");
    let list = document.getElementById("list");
    // let selectText = document.getElementById("selectText");
    // let inputField = document.getElementById("inputField");

    // let options = document.getElementByClassName("options");

    select.onclick = function(){
      list.classList.toggle("open");
    }

// for(option of options){
//   option.onclick = function(){
//     selectText.innerHTML = this.innerHTML;
//     inputField.placeholder = "search in " + selectText.innerHTML;
// }
// }

var tab_lists = document.querySelectorAll(".tabs_list ul li");
var tab_items = document.querySelectorAll(".tab_item");

tab_lists.forEach(function(list){
  list.addEventListener("click", function(){
    var tab_data = list.getAttribute("data-tc");

    tab_lists.forEach(function(list){
      list.classList.remove("active");
    });
    list.classList.add("active");

    tab_items.forEach(function(item){
      var tab_class = item.getAttribute("class").split(" ");
      if(tab_class.includes(tab_data)){
        item.style.display = "block";
      }
      else{
        item.style.display = "none";
      }

    })

  })
})
    document.addEventListener('DOMContentLoaded', function() {
        var selectedOption = document.getElementById('selectedOption').value;
        var options = document.querySelectorAll('.options');

        options.forEach(function(option) {
            if (option.getAttribute('data-value') === selectedOption) {
                option.classList.add('active');
                var selectText = document.getElementById('selectText');
                selectText.innerHTML = option.innerHTML;
            }
        });
    });
    var dropdownOptions = document.querySelectorAll('.options');
    var selectedOptionInput = document.getElementById('selectedOption');

    dropdownOptions.forEach(function(option) {
    option.addEventListener('click', function() {
        var selectedValue = option.getAttribute('data-value');
        var selectedText = option.textContent;
        document.getElementById('selectText').textContent = selectedText;
        // Memperbarui nilai input tersembunyi
        selectedOptionInput.value = selectedValue;
    });
    });
    function handleEnter(event) {// Mencegah form submit secara default

        var inputFieldValue = document.getElementById('inputField').value;
        var selectedText = document.getElementById('selectText').textContent;

        document.getElementById('selectedTextInput').value = selectedText;

        // Mendapatkan token csrf dari meta tag
        var csrfToken = document.head.querySelector('meta[name="csrf-token"]').content;

        // Menambahkan header X-CSRF-TOKEN dalam permintaan
        var headers = new Headers();
        headers.append('X-CSRF-TOKEN', csrfToken);

        // Mengirim permintaan POST menggunakan Fetch API
        fetch('{{ route('search_submit') }}', {
        method: 'POST',
        headers: headers,
        body: new FormData(document.getElementById('searchForm'))
        })
        .then(response => {
        // Lakukan sesuatu dengan respons
        })
        .catch(error => {
        // Tangani error
        });
    }
    $(document).ready(function() {
        var error = "{{ session('errors.message') }}";

        if (error !== "") {
            Snackbar.show({ text: error, duration: 3000 });
        }
    });

</script>
