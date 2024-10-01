<?php
class ControladorCursos
{
    public function index()
    {
        //validar cliente
        $clientes = ModeloCliente::index("clientes");

        if (isset($_SERVER["PHP_AUTH_USER"]) && isset($_SERVER["PHP_AUTH_PW"])) {
            foreach ($clientes as $key => $valueCliente) {
                if ($_SERVER["PHP_AUTH_USER"] . ":" . $_SERVER["PHP_AUTH_PW"] == $valueCliente["id_cliente"] . ":" . $valueCliente["llave_secreta"]) {
                    $cursos = ModeloCursos::index("cursos");
                    $json = array(
                        "status" => 200,
                        "detalle" => $cursos
                    );

                    echo json_encode($json, true);
                    return;
                } else {
                    $json = array(
                        "status" => 503,
                        "detalle" => "Error de autenticación"
                    );

                    echo json_encode($json, true);
                    return;
                }
            }
        }
    }
}
