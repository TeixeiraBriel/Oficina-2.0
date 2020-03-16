<table class="table table-striped table-bordered" style="width:100%">
    <thead>
      <tr>
        <th class="th-sm">Cliente
        </th>
        <th class="th-sm">Data
        </th>
        <th class="th-sm">Vendedor
        </th>
        <th class="th-sm">Descrição
        </th>
        <th class="th-sm">Valor
        </th>
      </tr>
    </thead>
    <tbody>
        @foreach ($Orcamentos as $orcamento)       
        <tr>
          <td>{{$orcamento->cliente}}</td>
          <td>{{$orcamento->dataOrcamento}}</td>
          <td>{{$orcamento->vendedor}}</td>
          <td>{{$orcamento->descricao}}</td>
          <td>R${{$orcamento->valor}}</td>
        </tr>
        @endforeach 
      <tr>
    </tbody>
  </table>