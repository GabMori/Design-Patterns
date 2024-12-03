Este projeto exemplifica a aplicação dos padrões de projeto Singleton e Decorator para criar um sistema de geração de relatórios..

Principais Funcionalidades
Singleton: Garante que o relatório seja gerado por uma única instância da classe.
Decorator: Facilita a personalização incremental do relatório, como inclusão de cabeçalhos, cores e bordas.
Organização dos Arquivos
src/RelatorioBase.php: Implementação do padrão Singleton, controlando a instância única do relatório.
src/RelatorioDecorator.php: Classe base para extensões decorativas.
src/CabecalhoDecorator.php: Permite adicionar um cabeçalho ao relatório.
src/CorDecorator.php: Aplica uma cor ao conteúdo do relatório.
src/BordaDecorator.php: Adiciona uma borda ao relatório.
Instruções para Uso
Clone o repositório com o comando:
bash
Copiar código
git clone https://github.com/andrielystarosky/ProjetoRegistro.git
Acesse a pasta do projeto:
bash
Copiar código
cd ProjetoRegistro
Execute o script para visualizar o relatório personalizado:
bash
Copiar código
php test.php
Exemplo de Resultado
Saída gerada:
Borda: [Cor: [Azul] *** Relatório de Teste *** Relatório de Teste]