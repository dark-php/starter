<?php


namespace Darkmantle\Starter\Components;

use Lexdubyna\Blade\ViewComponent;

class Alert extends ViewComponent
{
    // all the public properties will be exposed inside the template
    public string $type;
    public string $message;

    protected string $template = 'components.alert'; // $template is required, it's a path to a blade template file

    public function __construct($type, $message)
    {
        $this->type = $type;
        $this->message = $message;
    }
}