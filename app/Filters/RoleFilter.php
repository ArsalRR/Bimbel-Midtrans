<?php

namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;
use Config\Services;

class RoleFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        // Assuming MyHAuth library is used to authenticate the user
        $auth = Services::authentication();
        $user = $auth->user();

        // Check if the user has the required role
        if (!$user || !$this->hasRole($user, $arguments['role'])) {
            // Redirect or show an error message, depending on your application's logic
            return redirect()->to('/'); // Redirect to the home page, for example
        }

        // The user has the required role, continue with the request
        return null;
    }

    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null)
    {
        // Do nothing here
    }

    // Function to check if a user has a specific role
    protected function hasRole($user, $requiredRole)
    {
        // Adjust this function based on your MyHAuth implementation
        return in_array($requiredRole, $user->getRoles()); // Assuming roles are stored in an array
    }
}
