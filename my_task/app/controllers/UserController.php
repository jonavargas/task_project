<?php

class UserController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
        $this->layout->nest('content', 'usuario.login');
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		$this->layout->nest('content', 'usuario.registro');	
	}

	public function login(){
		$userdata = array(
            'email'     => Input::get('email'),
            'password'  => Input::get('password')
        );

        if (Auth::attempt($userdata)) {
            return Redirect::to('tasks');
        } else {
            // validation not successful, send back to form
            return Redirect::to('login')->withErrors(array('invalid_credentials' => 'Access Denied'));
        }

	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		
		$email = e(Input::get('email'));
		$password = e(Input::get('password'));
		$confirmar = e(Input::get('confirmar'));
		 
		$rules = array(
		            'email' => 'required|min:3|max:100|unique:users','password' => 'confirmed','confirmar' => 'confirmed',		            
		        );


		$messages = array(
		            'required' => 'Field :attribute is mandatory.',
		            'min' => 'Field :attribute can not be less than :min characters.',		            
		            'max' => 'Field :attribute can not be more than :max characters.',
		            'unique' => 'The username or email I entered already exists in the database.',
		            'confirmed' => 'The :attribute does not match confirmation.'
		        );
	 			
		$validation = Validator::make(Input::all(), $rules, $messages);
		 
		if ($validation->fails())
		{
		       
		       return Redirect::to('registro')->withErrors($validation)->withInput();
		}

		else
		{
			$email = Input::get('email');
			$password = Input::get('password');
			$password = Hash::make($password);
			
			$user = new User();
			$user->email = $email;
			$user->password = $password;
			$user->save();
			Auth::attempt(array('email' => $email, 'password' => $password));
		}
	
		return Redirect::to('tasks');
	}

	public function logout()
    {
        Auth::logout();
        return Redirect::to('login');
    }

    public function isLogged()
    {
        if (Auth::guest()) {
            return Redirect::to('login');
        }
    }
}