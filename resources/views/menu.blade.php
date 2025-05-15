<x-layout>
  
  <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top p-0">
    <div class="container-fluid colorNav p-0 mb-0">
      
      <a class="navbar-brand" href="#"><img src="/img/italianpizzeria.png" alt="" height="120px"></a>
      
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" 
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
  
      <div class="collapse navbar-collapse justify-content-between" id="navbarSupportedContent">
        <!-- Links centrati -->
        <ul class="navbar-nav nav-links mx-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link" aria-current="page" href="{{route('home')}}">About Us</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="{{route('menu')}}">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="#contact">Contacts</a>
          </li>
        </ul>
  
        <!-- Icona Instagram a destra -->
        <ul class="navbar-nav ms-lg-auto d-flex flex-row align-items-center mb-2 mb-lg-0 icon-nav">
          <li class="nav-item">
            <a href="https://www.instagram.com/pugliamia_pizzeria_giliair/">
              <i class="bi bi-instagram"></i>
            </a>
          </li>
        </ul>
      </div>
    </div>
  </nav>

  
  <header>
    <div class="headerImg ">
      <div class="overlay"></div>
      <img src="/img/pizzaiolo.jpg" alt="" class="imgHeader">
      <h1 class="headerText pulse-animation text-center nero "></h1>
    </div>
  </header>
  
  
  
  
  <div class="text-center mt-5 menu">STARTER</div>
  <div class="container-fluid">
    <div class="row justify-content-center mt-5 ms-0 me-0">
      <!-- Colonna 1 -->
      <div class="col-12 col-md-3 custom-margin ">
        <div class="row text-center">
          <div class="col-12">
            <h3 class="pizze">Bruschetta</h3>
            <h4>toasted pizza slices topped with cherry tomatoes, parmesan cheese, extravirgin olive oil, oregano</h4>
            <h5 class="text-center mt-3">55k</h5>
          </div>
          
          
        </div>
      </div>
      <!-- Colonna 2 -->
      <div class="col-12 col-md-3 custom-margin">
        <div class="row text-center">
          
          <div class="col-12">
            <h3 class="pizze">Pizzotti Puglia Mia</h3>
            <h4>fried dough square with cherry tomatoes, parmesan cheese, basil
            </h4>
            <h5 class="text-center mt-3">50k</h5>
          </div>
          
          
          
          
        </div>
      </div>
      <!-- Colonna 3 -->
      <div class="col-12 col-md-3 custom-margin">
        <div class="row text-center">
          <div class="col-12">
            <h3 class="pizze">Veggie Crunchers</h3>
            <h4>lightly battered and fried seasonal vegetables, crispy on the outside and tender on the inside</h4>
            <h5 class="text-center mt-3">55k</h5>
          </div>
          
          
        </div>
      </div>
    </div>
  </div>
  
  
  
  
  
  
  
  
  
  
  <div class="text-center mt-5 menu">SOURDOUGH PIZZA</div>
  <div class="container-fluid">
    <div class="row justify-content-center mt-5 ms-0 me-0">
      <!-- Colonna 1 -->
      <div class="col-12 col-md-3 custom-margin ">
        <div class="row text-center">
          <div class="col-12">
            <h3 class="pizze">Marinara</h3>
            <h4>tomato sauce, garlic, oregano, anchovies, extravirgin olive oil, basil
            </h4>
            <h5 class="text-center mt-3">60k</h5>
          </div>
          
          
          <div class="col-12 mt-5">
            <h3 class="pizze">Parmigiana</h3>
            <h4>tomato sauce, mozzarella, fried aubergine, parmesan, wild rocket, extravirgin olive oil, basil</h4>
            <h5 class="text-center mt-3">90k</h5>
          </div>
          <div class="col-12 mt-5">
            <h3 class="pizze">Prosciutto e Funghi</h3>
            <h4>tomato sauce, mozzarella, smoked ham, mushrooms, extravirgin olive oil, basil (NO HALAL)</h4>
            <h5 class="text-center mt-3">110k</h5>
          </div>
          <div class="col-12 mt-5">
            <h3 class="pizze"></h3>
          </div>
          <div class="col-12">
            <h3 class="pizze">Panzerotto Fried or Baked
            </h3>
            <h4>folded pugliese pizza filled with mozzarella cheese and tomato sauce 
               <br> (Fill it as you want!)
              
            </h4>
            <h5 class="text-center mt-3">100k</h5>
          </div>
          
        </div>
      </div>
      <!-- Colonna 2 -->
      <div class="col-12 col-md-3 custom-margin">
        <div class="row text-center">
          
          <div class="col-12">
            <h3 class="pizze">Margherita</h3>
            <h4>tomato sauce, mozzarella, extravirgin olive oil, basil</h4>
            <h5 class="text-center mt-3">70k</h5>
          </div>
          <div class="col-12 mt-5">
            <h3 class="pizze">Contadina</h3>
            <h4>tomato sauce, fresh cherry tomatoes, green pesto, mozzarella, extravirgin olive oil, basil</h4>
            <h5 class="text-center mt-3">100k</h5>
          </div>
          <div class="col-12 mt-5">
            <h3 class="pizze">Imperiale</h3>
            <h4>tomato sauce, mozzarella, smoked ham, parmesan flakes, wild rocket, cherry tomato, extravirgin olive oil (NO HALAL)</h4>
            <h5 class="text-center mt-3">115k</h5>
          </div>
          {{-- <div class="col-12 mt-5 ">
            <h3 class="pizze">Puglia Mia</h3>
            <h4>mozzarella, fried aubergine, parmesan flakes, burratina on top , extravirgin olive oil, basil - no tomato sauce</h4>
            <h5 class="text-center mt-3">115k</h5>
          </div> --}}
          {{-- <div class="col-12 mt-5 ">
            <h3 class="pizze">Calzone</h3>
            <h4>tomato sauce, mozzarella, smoked ham, mushrooms</h4>
          </div>
           --}}
        </div>
      </div>
      <!-- Colonna 3 -->
      <div class="col-12 col-md-3 custom-margin">
        <div class="row text-center">
          <div class="col-12">
            <h3 class="pizze">Diavola</h3>
            <h4>tomato sauce, mozzarella, spicy salami, extravirgin olive oil, basil (NO HALAL)
            </h4>
            <h5 class="text-center mt-3">80k</h5>
          </div>
          <div class="col-12 mt-5">
            <h3 class="pizze">Stay Healthy</h3>
            <h4>mozzarella, grilled zucchini, grilled aubergine, cherry tomatoes, extravirgin olive oil , basil (with tomato sauce or without tomato sauce)</h4>
            <h5 class="text-center mt-3">100k</h5>
          </div>
          <div class="col-12 mt-5">
            <h3 class="pizze">Capricciosa</h3>
            <h4>tomato sauce, mozzarella, mushrooms, artichokes, smoked ham, black olives, extravirgin olive oil, basil
            </h4>
            <h5 class="text-center mt-3">120k</h5>
          </div>
          <div class="col-12 mt-5">
            <h3 class="pizze">Say "Cheese"</h3>
            <h4>mozzarella, gorgonzola, taleggio, parmesan cheese, basil - no tomato sauce (white pizza)</h4>
            <h5 class="text-center mt-3">115k</h5>
          </div>
          {{-- <div class="col-12 mt-5">
            <h3 class="pizze">Capricciosa</h3>
            <h4>tomato sauce, mozzarella, mushrooms, artichokes, smoked ham, black olives</h4>
          </div> --}} 
          
        </div>
      </div>
    </div>
  </div>

