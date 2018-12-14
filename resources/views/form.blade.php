<div class="form-group">
  <label for="nome">Nome:</label>
  <input type="text" name="nome" class="form-control" value="{{ old('nome', @$clientes->nome) }}">
</div>

<div class="form-group">
  <label for="data_nascimento">Data de Nascimento:</label>
  <input type="date" name="data_nascimento" class="form-control" value="{{ old('data_nascimento', @$clientes->data_nascimento) }}">
</div>

<div class="form-group">
  <label for="cep">CEP:</label>
  <input type="text" id="cep" name="cep" class="form-control" value="{{ old('cep', @$clientes->cep) }}" maxlength="8">
</div>

<div class="form-group">
  <label for="rua">Rua:</label>
  <input type="text" id="rua" name="rua" class="form-control" value="{{ old('rua', '') }}" readonly >
</div>

<div class="form-group">
  <label for="bairro">Bairro:</label>
  <input type="text" id="bairro" name="bairro" class="form-control" value="{{ old('bairro', '') }}" readonly >
</div>

<div class="form-group">
  <label for="cidade">Cidade:</label>
  <input type="text" id="cidade" name="cidade" class="form-control" value="{{ old('cidade', '') }}" readonly >
</div>

<div class="form-group">
  <label for="uf">UF:</label>
  <input type="text" id="uf" name="uf" class="form-control" value="{{ old('uf', '') }}" readonly >
</div>

<div class="form-group">
  <label for="email">E-mail:</label>
  <input type="email" name="email" class="form-control" value="{{ old('email', @$clientes->email) }}">
</div>

<div class="form-group">
  <label for="telefone">Telefone:</label>
  <input type="text" id="telefone" name="telefone" class="form-control" value="{{ old('telefone', @$clientes->telefone) }}">
</div>

<div class="form-group">
  <label for="celular">Celular:</label>
  <input type="text" id="celular" name="celular" class="form-control" value="{{ old('celular', @$clientes->celular) }}">
</div>

<div class="form-group">
  <label for="matricula">Matrícula:</label>
  <input type="text" name="matricula" class="form-control" value="{{ old('matricula', @$clientes->matricula) }}">
</div>

<div class="form-group">
  <label for="login">Login:</label>
  <input type="text" name="login" class="form-control" value="{{ old('login', @$clientes->login) }}">
</div>

<div class="form-group">
  <label for="password">Senha:</label>
  <input type="password" name="password" class="form-control" value="{{ old('password', @$clientes->password) }}">
</div>

<div class="row">
  <div class="col-md-6 pt-3">
    <button type="submit" class="btn btn-primary btn-block">{{$name}}</button>
  </div>
</div>