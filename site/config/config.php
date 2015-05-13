<?php
/*|------------------------------------|•|
|•| KIRBY CONFIG                       |•|
|•|------------------------------------|*/

// KIRBY LICENSE KEY
// Running a live Kirby site without a valid license
// is not permitted. Read the license agreement at
// http://getkirby.com/license

c::set('license', 'put your license key here');


// USERS + ROLES
c::set('roles', array(
  array(
    'id'      => 'admin',
    'name'    => 'Admin',
    'default' => true,
    'panel'   => true
  ),
  array(
    'id'      => 'editor',
    'name'    => 'Editor',
    'panel'   => true
  ),
  array(
    'id'      => 'client',
    'name'    => 'Client',
    'panel'   => false
  )
));

# clients / fake logout
c::set('routes', array(
  array(
    'pattern' => 'logout',
    'action'  => function() {
      if($user = site()->user()) $user->logout();
      go('login');
    }
  )
));