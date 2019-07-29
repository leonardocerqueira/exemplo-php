<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8"> 
  <title>Reading and writing xlsx file using phpspreadsheet</title>
  <link rel="stylesheet" type="text/css" href="./assets/style.css">
</head>
<body>
  <h1 class="big">Planilha de orçamento Midia Indoor por licença</h1>
  <form action="writer.php" method="post">
    <table class="left">
      <thead>
        <tr class="title">
          <td class="center title" colspan="3">TVs</td>
        </tr>
        <tr>
          <td>Quantidade</td>
          <td>TVs</td>
          <td>Valor Unitário</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="number" required min="0" value="0" name="B7"/></td>
          <td>TV 32 polegadas</td>
          <td><input type="number" required min="0" value="0" step="0.01" name="H7"/></td>
        </tr>
        <tr>
          <td><input type="number" required min="0" value="0" name="B8"/></td>
          <td>TV 40 polegadas</td>
          <td><input type="number" required min="0" value="0" step="0.01" name="H8"/></td>
        </tr>
        <tr>
          <td><input type="number" required min="0" value="0" name="B9"/></td>
          <td>TV 43 polegadas</td>
          <td><input type="number" required min="0" value="0" step="0.01" name="H9"/></td>
        </tr>
        <tr>
          <td><input type="number" required min="0" value="0" name="B10"/></td>
          <td>TV 49 polegadas</td>
          <td><input type="number" required min="0" value="0" step="0.01" name="H10"/></td>
        </tr>
        <tr>
          <td><input type="number" required min="0" value="0" name="B11"/></td>
          <td>TV 50 polegadas</td>
          <td><input type="number" required min="0" value="0" step="0.01" name="H11"/></td>
        </tr>
        <tr>
          <td><input type="number" required min="0" value="0" name="B12"/></td>
          <td>TV 55 polegadas</td>
          <td><input type="number" required min="0" value="0" step="0.01" name="H12"/></td>
        </tr>
        <tr>
          <td><input type="number" required min="0" value="0" name="B13"/></td>
          <td>TV 58 polegadas</td>
          <td><input type="number" required min="0" value="0" step="0.01" name="H13"/></td>
        </tr>
        <tr>
          <td><input type="number" required min="0" value="0" name="B14"/></td>
          <td>TV 65 polegadas</td>
          <td><input type="number" required min="0" value="0" step="0.01" name="H14"/></td>
        </tr>
        <tr>
          <td><input type="number" required min="0" value="0" name="B15"/></td>
          <td>TV 75 polegadas</td>
          <td><input type="number" required min="0" value="0" step="0.01" name="H15"/></td>
        </tr>
        <tr>
          <td><input type="number" required min="0" value="0" name="B16"/></td>
          <td>Monitor LFD</td>
          <td><input type="number" required min="0" value="0" step="0.01" name="H16"/></td>
        </tr>
        <tr>
          <td><input type="number" required min="0" value="0" name="B17"/></td>
          <td>Monitor Video Wall</td>
          <td><input type="number" required min="0" value="0" step="0.01" name="H17"/></td>
        </tr>
      </tbody>
    </table>
    <table class="left">
      <thead>
        <tr class="title">
          <td class="center title" colspan="3">Players</td>
        </tr>
        <tr>
          <td>Quantidade</td>
          <td>Player</td>
          <td>Valor Unitário</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="number" required min="0" value="0" name="M7"/></td>
          <td>Player Alphasignage</td>
          <td><input type="number" required min="0" value="292" step="0.01" name="S7"/></td>
        </tr>
        <tr>
          <td><input type="number" required min="0" value="0" name="M8"/></td>
          <td>Player Alphasignage Secundário</td>
          <td><input type="number" required min="0" value="249" step="0.01" name="S8"/></td>
        </tr>
        <tr>
          <td><input type="number" required min="0" value="0" name="M9"/></td>
          <td>TV Box</td>
          <td><input type="number" required min="0" value="0" step="0.01" name="S9"/></td>
        </tr>
      </tbody>
    </table>
    <table class="left w33l">
      <thead>
        <tr class="title">
          <td class="center title">Mão de Obra Instalação</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="number" required min="0" step="0.01" value="0" name="M12"/></td>
        </tr>
      </tbody>
    </table>
    <table class="left w33c">
      <thead>
        <tr class="title">
          <td class="center title">Quantidade de Licenças</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <select name="M15" required>
              <option value="" selected disabled>Escolha a quantidade de licenças</option>
              <option value="0">0</option>
              <option value="1">1</option>
              <option value="10">10</option>
              <option value="15">15</option>
              <option value="20">20</option>
              <option value="30">30</option>
              <option value="40">40</option>
              <option value="60">60</option>
              <option value="100">100</option>
            </select>
          </td>
        </tr>
      </tbody>
    </table>
    <table class="left w33r">
      <thead>
        <tr class="title">
          <td class="center title">Formas de pagamento</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>
            <select name="M18" required>
              <option selected disabled value="">Escolha a forma de pagamento</option>
              <option value="Anual">Anual</option>
              <option value="Mensal">Mensal</option>
            </select>
          </td>
        </tr>
      </tbody>
    </table>
    <table class="left">
      <thead>
        <tr class="title">
          <td class="center title" colspan="2">Planos</td>
        </tr>
        <tr>
          <td>Quantidade</td>
          <td>Planos</td>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td><input type="number" required min="0" value="1" name="M22"/></td>
          <td>
            <select name="N22" required>
              <option selected disabled value="">Selecione um plano</option>
              <option value="Plano Bronze">Plano Bronze</option>
              <option value="Plano Prata">Plano Prata</option>
              <option value="Plano Ouro">Plano Ouro</option>
              <option value="Plano Diamante">Plano Diamante</option>
            </select>
          </td>
        </tr>
      </tbody>
    </table>
    <input type="submit" value="Enviar"/>
  </form>
</body>
</html>