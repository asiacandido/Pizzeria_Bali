<x-layout>

<nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top p-0">
    <div class="container-fluid colorNav p-0 mb-0">
      
      <a class="navbar-brand" href="#"><img src="/img/logo3.png" alt="" height="200px"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('home')}}">Home</a>
          </li>
         
          <li class="nav-item">
            <a class="nav-link" href="{{route('menu')}}">Menu</a>
          </li>
          
          <li class="nav-item">
            <a class="nav-link" href="#">Contacts</a>
          </li>
        
         
        </ul>
        
      </div>
    </div>
  </nav>

  <header>
    <div class="headerImg ">
        <img src="/img/header3.jpeg" alt="" class="imgHeader">
        <h1 class="headerText pulse-animation text-center ">Pizzeria & Restaurant</h1>
    </div>
</header>

<div class="text-center mt-5 menu">SOURDOUGH PIZZA</div>
 <div class="container-fluid">
  <div class="row justify-content-center mt-5 ms-0 me-0">
      <!-- Colonna 1 -->
      <div class="col-12 col-md-3 custom-margin ">
          <div class="row text-center">
              <div class="col-12">
                <h3 class="pizze">Margherita</h3>
                <h4>tomato sauce, mozzarella, basil, extravirgin olive oil</h4>
              </div>
              
              
              <div class="col-12 mt-5">
                <h3 class="pizze">Puglia Mia</h3>
                <h4>mozzarella, smoked cured ham, fried aubergine, parmesan cheese, burratina on top - no tomato sauce</h4>
              </div>
              <div class="col-12 mt-5">
                <h3 class="pizze">Prosciutto e Funghi</h3>
                <h4>tomato sauce, mozzarella, smoked ham, mushrooms</h4>
              </div>
              <div class="col-12 mt-5">
                <h3 class="pizze"></h3>
              </div>
              <div class="col-12">
                <h3 class="pizze">Imperiale</h3>
                <h4>tomato sauce, mozzarella, cured ham, parmesan cheese</h4>
              </div>
          </div>
      </div>
      <!-- Colonna 2 -->
      <div class="col-12 col-md-3 custom-margin">
          <div class="row text-center">
            
              <div class="col-12">
                <h3 class="pizze">Marinara</h3>
                <h4>tomato sauce, garlic, oregano, anchovies, extravirgin olive oil</h4>
              </div>
              <div class="col-12 mt-5">
                <h3 class="pizze">Say "Cheese"</h3>
                <h4>mozzarella, gorgonzola, taleggio, parmesan cheese</h4>
              </div>
              <div class="col-12 mt-5">
                <h3 class="pizze">Parmigiana</h3>
                <h4>tomato sauce, mozzarella, fried aubergine, parmesan, rucola</h4>
              </div>
              <div class="col-12 mt-5 ">
                <h3 class="pizze">Calzone</h3>
                <h4>tomato sauce, mozzarella, smoked ham, mushrooms</h4>
              </div>
              
          </div>
      </div>
      <!-- Colonna 3 -->
      <div class="col-12 col-md-3 custom-margin">
          <div class="row text-center">
              <div class="col-12">
                <h3 class="pizze">Diavola</h3>
                <h4>tomato sauce, mozzarella, spicy salami, oregano</h4>
              </div>
              <div class="col-12 mt-5">
                <h3 class="pizze">Contadina</h3>
                <h4>charry tomato sauce, fresh charry tomatoes, green pesto, shredded mozzarella to go, basil</h4>
              </div>
              <div class="col-12 mt-5">
                <h3 class="pizze">Stay Healthy</h3>
                <h4>tomato sauce, mozzarella, grilled zucchini, grilled aubergine, basil, extravirgin olive oil</h4>
              </div>
              <div class="col-12 mt-5">
                <h3 class="pizze">Capricciosa</h3>
                <h4>tomato sauce, mozzarella, mushrooms, artichokes, smoked ham, black olives</h4>
              </div>
              
          </div>
      </div>
  </div>
</div>



</x-layout>