<form method="get" action="<?=$this->crearRuta(["accion"=>"ejercicio1",])?>">
    <di> <h1>Problema 01</h1> </div>
    <label for ="a">Numero 1</label>
    <div><input type="number" id ="a" name="numero[]"></div>
    <label for ="b">Numero 2</label>
    <div><input type="number" id ="b" name="numero[]"></div>
    <div><button>Calcular</button></div>
</form>