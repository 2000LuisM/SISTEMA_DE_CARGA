<h1>REGISTRAR CLIENTE</h1>
<form action="/cliente/store" method="POST">
    @csrf
    <label for="dni">DNI</label>
    <input type="text" id="dni" name="dni">
    <br><br>

    <label for="nombre">Nombre</label>
    <input type="text" id="nombre" name="nombre">
    <br><br>

    <label for="apellidos">Apellidos</label>
    <input type="text" id="apellidos" name="apellidos">
    <br><br>
    <label for="email">Email</label>
    <input type="text" id="email" name="email">
    <br><br>
    <label for="cargo">Cargo</label>
    <input type="text" id="cargo" name="cargo">
    <br><br>
    <label for="empresa">Empresa</label>
    <input type="text" id="empresa" name="empresa">
    <br><br>
    <input type="submit" value="Registrar Cliente">
</form>