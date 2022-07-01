<?php namespace App\Filters;
 
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\Filters\FilterInterface;
 
class NoAuth implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if((session()->get('loggedIn')) && (session()->get('level') == 1)){
            return redirect()->to('/admin');
        } else if((session()->get('loggedIn')) && (session()->get('level') == 0)){
            return redirect()->to('/');
        }
    }
 
    //--------------------------------------------------------------------
 
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do something here
    }
}