<h5 class="text-center mt-1 ">add your extra toppings +10k</h5>
<br>
<br>
<br>
  
  <div class="text-center mt-5 menu">DESSERTS</div>
  <div class="container-fluid">
    <div class="row justify-content-center mt-5 ms-0 me-0">
      <!-- Colonna 1 -->
      <div class="col-12 col-md-3 custom-margin ">
        <div class="row text-center">
          <div class="col-12">
            <h3 class="pizze">Tiramisù</h3>
            <h4>crisp biscuits soaked in espresso, layered with a creamy mixture of mascarpone cheese and whipped eggs and finished with a touch of cocoa powder </h4>
            <h5 class="text-center mt-3">65k</h5>
          </div>
          
          
        </div>
      </div>
      <!-- Colonna 2 -->
      <div class="col-12 col-md-3 custom-margin">
        <div class="row text-center">
          
          <div class="col-12">
            <h3 class="pizze">Fried Gnocchi with Nutella</h3>
            <h4>crispy fried pizza dough bites served with a rich Nutella sauce, creating a delightful mix of sweet and savory flavors.</h4>
            <h5 class="text-center mt-3">65k</h5>
          </div>
          
          
          
          
        </div>
      </div>
      <!-- Colonna 3 -->
      <div class="col-12 col-md-3 custom-margin">
        <div class="row text-center">
          <div class="col-12">
            <h3 class="pizze">Pizza with Nutella</h3>
            <h4>a sweet twist on the classic pizza, featuring a crispy pizza crust topped generously with Nutella, perfect for dessert lovers.</h4>
            <h5 class="text-center mt-3">60k</h5>
          </div>
          
          
        </div>
      </div>
    </div>




  
  </div>


  <div class="text-center mt-5 menu">DRINKS</div>
  <div class="container-fluid">
    <div class="row justify-content-center mt-5 ms-0 me-0">
      <!-- Colonna 1 -->
      <div class="col-12 col-md-3 custom-margin ">
        <div class="row text-center">
          <div class="col-12">
            <h3 class="pizze">Water bottle</h3>
            
            <h5 class="text-center mt-3">10k</h5>
          </div>
          
          
        </div>
      </div>
      <!-- Colonna 2 -->
      <div class="col-12 col-md-3 custom-margin">
        <div class="row text-center">
          
          <div class="col-12">
            <h3 class="pizze">Coca Cola</h3>
            <h5 class="text-center mt-3">30k</h5>
          </div>
          
          
          
          
        </div>
      </div>
      <!-- Colonna 3 -->
      <div class="col-12 col-md-3 custom-margin">
        <div class="row text-center">
          <div class="col-12">
            <h3 class="pizze">Bintang Beer</h3>
            <h5 class="text-center mt-3">40k</h5>
          </div>
          
          
        </div>
      </div>
    </div>




  
  </div>


 
  <div class="container-fluid">
    <div class="row justify-content-center mt-5 ms-0 me-0">
      <!-- Colonna 1 -->
     
      <!-- Colonna 2 -->
      <div class="col-12 col-md-3 custom-margin">
        <div class="row text-center">
          
          <div class="col-12">
            <h3 class="pizze">Juices</h3>
            <h4>Watermelon, papaya, pineapple, banana, mango, dragon fruit</h4>
            <h5 class="text-center mt-3">30k</h5>
          </div>
          
          
          
          
        </div>
      </div>
      <!-- Colonna 3 -->
    
    </div>




  
  </div>
  


  
  
</x-layout>