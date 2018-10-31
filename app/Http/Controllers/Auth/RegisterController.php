<?php

namespace App\Http\Controllers\Auth;

use App\Core\Entities\User;
use App\Http\Controllers\Controller;
use Doctrine\ORM\EntityManager;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * @var EntityManager
     */
    private $entityManager = null;

    /**
     * RegisterController constructor.
     * @param EntityManager $entityManager
     */
    public function __construct(EntityManager $entityManager)
    {
        $this->middleware('guest');
        $this->entityManager = $entityManager;
    }


    /**
     * Validate a user
     * @param Request $request
     * @return array
     */
    protected function validateUser(Request $request)
    {
        $rules =  [
            'firstName' => 'required|string|max:255',
            'lastName' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:App\Core\Entities\User,username',
            'email' => 'required|email|unique:App\Core\Entities\User,email',
            'password' => 'required|string|min:8',
        ];
        return $this->validate($request, $rules);
    }



    public function register(Request $request) {
        try {
            $this->validateUser($request);
            $user = new User();
            $user->setUsername($request->json('username'));
            $user->setPassword($request->json('password'));
            $user->setFirstName($request->json('firstName'));
            $user->setLastName($request->json('lastName'));
            $user->setEmail($request->json('email'));
            $user->setApiKey('123');
            $user->setType(1);
            $this->entityManager->persist($user);
            $this->entityManager->flush();
            return 'Success';
        } catch (\Exception $e)
        {
            return 'Invalid';
        }
    }
}
