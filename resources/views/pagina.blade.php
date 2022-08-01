<x-layouts.app >
    <div class="container">

    
    <div class="card text-center">
        <div class="card-header">
            Pagina de Ejemplo
        </div>
        <div class="card-body">
            <h5 class="card-title">Ejemplos de Card</h5>
            <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
           
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" 
                data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                Button with data-bs-target
              </button>
              <div class="collapse" id="collapseExample">
                <div class="card card-body">
                  Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                </div>
              </div>
        </div>
        <div class="card-footer text-muted">
            2 days ago
        </div>
    </div>
    <div class="card-group">
    <div class="card text-bg-primary mb-3" >
        <div class="card-header">Header</div>
        <div class="card-body">
          <h5 class="card-title">Primary card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card text-bg-info mb-3" >
        <div class="card-header">Header</div>
        <div class="card-body">
          <h5 class="card-title">Info card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      <div class="card border-success mb-3" style="max-width: 18rem;">
        <div class="card-header">Header</div>
        <div class="card-body text-success">
          <h5 class="card-title">Success card title</h5>
          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        </div>
      </div>
      </div>

   

<div class="row row-cols-1 row-cols-md-3 g-4">
    <div class="col">
      <div class="card">
        <img src="{{ asset('images/imagen1.png') }} " class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="{{ asset('images/imagen2.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="{{ asset('images/imagen3.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
          <p>
            <button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#collapseWidthExample" aria-expanded="false" aria-controls="collapseWidthExample">
              Toggle width collapse
            </button>
          </p>
          <div style="min-height: 120px;">
            <div class="collapse collapse-horizontal" id="collapseWidthExample">
              <div class="card card-body" style="width: 300px;">
                This is some placeholder content for a horizontal collapse. It's hidden by default and shown when triggered.
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="col">
      <div class="card">
        <img src="{{ asset('images/imagen4.png') }}" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title">Card title</h5>
          <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
        </div>
      </div>
    </div>
  </div>

</div>
</x-layouts.app>
