<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
     <i class="glyphicon glyphicon-plus"></i>

	Nuevo Usuario

</button>


<!-- Modal -->

<div wire:ignore.self class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">

    <div class="modal-dialog" role="document">

        <div class="modal-content">

            <div class="modal-header">

                <h5 class="modal-title" id="exampleModalLabel">Añadir nuevo usuario</h5>

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">

                     <span aria-hidden="true close-btn">×</span>

                </button>

            </div>

           <div class="modal-body">

                <form>

                    <div class="form-group">

                        <label for="exampleFormControlInput1">Usuario</label>

                        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter Name" wire:model="name">

                        @error('name') <span class="text-danger error">{{ $message }}</span>@enderror

                    </div>

                    <div class="form-group">

                        <label for="exampleFormControlInput2">Email</label>

                        <input type="email" class="form-control" id="exampleFormControlInput2" wire:model="email" placeholder="Enter Email">

                        @error('email') <span class="text-danger error">{{ $message }}</span>@enderror

                    </div>


              
                  
          


                    <div class="form-group">

                        <label for="exampleFormControlInput2" style="width:100%;">Password<br>
                            <input id="password" type="password" class="" wire:model="Password"   style="width:100%;"  placeholder="Introduzca su Password">
                        </label>

                        @error('password') <span class="text-danger error">{{ $message }}</span>@enderror

                        <label style="width:100%">Confirme Password<br>
                          <input id="password-confirm" type="password" class="" wire:model="password_confirmation"  placeholder="Confirmación"  style="width:100%;">
                       </label> 

                    </div>

                </form>

            </div>

            <div class="modal-footer">

                <button type="button" class="btn btn-secondary close-btn" data-dismiss="modal">Close</button>

                <button type="button" wire:click.prevent="store()" class="btn btn-primary close-modal">Guardar</button>

            </div>

        </div>

    </div>

</div>