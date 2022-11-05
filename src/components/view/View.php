<?php

namespace src\components\view;

class View
{
    private string $view;
    private string $html;
    private array $data = [];

    /**
     * @param string $view
     * @param array $data
     */
    public function __construct(string $view, array $data = [])
    {
        $this->view = ROOT.DIRECTORY_SEPARATOR.'app'.DIRECTORY_SEPARATOR.'views'.DIRECTORY_SEPARATOR.$view.'.php';
        $this->data = $data;
    }

    public function render(): self
    {
        extract($this->data);

        ob_start();
        require $this->view;

        $this->html = ob_get_clean();
        return $this;
    }

    public function __toString(): string
    {
        return $this->html;
    }
}