<x-main>
  
  <body style="background-color: rgb(57, 161, 196);">
    <div class="container">
      <div class="row row-cols-1 row-cols-md-3 g-4 mt-2 ">
        <div class="col">
          <div class="card h-100 rounded">
            <img src="https://picsum.photos/200/300?random=1"  alt="Image">
            <div class="card-body">
              <h5 class="card-title">oggeti vari</h5>
              <p class="card-text">100</p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <a href="{{ route('homepage', ['category' => 'Mercato']) }}">Mercato</a>
              </small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://picsum.photos/200/300?random=1" alt="Image">
            <div class="card-body">
              <h5 class="card-title">Moto</h5>
              <p class="card-text">4500</p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <a href="{{ route('homepage', ['category' => 'Moto']) }}">Moto</a>
              </small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://picsum.photos/200/300?random=1" alt="Image">
            <div class="card-body">
              <h5 class="card-title">Auto nuova</h5>
              <p class="card-text">7000</p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <a href="{{ route('homepage', ['category' => 'Auto']) }}">Auto</a>
              </small>
            </div>
          </div>
        </div>
      </div>
  
      <div class="row row-cols-1 row-cols-md-3 g-4 mt-2">
        <div class="col">
          <div class="card h-100">
            <img src="https://picsum.photos/200/300?random=1" alt="Image">
            <div class="card-body">
              <h5 class="card-title">Oggetto hobby</h5>
              <p class="card-text">50</p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <a href="{{ route('homepage', ['category' => 'Hobby']) }}">Hobby</a>
              </small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://picsum.photos/200/300?random=1" alt="Image">
            <div class="card-body">
              <h5 class="card-title">Oggetto per svago</h5>
              <p class="card-text">20</p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <a href="{{ route('homepage', ['category' => 'Svago']) }}">Svago</a>
              </small>
            </div>
          </div>
        </div>
        <div class="col">
          <div class="card h-100">
            <img src="https://picsum.photos/200/300?random=1" alt="Image">
            <div class="card-body">
              <h5 class="card-title">Scheda madre </h5>
              <p class="card-text">150</p>
            </div>
            <div class="card-footer">
              <small class="text-body-secondary">
                <a href="{{ route('homepage', ['category' => 'Elettronica']) }}">Elettronica</a>
              </small>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
  
  

  </x-main>
