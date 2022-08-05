<x-layouts.app title="Contacto" meta-description="Pagina de Contacto">
      <h1>Contacto 1</h1>
      <form>
      
      <div class="container">
            <div class="row">
                  <div class="card border-success" style="max-width: 18rem;">
                        <div class="card-header">Registro</div>
                        <div class="card-body text-success">
                          <h5 class="card-title">Formulario de Contacto</h5>
                          <label for="Email1" class="form-label">Email address</label>
                          <input type="email" class="form-control" id="Email1" placeholder="name@example.com">  
                          <label for="Cuerpo" class="form-label">Example textarea</label>
                          <textarea class="form-control" id="Cuerpo" rows="3"></textarea>
                          <button class="btn btn-primary" type="button" data-bs-toggle="collapse" 
                          data-bs-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">
                          Button                         </button>
                        <button type="submit" class="btn btn-danger ">Confirm identity</button>
                        <div class="collapse" id="collapseExample">
                          <div class="card card-body">
                            Some placeholder content for the collapse component. This panel is hidden by default but revealed when the user activates the relevant trigger.
                          </div>
                        </div>
                        </div>
                      </div>
            </div>
      </div>
</form>
</x-layouts.app>
