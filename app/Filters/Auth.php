<?php namespace App\Filters;
 
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
 
class auth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if(!session()->get('loggedIn')){
            return redirect()->to('Auth/Login');
        }
    }
 
    //--------------------------------------------------------------------
 
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
