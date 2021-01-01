<div>

    

    @include('crud_larav-livew.crud-modal.update')

    @if (session()->has('message'))

        <div class="alert alert-success" style="margin-top:30px;">x

          {{ session('message') }}

        </div>

    @endif
    <h1 align="center" style="margin-top:5%;">Usuarios registrasos</h1>
    @include('crud_larav-livew.crud-modal.create')
    <table class="table table-bordered mt-5">

        <thead>

            <tr>

                <th>ID</th>

                <th>Name</th>

                <th>Email</th>

                <th>Action</th>

            </tr>

        </thead>

        <tbody>

            @forelse($users as $value)

            <tr>

                <td>{{ $value->id }}</td>

                <td>{{ $value->name }}</td>

                <td>{{ $value->email }}</td>

                <td>

                <button data-toggle="modal" data-target="#updateModal" wire:click="edit({{ $value->id }})" class="btn btn-primary btn-sm">Edit</button>

                <button wire:click="delete({{ $value->id }})" class="btn btn-danger btn-sm">Delete</button>

                </td>
                @empty
                 <td class="text-danger font text-center">No hay resultados</td>
            </tr>            
        @endforelse
        </tbody>

    </table>

</div>