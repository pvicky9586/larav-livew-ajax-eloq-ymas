<?php


namespace App\Http\Livewire;

use Livewire\Component;

use App\Models\User;


class Users extends Component

{

    public $users, $name, $email, $user_id;

    public $updateMode = false;


    public function render()

    {

        $this->users = User::all();

        return view('livewire.users');

    }


    private function resetInputFields(){

        $this->name = '';

        $this->email = '';

    }


    public function store()

    {

        $validatedDate = $this->validate([

            'name' => 'required',
            'email' => 'required|email',
            // 'password' => 'required|min:5|confirmed',

        ]);


        User::create($validatedDate);
        session()->flash('message', 'Usuario creado satisfactoriamente.');


        $this->resetInputFields();
        $this->emit('userStore'); // Close model to using to jquery


    }


    public function edit($id)

    {

        $this->updateMode = true;

        $user = User::where('id',$id)->first();

        $this->user_id = $id;

        $this->name = $user->name;
        $this->email = $user->email;

        

    }


    public function cancel()

    {

        $this->updateMode = false;
        $this->resetInputFields();



    }


    public function update()

    {

        $validatedDate = $this->validate([

            'name' => 'required',
            'email' => 'required|email',
            //'password' => 'required|min:5',

        ]);


        if ($this->user_id) {

            $user = User::find($this->user_id);

            $user->update([

                'name' => $this->name,

                'email' => $this->email,

            ]);

            $this->updateMode = false;

            session()->flash('message', 'User actualizado con exito.');
            $this->resetInputFields();


        }

    }


    public function delete($id)

    {

        if($id){

            User::where('id',$id)->delete();

            session()->flash('message', 'Users Deleted Successfully.');

        }

    }

}