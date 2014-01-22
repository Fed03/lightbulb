<?php namespace Lightbulb\Acme\Routing;

use Illuminate\Routing\Controller;
use Input;
use Response;
use View;

class AcmeController extends Controller
{
    public function getIndex()
    {
        return View::make('lightbulb/acme::index');
    }

    public function postAjaxAcme()
    {
        return Response::json(array('foo' => Input::get('foo')), 200);
    }
}
