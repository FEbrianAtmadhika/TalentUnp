<link rel="stylesheet" href="{{ asset('dist/css/bootstrap.min.css') }}">
    {{-- <link rel="stylesheet" href="{{ asset('dist/css/font_awesome_5_free.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap-datepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap-tagsinput.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/duotone-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/iziToast.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/fontawesome-iconpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/bootstrap4-toggle.min.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/components.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/spacing.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/custom.css') }}"> --}}
    <link rel="stylesheet" href="{{ asset('dist/css/peserta.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/skill.css') }}">
    <link rel="stylesheet" href="{{ asset('dist/css/kategori.css') }}"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    {{-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css"> --}}
    <style>
        .nav_left {
      background-color: #2F58CD;
      border-top-left-radius: 48px;
      border-bottom-left-radius: 48px;
  }

  .nav-tabs .nav-link.active {
      background-color: transparent;
      border-color: transparent;
      border-top: 4px solid #fff;
      color: #fff;
  }

  .nav-tabs .nav-link {
      border: none;
      border-top-left-radius: 0;
      border-top-right-radius: 0;
      margin: 0 30px 0 40px;
  }

  .nav-tabs {
      border-bottom: none;
  }

  .nav-link {
      padding: 1rem 0.5rem;
      color: #fff;
  }

  .nav-link:focus,
  .nav-link:hover {
      color: #fff;
  }

  .search-bar{
    background: #fff;
    width: 90%;
    max-width: 500px;
    display: flex;
    padding: 3px;
    border-radius: 40px;

  }

  #select{
  background: #4B7BE5;
  display: flex;
  color: #fff;
  align-items: center;
  justify-content: center;
  width: 200px;
  padding: 5px 5px;
  cursor: pointer;
  position: relative;
  border-radius: 40px;
}

#select img{
  width: 15px;
}

#select ul{
 position: absolute;
 z-index: 1;
 top: 120%;
 left: 0;
 list-style: none;
 background: #fff;
 color: #555;
  width: 100%;
  border-radius: 4px;
  max-height: 0;
  overflow: clip;
  transition: max-height 0.5s;

}

#select ul li{
  padding: 10px 2px;
  cursor: pointer;
}

.search-bar input{
  padding: 10px 25px;
  width: 100%;
  border-radius: 40px;
  border: none;
  outline: none;
  font-size: 15px;

}

#select ul.open{
  max-height: 300px;
}
  /* .search_input {
      width:100%;
      border-radius: 10px;
      border: none;
      line-height: initial;
      padding-top: 4px;
      padding-bottom: 4px;
      color: #2F58CD;
  }

  .search_input:focus-visible {
      outline: none;
  }

  input.search_input::placeholder {
      color: #cfd2ec;
      vertical-align: middle;
  } */

  /* .search_img {
      top: 7px;
      right: 8px;
  } */

  .dropdown-hover:hover>.dropdown-menu {
display: inline-block;

}

.dropdown-hover>.dropdown-toggle:active {
/*Without this, clicking will make it sticky*/
pointer-events: auto;
}

* {
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  list-style: none;
  font-family: "Open Sans", sans-serif;
}

.tabs_content .tab_body{
  height: calc(25% - 140px);
  overflow: auto;
}

.tabs_list ul li{
  position: relative;
  margin-bottom: 3px;
  cursor: pointer;
  font-weight: bold;
  transition: all 0.5s ease;
}

.tabs_list ul li:before{
  content: "";
  position: absolute;
  top: 0;
  right: -20px;
  width: 2px;
  height: 100%;
  background: var(--primary-clr);
  opacity: 0;
  transition: all 0.5s ease;
}

.tabs_list ul li.active,
.tabs_list ul li:hover{
  color: var(--primary-clr);
}

.tabs_list ul li.active:before{
  opacity: 1;
}
.tabs_content .tab_body .tab_item h3{
  padding-top: 10px;
  margin-bottom: 10px;
  color: var(--primary-clr);
}

.tabs_content .tab_body .tab_item p{
  margin-bottom: 20px;
}

.tabs_content .tab_body .tab_item.active{
  display: block !important;
}
      </style>


