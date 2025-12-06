<form method="POST" class="card p-4 shadow">

    <div class="mb-3">
        <label class="form-label">Número 1</label>
        <input type="number" name="n1" class="form-control">
    </div>

    <div class="mb-3">
        <label class="form-label">Número 2</label>
        <input type="number" name="n2" class="form-control">
    </div>

    <select name="op" class="form-select mb-3">
        <option value="+">Sumar</option>
        <option value="-">Restar</option>
        <option value="*">Multiplicar</option>
        <option value="/">Dividir</option>
        <option value="%">Módulo</option>
    </select>

    <button class="btn btn-primary">Calcular</button>
</form>