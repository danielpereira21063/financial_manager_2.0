<?php

class ControllerBase
{
    protected function View(string $view)
    {
        $viewFile = APP . '/Views/' . $view . '.php';

        try {
            include_once(APP . "/Views/Layouts/header.php"); //header file

            if (file_exists($viewFile)) {
                include_once($viewFile);
            } else {
                throw new Exception("O arquivo de view $view não existe");
            }

            include_once(APP . "/Views/Layouts/footer.php"); //footer file
        } catch (Exception $ex) {
            echo "<h1>Erro ao carregar view $viewFile</h1>";
            echo "<p>$ex->getMessage()</p>";
            exit();
        }
    }
}
